<?php
		session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SELL CAR</title>
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
		<link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
		<style>
			.image-box{
				border:1px solid #000;
				height:300px;
				width:350px;
				margin:10px 10px;
				padding:5px 5px;
			}
			.profile-box{
				font-size:20px;
				background-color:#000;
				color:#fff;
				position:absolute;
				top:80px;
				width:250px;
				height:600px;;
				border:1px solid #fff;
			}
			.inner-box{
				padding:5px 5px;
				font-size:20px;
				border-bottom:1px solid #fff;
			}
			.inner-box:hover{
				background-color:#454242;
			}
			.outer-box{
				
				margin-left:280px;
			}
			

		.sidebar{
			position:fixed;
			width:250px;
			height:576px;
			background-color:#0005;
			left:-250px;
			transition:All 500ms linear;
		}
		.sidebar.active{
			left:0px;
		}
		.sidebar .toggle-btn{
			position:absolute;
			left:260px;
			top:20px;
			cursor:pointer;
		}
		.sidebar .toggle-btn span{
			display:block;
			background-color:lightblue;
			width:30px;
			height:2px;
			margin:5px 0px;
		}


		.sidebar ul{
			margin-top:50px;
			border-top:1px solid #fff;
		}
		.sidebar ul li{
			list-style:none;
			display:block;
			padding:15px;
			border-bottom:1px solid #fff;
		}

		.sidebar ul li:hover{
			background-color:#0008;
		}
			
		</style>
		<script>
			function toggleSidebar(){
			var side = document.getElementsByClassName('sidebar');
			side[0].classList.toggle('active');
		}
		</script>
	</head>
	<body>
		<header class="cd-main-header">
		<div class="cd-main-header__logo"><a href="#0"><img src="car.png" style="height:80px;width:80px;position:relative;top:-20px;" alt="Logo"></a></div>

		<nav class="cd-main-nav js-main-nav">
			<ul class="cd-main-nav__list js-signin-modal-trigger">
				<li><a class="cd-main-nav__item cd-main-nav__item--signin" href="home.php" >Home</a></li>
				<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="profile.php" >Profile</a></li>
				<li><a class="cd-main-nav__item cd-main-nav__item--signin" href="logout.php" >LogOut</a></li>
			</ul>
		</nav>
		<center><h1 style="color:#fff;font-family: sans-serif;font-size:45px;letter-spacing:10px;word-spacing:30px;padding-top:10px;">SELL CAR</h1></center>		
		</header>
		<br/><br/>
		
		
			<div class="sidebar" style="margin-top:-30px;">
				<div class="toggle-btn" onclick="toggleSidebar()">
					<span></span>
					<span></span>
					<span></span>
				</div>
					<center><img src="user.png" alt="user logo" style="width:150px;height:150px;" /><br/><h1 style="font-size:25px;color:#000;">SELL CAR</h1></center>	
					
				<ul style="color:#fff;">
					<li><?php echo $_SESSION['Name']; ?></li>
					<li><?php echo $_SESSION['Email']; ?></li>
					<li><?php echo $_SESSION['Mobile']; ?></li>
					
				</ul>
			</div>
		

		<div class="outer-box">
		<div style="width:100%;height:350px;background-image:url(profile.jpg);color:#000;font-size:35px;"><center><h2 style="position:relative;top:220px;">Welcome <?php echo $_SESSION['Name']; ?></h2></center></div>
		<h1 style="font-size:20px;font-family:Lucida Handwriting;">Images uploaded by you:</h1><br/>
		<?php
		
		$con=mysql_connect('localhost','root','root123');
		$db=mysql_select_db('sell_car');
		
		if($con){
			if($db){
					$name=$_SESSION['Name'];
					$sql = "SELECT Car_image from upload_car_detail where Name='$name'";
					$sql="SELECT Car_image,ID from upload_car_detail where Name='$name' order by ID DESC";
					$result=mysql_query($sql);
					while($row=mysql_fetch_array($result))
					{
						echo '<table style="float:left;margin:10px;border:1px solid #000;"><tr><td>';
						echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Car_image']).'" style="width:300px;height:250px;" /></td></tr><tr><td>';
						?><a href="delete.php?id=<?php echo $row["ID"]; ?>" style="color:#000;font-size:18px;"><center>Delete</center></a><?php 
						echo '</td></tr></table>';
					}
				}
		}else{
			die('Some went wrong...');
		}
	?>
	</div>
	</body>
</html>