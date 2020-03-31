<?php
include("includes/header.php");
?>
<?php
require("includes/db.php");
$emailError="";
$accountSuccess="";
if(isset($_POST['register'])){
 $user_name=$_POST['fullname'];
 $user_aadhar=$_POST['aadhar'];
 $user_email=$_POST['email'];
 $user_phone=$_POST['phno'];
 $user_gender=$_POST['gender'];
 $user_province=$_POST['province'];
 $user_password=$_POST['password'];
$select="select * from users_db where user_email='$user_email'";
$exe=$conn->query($select);
if($exe->num_rows>0){
$emailError="<p class='text text-center text-danger'>Email Already Registered</p>";
}
else{
$insert="insert into users_db(user_name,user_aadhar,user_email,user_phone,user_gender,user_province,user_password)values('$user_name','$user_aadhar','$user_email','$user_phone','$user_gender','$user_province','$user_password')";
$run=$conn->query($insert);
if($run){
$accountSuccess="<p class='text text-center text-success'>Account Created Successfully</p>";
}
else{
echo "Error";
}
}
}
?>
<body>
<br>
<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 bg-info" style="box-shadow:2px 2px 2px 2px gray;">
				<h3 class="text text-center alert bg-primary">User Registration</h3>
<?php
if($emailError!=""){
echo $emailError;
}
if($accountSuccess!=""){
echo $accountSuccess;
}
?>
<form method="post">
					<div class="form-group">
						<label for="Username">Full Name:</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="fullname" placeholder="Enter full name" required>
					</div>
					<div class="form-group">
						<label for="aadhar">Aadhar Number</label>
						<input type="number" class="form-control" id="exampleInputaadhar" name="aadhar" placeholder="Enter aadhar nuumber" required>
					</div>
<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email address" required>
					</div>
<div class="form-group">
						<label for="Phone number">Phone Number</label>
						<input type="tel" class="form-control"  name="phno" i"exampleInputphonenumber" placeholder="Enter phone number" required>
					</div>
					<div class="form-group">
						<label for="Gender">Gender</label>
						<select name="gender" class="form-control">
							<option value="">Select</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					<div class="form-group">
						<label for="province">Province</label>
						<select name="province" class="form-control">
							<option value="">Select</option>
							<option value="Andhra Pradesh">Andhra pradesh</option>
							<option value="Telengana">Telengana</option>
							<option value="Maharastra">Maharastra</option>
							<option value="Tamil Nadu">Tamil Nadu</option>	
						</select>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block" name="register">Submit</button>
					</div>
	
				</form>
</br>
			</div> 
		</div>
	</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>