<?php
			session_start();
			$con=mysql_connect('localhost','root','root123');
			$db=mysql_select_db('sell_car');
			
			$result="";
			if(isset($_POST['submit']))
			{
				$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
				$brand=$_POST['brand'];
				$model=$_POST['model'];
				$year=$_POST['year'];
				$cost=$_POST['cost'];
				$name=$_SESSION['Name'];
				$mobile=$_SESSION['Mobile'];
				$query="INSERT INTO upload_car_detail(ID,Name,Mobile,Car_image,Brand_name,Model,Year,Cost) VALUES (NULL,'$name','$mobile','$file','$brand','$model','$year',$cost)";
				if(mysql_query($query))
				{
					$result='<div class="alert alert-success">Image successfully inserted into database</div>';
				}else{
					$result='<div class="alert alert-danger">Opps! Image Can not be uploaded to database.</div>';
				}
			}
		?>
<!DOCTYPE html>
<html>
	<head>
		<title>SELL CAR</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
		<link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
		<style>
			.upload-box{
				position:relative;
				left:520px;
				width:350px;
				border:1px solid #000;
				padding:10px;
			}
			.error{
				position:relative;
				top:-20px;
			}
		</style>
	</head>
	<body>
		<header class="cd-main-header">
		<div class="cd-main-header__logo"><a href="#0"><img src="car.png" style="height:80px;width:80px;position:relative;top:-20px;" alt="Logo"></a></div>

		<nav class="cd-main-nav js-main-nav">
			<ul class="cd-main-nav__list js-signin-modal-trigger">
				<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="home.php" >Home</a></li>
				<li><a class="cd-main-nav__item cd-main-nav__item--signin" href="profile.php" >Profile</a></li>
				<li><a class="cd-main-nav__item cd-main-nav__item--signin" href="logout.php" >Logout</a></li>
			</ul>
		</nav><center><h1 style="color:#fff;font-family: sans-serif;font-size:45px;letter-spacing:10px;word-spacing:30px;padding-top:10px;">SELL CAR</h1></center>
		</header>
		<br/><br/><br/><br/>
		
		<center>
		<div class="error" ><?php echo $result; ?></div>	
		</center>
		<div class="upload-box">
			<form method="post" action="" enctype="multipart/form-data">
				<center><img src="tabOneMan.png" style="width:150px;height:120px;position:relative;top:-50px;" /></center>
				<!-- UPLOAD CAR IMAGE-->
				<h2>Select Image</h2><br/>
				<input type="file" name="image" id="image" /><br/><br/>
				<input type="text" name="brand" placeholder="Brand Name" class="form-control" required /><br/>
				<input type="text" name="model" placeholder="Model" class="form-control" required /><br/>
				<input type="text" name="year" placeholder="Year" class="form-control" required /><br/>
				<select name="KmDriven">
					<option value="Up to 10000" selected>Up to 10000 Km</option>
					<option value="10000-20000 Km">10000-20000 Km</option><br/>
					<option value="20000-40000 Km">20000-40000 Km</option><br/>
					<option value="40000-60000 Km">40000-60000 Km</option><br/>
					<option value="60000-100000 Km">60000-100000 Km</option><br/>
					<option value="Above 100000 Km">Above 100000 Km</option><br/>
				</select><br/><br/>
				<input type="text" name="cost" placeholder="Expected Cost" class="form-control" required /><br/>
				<input type="checkbox" name="checked" /><label>Agree with all terms and condition</label><br /><br />
				<input type="submit" class="btn btn-success" value="Submit" name="submit" style="width:100%;" />
			</form>
		</div>
		<!--<center><img src="tabOneMan.png" style="width:215px;height:145px;position:relative;top:-490px;" /></center>-->
		
	</body>
</html>