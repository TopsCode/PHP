<?php
include('blheader.php');
include('connection.php');
include('banner.php');
$sel="select * from query_details JOIN technology ON query_details.tid=technology.tech_id order by date DESC"; 
$res=$conn->query($sel);
// echo "<pre>";
// print_r($res);
// exit();
while($r=$res->fetch_object()) 
{
?>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact" >
				<div class="row">
				<div class="col-md-8">
				<h3><a href="answers.php?qid=<?php echo $r->quid; ?>"><?php echo $r->questions; ?></a></h3>
				</div>
				<div class="col-md-1 techtop" style="padding-left: 5px; padding-right: 5px;">
				Tech: <?php echo $r->techname; ?>	
				</div>
				<div class="col-md-3 techtop topic">
				<label class="topiclabel">Topic: <?php echo $r->topic; ?></label></div></div>
				<div class="row">
				<div class="col-md-10 desc">
			    <?php echo $r->query_desc; ?>
				</div>
				</div><br>
				<?php
				$sel_ans="select * from answers JOIN user_details ON answers.userid=user_details.userid where quesid=$r->quid";
				$res_ans=$conn->query($sel_ans);
				while($r_ans=$res_ans->fetch_object())
				{
				?>
				<div class="row">
				<div class="userpic"><img class="img-circle imgcircle" height="50" width="80" src="upload/<?php echo $r_ans->profile_pic; ?>"></div>
				<div class="userpic" style="margin-left: 20px; margin-top: 15px;" class="userpic"><?php echo $r_ans->username; ?> says </div>
				</div>
				<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-11">
				<?php echo $r_ans->answers; ?>	
				</div>				 
				</div>
				<?php
				}
			?>
			</div>
			</div>
			</div>
			</div>
			</div>
<?php
}
include('footer.php');
?>