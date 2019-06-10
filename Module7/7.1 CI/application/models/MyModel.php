<?php
class MyModel extends CI_Model{
    public function select_data($tbl) {
        $Data = $this->db->get($tbl);
        return $Data->result();
    }
    public function insert_data($tbl,$data) {
        $Data = $this->db->insert($tbl,$data);
        return $Data;
    }
    public function select_where($tbl,$where) {
        $SelectWhereData = $this->db->get_where($tbl,$where);
        echo $this->db->last_query();
        return $SelectWhereData->result();
    }
    public function join_two($tbl1,$tbl2,$ON) {
        $this->db->select('*');
        $this->db->from($tbl1);
        $this->db->join($tbl2,$ON);
        $SelectJoinData = $this->db->get();
        return $SelectJoinData->result();
    }
    public function join_two_where($tbl1,$tbl2,$ON,$Where) {
        $this->db->select('*');
        $this->db->from($tbl1);
        $this->db->join($tbl2,$ON);
        $this->db->where($Where);
        $SelectWhereData = $this->db->get();
        return $SelectWhereData->result();
    }
    public function update_data($tbl,$data,$Where) {
        $this->db->update($tbl,$data,$Where);
    }
    public function delete_data($tbl,$where){
        $this->db->delete($tbl,$where);
    }
}
?>