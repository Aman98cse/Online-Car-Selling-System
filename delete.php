<?php
		
		$con=mysql_connect('localhost','root','root123');
		$db=mysql_select_db('sell_car');
		
		if($con){
			if($db){
					$id=$_GET["id"];
					mysql_query("DELETE FROM upload_car_detail WHERE ID=$id");
				}
		}else{
			die('Some went wrong...');
		}
?>

<script type="text/javascript">
	window.location="profile.php";
</script>