<!DOCTYPE html>
<html>
<head>
<title>WELCOME PAGE</title>
<link rel="stylesheet" type="text/css" href="css1/style4.css">
</head>
<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_email']){
	header("location:login.php");

}
?>
<header>

<div>
<p class="para">
<br>*.Voting Is Right To Every Citizen</br>
<br>*.The Right To Vote Is Universal And Equal,Regardless OF Class,Ethnic,Racial,Economic Or Other Affiliation</br>
<br>*.Your Vote Can Play Important Part In Making The Change</br>
<br>*.Go Vote Every Vote Counts</br>
</p>
</div>
</header>
</body>
</html>

