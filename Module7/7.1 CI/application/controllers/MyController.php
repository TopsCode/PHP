<?php
//For Load All Views files and call all model functions

defined('BASEPATH') OR exit('No direct script access allowed');
class MyController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MyModel');
        $this->load->library('email');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('cookie');
        $this->load->helper('download');
        $this->load->helper("file");
        $this->load->helper("url");
        $this->load->helper("form");
        

    }
    public function testcontroller(){
        echo "hiii";
        require_once('NewController.php');
         $this->load->library('../controllers/NewController');

        $obj = new NewController;
    }
    
    //insert data with validation
    public function index() {
        
        $country['country'] = $this->MyModel->select_data('country');

        $this->form_validation->set_rules('uname', 'User Name', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required|min_length[3]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('email', 'Country', 'required|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('register', $country);
        } else {
            $u = $this->input->post('uname');
            $p = $this->input->post('pass');
            $e = $this->input->post('email');
            $g = $this->input->post('gender');
            $h = implode(',', $this->input->post('hobby'));
            $c = $this->input->post('country');

            $config['upload_path'] = './image'; //When we use do_upload
            $config['allowed_types'] = 'gif|jpg|png|jpeg'; //When we use do_upload allowed_type is mendatory
            $this->load->library('upload', $config); //This Library cant load in constructor because we can't fixed $config 
            
            $img_tmp = $_FILES['profile_pic']['tmp_name'];
            $img = $_FILES['profile_pic']['name'];
//            if ($this->upload->do_upload('profile_pic')) {  //enabale this code for use do_upload codeigniter function
 
            if (move_uploaded_file($img_tmp,"image/".$img)) {  //this code for php move_uploaded_file
                $File = $this->upload->data();
                $FileName = $File['file_name'];
                $data = array("uname" => $u,
                    "pass" => $p,
                    "email" => $e,
                    "gen" => $g,
                    "hobby" => $h,
                    "cid" => $c,
                    "image" => $FileName);
                $this->MyModel->insert_data('register', $data);
                $this->load->view('login');
            }
        }
    }

    
    //login details with session
    public function login() {
        if ($this->input->post('login')) {
            $u = $this->input->post('uname');
            $p = $this->input->post('pass');
            $data = array('username' => $u, 'password' => $p);
            $SelectData['MyData'] = $this->MyModel->join_two_where('user', 'city', 'user.city=city.city_id', $data);
           // echo "<pre>";
           // print_r($SelectData);
           // echo count($SelectData['MyData']);
           // exit;
            if (count($SelectData['MyData']) > 0) {
//                print_r($SelectData);
//                exit;
                $this->session->set_userdata($SelectData);
                $this->session->set_flashdata('msg', 'Session Value Set');
                set_cookie('UserID', $SelectData['MyData'][0]->uid, time() + 1800);
                redirect('MyController/my_profile/' . $SelectData['MyData'][0]->uid);
//                $this->load->view('my_profile',$SelectData);
            } else {
                echo "incorrect user name or password";
                redirect('MyController/login');
            }
        }
        $this->load->view('login');
    }

    //select data with join
    public function my_profile() {
        // echo "<pre>";
        // print_r($this->uri) ;
        $id = $this->uri->segment(3);
        $Where = array('user_id' => $id);
        $UserData['Data'] = $this->MyModel->join_two_where("user", 'city', 'user.city=city.city_id', $Where);
        $this->load->view('my_profile', $UserData);
        if($this->input->post('download')){
            $ImageName = $this->input->post('image');
            $url= base_url()."image/".$ImageName;
            $data=  file_get_contents($url);
            force_download($ImageName, $data);
        }
    }
    
    //select all data from table
    public function view_all() {
//        $id = $this->uri->segment(3);
//        $Where = array('uid' => $id);
        $UserData['Data'] = $this->MyModel->join_two("register", 'country', 'register.cid=country.cid');
        $this->load->view('view_all', $UserData);
        
    }

    //update data in table with validation
    public function edit() {

        $UserData['country'] = $this->MyModel->select_data('country');
        $id = $this->uri->segment(3);
        $Where = array('uid' => $id);
        $UserData['Data'] = $this->MyModel->join_two_where("register", 'country', 'register.cid=country.cid', $Where);
        if ($this->input->post('Update')) {
//            $this->form_validation->set_rules('uname', 'User Name', 'required');
//            $this->form_validation->set_rules('pass', 'Password', 'required|min_length[3]');
//            $this->form_validation->set_rules('gender', 'Gender', 'required');
//            $this->form_validation->set_rules('email', 'Country', 'required|valid_email');
//            if ($this->form_validation->run() == false) {
//                echo "if call";
//                exit;
//                redirect('MyController/edit/'.$id);
//                $this->load->view('edit_profile', $UserData);
//            } else {
//                echo "call";
//                exit;
            $u = $this->input->post('uname');
            $p = $this->input->post('pass');
            $e = $this->input->post('email');
            $g = $this->input->post('gender');
            $h = implode(',', $this->input->post('hobby'));
            $c = $this->input->post('country');
//                $ImageName = $this->input->post('profile_pic');
            $config['upload_path'] = './image';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('profile_pic')) {
                $File = $this->upload->data();
                $FileName = $File['file_name'];
            } else {
                $FileName = '';
            }
            $data = array("uname" => $u,
                "pass" => $p,
                "email" => $e,
                "gen" => $g,
                "hobby" => $h,
                "cid" => $c,
                "image" => $FileName);
            $this->MyModel->update_data('register', $data, $Where);
            // $this->MyModel->update('register', $data, $Where);
            redirect('MyController/my_profile/' . $id);
//            }
        }
        $this->load->view('edit_profile', $UserData);
    }

    public function logout() {
        $this->session->sess_destroy();
        set_cookie('UserID', '', time() - 1800);
        redirect('MyController/login/');
    }

    
    //session destroy code
    public function delete(){
        
        $id = $this->uri->segment(3);
        $Where = array('uid' => $id);
//        $file = base_url().'image/IMG-20161108-WA0011.jpg';
        $file = FCPATH.'image/IMG-20161108-WA0011.JPG';
        if(@unlink($file)){
            echo "unlink if called<br>";
        }else{
            echo "unlink else called<br>";
        }
        $UserData['Data'] = $this->MyModel->delete_data("register", $Where);
        redirect('MyController/view_all');
    }
    
    //send mail using CI library
    public function send_mail() {
        $u = $this->input->post('uname');
        $p = $this->input->post('pass');
        $e = $this->input->post('email');
        $this->load->view('view_email');

        if ($this->input->post('send')) {

            $to = $this->input->post('to');
            $subject = $this->input->post('subject');
            $msg = $this->input->post('message');

            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'topstech@gmail.com';
            $config['smtp_pass'] = '';
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n";
            $config['validation'] = TRUE; // bool whether to validate email or not      

            $this->email->initialize($config);

            $this->email->from('jay.amin@gmail.com', 'Tops Tech');
            $this->email->to($to);


            $this->email->subject($subject);

            $this->email->message($msg);

            if ($this->email->send()) {
                echo "<script>alert('Mail Send Success');</script>";
                //redirect('mycontroller/register');
            }

            echo $this->email->print_debugger();
        }
    }
    
    
    //jquery ajax for fetching state and city
    public function ajax_state() {
        $cid = $this->uri->segment(3);
        $id = array("cid" => $cid);
        $st = $this->MyModel->select_where('state', $id);
        ?>
        <option>---select state---</option>
        <?php
        foreach ($st as $state) { ?>
            <option value="<?php echo $state->sid; ?>"><?php echo $state->sname; ?></option>
            <?php
        }
    }
    public function CountryState() {
        $this->load->view('CountryState');
    }
    
    //download files with image
    public function download()
    {
       
       $url= base_url()."image/image.jpg";
       $data=  file_get_contents($url);
       $name='centerfest.png';
       force_download($name, $data); 
    }

}
