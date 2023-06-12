<?php
define('REQUIRED_FIELD_ERROR','This field is required');
$errors=[];
$username="";
$email="";
$password="";
$confirmpass="";

$conn=mysqli_connect('localhost','root','','user');


if($_SERVER['REQUEST_METHOD']==='POST'){
	
function post_data($field){

			$_POST[$field]??="";

			return htmlspecialchars(stripslashes($_POST[$field]));
		}

		$username=post_data('username');
		$email=post_data('email');
		$pass=post_data('password');
		$confirmpass=post_data('confirmpassword');


		if(!$username){
			$errors['username']= REQUIRED_FIELD_ERROR;
		}
		if(!$email){
			$errors['email']= REQUIRED_FIELD_ERROR;
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$errors['email']="this should be a email format";
		}
		if(!$pass){
			$errors['password']= REQUIRED_FIELD_ERROR;
		}
		if($pass&& $confirmpass && strcmp($pass, $confirmpass)!==0){
			$errors['confirmpassword']="this should match the password";
		}
		if(!$confirmpass){
			$errors['confirmpassword']= REQUIRED_FIELD_ERROR;
		}
		if(empty($errors)){

			if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
			}
			else{
					$hashpass=password_hash($pass, PASSWORD_DEFAULT);
					$x=rand();
				$sql="INSERT INTO user(id,name,email,password_hash) VALUES('$x','$username','$email','$hashpass')";
			}
						if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} 
					else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

		}

		mysqli_close($conn);

}


?>


<!DOCTYPE html>
<html>
<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<form method="post" action="">
		<div class="container   my-5 d-flex justify-content-center ">
		<div class="col-mb-3 border   col-md-4">
			<label for="UsernameLabel" class="form-label">Username</label>
			<input type="text" class="form-control <?php echo isset($errors['username'])? 'is-invalid' : ''?>" name="username" placeholder="Username" value="<?php echo $username;?>">
			<div class="invalid-feedback">
				
				<?php echo $errors['username'] ?? ''; ?>
			</div>
			
			<label for="EmailLabel" class="form-label">Email</label>
			<input type="email" class="form-control <?php echo isset($errors['email'])? 'is-invalid' : ''?>" name="email" placeholder="Email"value="<?php echo $email;?>">
			<div class="invalid-feedback">
				
				<?php echo $errors['email'] ?? ''; ?>
			</div>

				<label for="PassLabel" class="form-label ">Password</label>
			<input type="password" class="form-control <?php echo isset($errors['password'])? 'is-invalid' : ''?>" name="password" placeholder="Password"value="<?php echo $password;?>">
			<div class="invalid-feedback">
				
				<?php echo $errors['password'] ?? ''; ?>
			</div>

			<label for="RepeatPassLabel" class="form-label">Rewrite Password</label>
			<input type="password" class="form-control <?php echo isset($errors['confirmpassword'])? 'is-invalid' : ''?>" name="confirmpassword" placeholder="Confirm Password"value="<?php echo $confirmpass;?>">
			<div class="invalid-feedback">
				
				<?php echo $errors['confirmpassword'] ?? ''; ?>
			</div>
				<input type="submit">
		</div>
	</div>
</form>












<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>














</html>