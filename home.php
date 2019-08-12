<?php
		session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SELL CAR</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css"> 
		<link rel="stylesheet" href="css/demo.css"> 
		<style>
			.upload-box{
				border:2px solid #000;
				margin-top:10px;
				margin-left:5px;
				margin-right:5px;
				margin-bottom:5px;
				border-radius:10px;
			}
			.image-box{
				border:1px solid #000;
				width:500px;
				margin:10px 10px;
				padding:5px 5px;
				background-color:gray;
			}
			.detail-box{
				color:#ff0000;
				font-size:20px;
				border:1px solid #000;
				position:relative;
				left:0px;
				background-color:#e4a58f;
			}
			#btn-upload{
				position:relative;
				top:-30px;
				left:380px;
				
				font-size:25px;
			}
		</style>
	</head>
	<body>
		<header class="cd-main-header">
		<div class="cd-main-header__logo"><a href="#0"><img src="car.png" style="height:80px;width:80px;position:relative;top:-20px;" alt="Logo"></a></div>

		<nav class="cd-main-nav js-main-nav" >
			<ul class="cd-main-nav__list js-signin-modal-trigger">
				<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="#0" >Home</a></li>
				<li><a class="cd-main-nav__item cd-main-nav__item--signin" href="profile.php" >Profile</a></li>
				<li><a class="cd-main-nav__item cd-main-nav__item--signin" href="logout.php" >Logout</a></li>
			</ul>
		</nav>
		<center><h1 style="color:#fff;font-family: sans-serif;font-size:45px;letter-spacing:10px;word-spacing:30px;padding-top:10px;">SELL CAR</h1></center>
		</header>
		
		<div class="upload-box">
		<?php
	
		$con=mysql_connect('localhost','root','root123');
		$db=mysql_select_db('sell_car');
		
		if($con){
			if($db){						
					echo '<div style="font-size:25px;">Welcome <strong>'.$_SESSION['Name'].'</strong></div>';
				}
		}else{
			die('Conection failed...');
		}
	?>
			<br/>
			<h1 style="margin-left:100px;font-size:20px;">Do you want to sell your car ? </h1>
			<a href="upload_car.php" > <button class="btn btn-outline-success my-2 my-sm-0" id="btn-upload">Click Here</button></a>
		</div>
		<hr/>
		<?php
			echo '<center>';
			$sql="SELECT * from upload_car_detail order by ID DESC";
			$result=mysql_query($sql);
			while($row=mysql_fetch_array($result))
			{
				echo '<div class="image-box">';
				echo '<div style="color:#0000FF;font-size:25px;">'.$row['Brand_name'].'<label style="float:right;">Rs '.$row['Cost'].'<label></div>';
				echo '';
				echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Car_image']).'" style="width:500px;height:400px;" /><br />';
				echo '<div class="detail-box"><label style="color:#000;position:relative;left:-180px;">Uploaded by - </label><br/><label style="position:relative;left:90px;margin-right:10px;">Name : '.$row['Name'].'</label><label style=" margin-left:120px;">  Mobile : '.$row['Mobile'].'</label></div></div><br />';
			}
			echo '</center>';
		
		?>
	</body>
</html>