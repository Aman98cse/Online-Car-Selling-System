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
			.loading{
				text-align:center;
				position:relative;
				top:200px;
				font-size:45px;
			}
		</style>
	</head>
	<body>
		<header class="cd-main-header">
		<div class="cd-main-header__logo"><a href="#0"><img src="car.png" style="height:80px;width:80px;position:relative;top:-20px;" alt="Logo"></a></div>

		<nav class="cd-main-nav js-main-nav">
			
		</nav>
		</header>
		<br/><br/>
		
		<?php
		
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password=md5($password);
		
		$con=mysql_connect('localhost','root','root123');
		$db=mysql_select_db('sell_car');
		
		if($con){
			if($db){
				$query=mysql_query("SELECT *FROM `registeration` WHERE `Email` LIKE '$email' AND `Password` LIKE '$password'");
				if($query){
					if($result=mysql_fetch_assoc($query)){
						$_SESSION['Name'] = $result['Userame'];
						$_SESSION['Email'] = $result['Email'];
						$_SESSION['Mobile'] = $result['Mobile'];
						
						echo '<div class="loading"><h1>Loading...</h1></div>';
					}else{
						die('Invalide username or password entered.<br /> <a href="index.php"><i>Back</i></a>');
					}
				}
			}
		}else{
			die('Some went wrong...');
		}
	?>
	<script type="text/javascript">
		window.location="home.php";
	</script>	
		
	</body>
</html>