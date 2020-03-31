
<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_email']){
	header("location:login.php");

}
?>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-sm-6">
<h4 class="text text-center text-info-alert bg-primary alert">How to Cast Your Vote<b><i>?</i></b></h4>
<ul>
<li>
Firstly Select<b>"ID Generate"</b>from navigation bar
</li>
<li>
Then Send request to <b>"Admin"</b>for Generate Your ID
</li>
<li>
Click on the <b>"Election"</b>from navigation bar
</li>
<li>
Select available election 
</li>
<li>
The Secrecy of your ballet is maintained under the high secu</li>
<li>
Your vote remains anonymous os our systems architecture ballot
</li>
</ul>
</div>
<br>
<div class="col-sm-6">
<img src="images/votepic.jpg" class="img img-responsive img-thumbnail">
</div>
</div>
</div>
<?php
include("includes/footer.php");
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
