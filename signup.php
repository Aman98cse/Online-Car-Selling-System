<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
		<link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
		<style>
			.signup-box{
				width:350px;
				border:1px solid #000;
				position:relative;
				left:450px;
				padding:15px 15px;
			}
		
		</style>
	</head>
	<body>
		<header class="cd-main-header">
		<div class="cd-main-header__logo"><a href="#0"><img src="car.png" style="height:80px;width:80px;position:relative;top:-20px;" alt="Logo"></a></div>
		<nav class="cd-main-nav js-main-nav">
			<ul class="cd-main-nav__list js-signin-modal-trigger">
				
				<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="index.php" >Back</a></li>
			</ul>
		</nav>
		<center><h1 style="color:#fff;font-family: sans-serif;font-size:45px;letter-spacing:10px;word-spacing:30px;padding-top:10px;">SELL CAR</h1></center>
		</header>
		<br/><br/><br/><br/>
		<?php
			$success_message="";
		?>	
		
		<div class="signup-box">
			
			<form method="post" action="" enctype="multipart/form-data">
				<center><img src="user.png" style="width:120px;height:120px;position:relative;top:-50px;" /></center>				
				<input type="text" name="username" placeholder="Username" class="form-control mr-sm-2" required /><br/>
				<input type="email" name="email" placeholder="Email" class="form-control mr-sm-2" required /><br/>
				<input type="text" name="mobile" placeholder="Mobile number" class="form-control mr-sm-2" required /><br/>
				<input type="password" name="password" placeholder="Password" class="form-control mr-sm-2" required /><br/>
				<input type="checkbox" name="checked" /><label>Agree with all terms and condition</label><br /><br />
				<input type="reset" class="btn btn-danger" value="Reset" name="Reset" style="width:50%;float:left;" />
				<input type="submit" class="btn btn-success" value="Submit" name="submit" style="width:50%;float:right;" /><br/><br/>
			</form>	
		</div><br/>
		<?php
			$con=mysql_connect('localhost','root','root123');
			$db=mysql_select_db('sell_car');
			
			if($con){
			if($db){
				if(isset($_POST['submit'])){
					$username=$_POST['username'];
					$email=$_POST['email'];
					$mobile=$_POST['mobile'];
					$password=$_POST['password'];
					$password = md5($password);
				if(!empty($username) && !empty($email) && !empty($mobile) && !empty($password)){
					$query="INSERT INTO `sell_car`.`registeration` (`ID`, `Userame`, `Email`, `Mobile`, `Password`) 
							VALUES (NULL, '$username', '$email', '$mobile', '$password');";
					if(mysql_query($query)){
						
						$success_message = '<div class="alert alert-success">You have registered successfully.</div>';
					}
				   }else{
					   $success_message = '<div class="alert alert-danger">Please fill all the fields before submitting.</div>';
				   }
				}
			  }else die('database not found !');
			}else{
					die('Can not connect to mysql');
				}
		?>
		<center>
		<div class="error"><?php echo $success_message; ?></div>	
		</center>
	</body>
</html>