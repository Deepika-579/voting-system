
<?php

$url = 'back20.jpg';
?>
<html>
<head>
<style>
body
{
background-image:url('<?php echo $url ?>');
}
</style>
</head>
<body>
</body>
</html><?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_id_generated']){
	header("location:elections.php");
	exit();

}
?>
<br>
<div class="container">
<div class="col-md-6 col-md-offset-3">
<form method="post" action="">
<?php
require("includes/db.php");
$elections_name=$_GET['elections_name'];
 $elections_name=str_replace('-',' ',$elections_name);
 ?>
 <div class="form-group">
 <input type='text' value="<?php echo $elections_name;?>" class='form-control' readonly/>
 </div>
 <?php
$select="select * from candidates_tb2 where elections_name='$elections_name'";
$run=$conn->query($select);
if($run->num_rows>0){
	while($row=$run->fetch_array()){
		?>
		<div class="form-group">
		<input type="radio" name="candidates_name" class="list-group" value="<?php echo $row['candidates_name'];?>">
		<label><?php echo $row['candidates_name'];?></label>
		</div>
		<?php
	}
}
?>
<input type="submit" name="vote_caste" class="btn btn-success" value="Now Caste Your Vote">



</form>

</div>
</div>
<?php
if(isset($_POST['vote_caste'])){
	 $candidates_name=$_POST['candidates_name'];
	 $user_email=$_SESSION['user_email'];
	 $select="select * from results_tb2 where user_email='$user_email' and elections_name='$elections_name'";
	 $exe1=$conn->query($select);
	 if($exe1->num_rows>0){
		 echo "You have Already caste Your Vote against Election".$elections_name;
	 }
	 else{
	 $insert="insert into results_tb2(user_email,candidates_name,elections_name)values('$user_email','$candidates_name','$elections_name')";
	 $run=$conn->query($insert);
	 if($run){
		 $update="update candidates_tb2 set total_votes=`total_votes`+'1' where candidates_name='$candidates_name' and elections_name='$elections_name'";
		 $exe=$conn->query($update);
		 if($exe){
			 echo "You Have Successfully Caste Your Vote
			 ";
		 }
		 else{
			 echo "You Didnot caste Your Vote Successfully";
		 }			 
	 }
	 else{
		 echo "error";
	 }
	 }
}
?>
