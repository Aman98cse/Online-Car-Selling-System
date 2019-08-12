<!DOCTYPE html>
<html>
<head>
<title>SELL CAR</title>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="bootstrap/jquery-3.3.1.min.js" ></script>
<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->
<style type="text/css">
	body{
		position:relative;
	}
	html,body{
		height:100%;
	}
	.cover_page{
		background-image:url(mesut-kaya-686770-unsplash.jpg);
		background-attachment:fixed;
		background-repeat:no-repeat;
		background-size:cover;
		height:100%;
		background-position:center;
	}
	.box{
		width:100%;
		background-color:white;
		border:1px solid black;
	}
	#explore_btn{
		border:1px solid #006699;
		background-color:#fff;
		color:#006699;
		width:180px;
		height:50px;
		font-size:25px;
	}
	#explore_btn:hover{
		background-color:#006699;
		color:#fff;
	}
	.img-box{
		width:100px;
		height:100px;
		
		
	}
	#my_name{
		font-size:65px;
		letter-spacing:50px;
		animation: animate_name 6s infinite;
	}
	@keyframes animate_name{
		0%{
			color:blue;
		}
		25%{
			color:coral;
		}
		50%{
			color:red;
		}
		75%{
			color:green;
		}
		100%{
			color:yellow;
		}
		
	}
	.nav_highlighted{
		background-color:#006699;
		color:white;
		width:100%;
	}
	#contact{
		padding-top:20px;
		background-color:#000;
		color:#fff;
		margin-top:20px;
	}
	#contact .jumbotron{
		background-color:#211f1f;
		color:#fff;
	}
	
	.progress{
		width:100%;
		height:28px;
		background-color:#eee;
		border-radius:0px;
	}
	.level{
		height:28px;
		line-height:25px;
		background-color:#00A1A7;
		color:black;
		font-size:25px;
	}
	.text{
		height:28px;
		line-height:25px;
		background-color:#04C2C9;
		color:#fff;
		font-size:11pt;
		border-radius:0px;
	}
	
.animation-target {
  -webkit-animation: animation 1000ms linear both;
  animation: animation 1000ms linear both;
}

/* Generated with Bounce.js. Edit at https://goo.gl/bkOekC */

@-webkit-keyframes animation { 
  0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, 0, 0, 1); }
  1.3% { -webkit-transform: matrix3d(3.905, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -237.02, 0, 0, 1); transform: matrix3d(3.905, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -237.02, 0, 0, 1); }
  2.55% { -webkit-transform: matrix3d(4.554, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -182.798, 0, 0, 1); transform: matrix3d(4.554, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -182.798, 0, 0, 1); }
  4.1% { -webkit-transform: matrix3d(4.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -125.912, 0, 0, 1); transform: matrix3d(4.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -125.912, 0, 0, 1); }
  5.71% { -webkit-transform: matrix3d(3.039, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -79.596, 0, 0, 1); transform: matrix3d(3.039, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -79.596, 0, 0, 1); }
  8.11% { -webkit-transform: matrix3d(1.82, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -31.647, 0, 0, 1); transform: matrix3d(1.82, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -31.647, 0, 0, 1); }
  8.81% { -webkit-transform: matrix3d(1.581, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -21.84, 0, 0, 1); transform: matrix3d(1.581, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -21.84, 0, 0, 1); }
  11.96% { -webkit-transform: matrix3d(1.034, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 4.825, 0, 0, 1); transform: matrix3d(1.034, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 4.825, 0, 0, 1); }
  12.11% { -webkit-transform: matrix3d(1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 5.53, 0, 0, 1); transform: matrix3d(1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 5.53, 0, 0, 1); }
  15.07% { -webkit-transform: matrix3d(0.947, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 12.662, 0, 0, 1); transform: matrix3d(0.947, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 12.662, 0, 0, 1); }
  16.12% { -webkit-transform: matrix3d(0.951, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 13.007, 0, 0, 1); transform: matrix3d(0.951, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 13.007, 0, 0, 1); }
  27.23% { -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.352, 0, 0, 1); transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.352, 0, 0, 1); }
  27.58% { -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.121, 0, 0, 1); transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.121, 0, 0, 1); }
  38.34% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.311, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.311, 0, 0, 1); }
  40.09% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.291, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.291, 0, 0, 1); }
  50% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.048, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.048, 0, 0, 1); }
  60.56% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.007, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.007, 0, 0, 1); }
  82.78% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  100% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); } 
}

@keyframes animation { 
  0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, 0, 0, 1); }
  1.3% { -webkit-transform: matrix3d(3.905, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -237.02, 0, 0, 1); transform: matrix3d(3.905, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -237.02, 0, 0, 1); }
  2.55% { -webkit-transform: matrix3d(4.554, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -182.798, 0, 0, 1); transform: matrix3d(4.554, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -182.798, 0, 0, 1); }
  4.1% { -webkit-transform: matrix3d(4.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -125.912, 0, 0, 1); transform: matrix3d(4.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -125.912, 0, 0, 1); }
  5.71% { -webkit-transform: matrix3d(3.039, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -79.596, 0, 0, 1); transform: matrix3d(3.039, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -79.596, 0, 0, 1); }
  8.11% { -webkit-transform: matrix3d(1.82, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -31.647, 0, 0, 1); transform: matrix3d(1.82, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -31.647, 0, 0, 1); }
  8.81% { -webkit-transform: matrix3d(1.581, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -21.84, 0, 0, 1); transform: matrix3d(1.581, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -21.84, 0, 0, 1); }
  11.96% { -webkit-transform: matrix3d(1.034, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 4.825, 0, 0, 1); transform: matrix3d(1.034, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 4.825, 0, 0, 1); }
  12.11% { -webkit-transform: matrix3d(1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 5.53, 0, 0, 1); transform: matrix3d(1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 5.53, 0, 0, 1); }
  15.07% { -webkit-transform: matrix3d(0.947, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 12.662, 0, 0, 1); transform: matrix3d(0.947, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 12.662, 0, 0, 1); }
  16.12% { -webkit-transform: matrix3d(0.951, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 13.007, 0, 0, 1); transform: matrix3d(0.951, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 13.007, 0, 0, 1); }
  27.23% { -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.352, 0, 0, 1); transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.352, 0, 0, 1); }
  27.58% { -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.121, 0, 0, 1); transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.121, 0, 0, 1); }
  38.34% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.311, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.311, 0, 0, 1); }
  40.09% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.291, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.291, 0, 0, 1); }
  50% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.048, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.048, 0, 0, 1); }
  60.56% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.007, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.007, 0, 0, 1); }
  82.78% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  100% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); } 
}


</style>

<script type="text/javascript">
		$(document).ready(function(){

			$(window).scroll(function(){
				//console.log($(window).scrollTop());
				if($(window).scrollTop() >80){
					$('#scroll-navbar').addClass('nav_highlighted');
				}
				if($(window).scrollTop() < 81){
					$('#scroll-navbar').removeClass('nav_highlighted');
				}
			});
			
			document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();

				document.querySelector(this.getAttribute('href')).scrollIntoView({
					behavior: 'smooth'
				});
			});
			});
		});
</script>


</head>
<body data-spy="scroll" data-toggle="#scroll-navbar">

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="scroll-navbar">
  <a class="navbar-brand" href="#" style="color:#ffffff">SELL CAR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#about" class="nav_btn">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#technical" class="nav_btn">Customer</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#projects" class="nav_btn">How we Work</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#contact" class="nav_btn">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="session_start.php" method="post">
      <input class="form-control mr-sm-2" type="email" name="email" placeholder="Email" required />
      <input class="form-control mr-sm-2" type="password" name="password" placeholder="Password" required />
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LogIn</button>
    </form>
  </div>
</nav>
<div class="cover_page">
	<center>
		<img src="car.png" style="width:200px;height:200px;position:relative;top:75px;"/>
		<center><div class="animation-target"><h1 style="color:#fff;padding-top:100px;font-family: 'Anton', sans-serif;" id="my_name"><b>CAR SELL</b></h1></div></center> 
		<a href="signup.php"><button class="btn btn-info" id="explore_btn" style="margin-top:50px;" data-aos="fade-down">FREE SIGN UP</button></a>
	</center>
</div>
<br />
<div id="about">
	<div class="container">
		<center><h1>About Us</h1>
		<img class="img-responsive" style="width:300px;height:300px;" src="fleet.svg" alt="image could'nt be displayed." data-aos="fade-right" />	

		<h3>
			<strong>Hello ! </strong><i>The system provides a search algorithm which enables the user to find a car with all details displayed matching the car model.
 Users can also view the information of vehicles purchased and their particulars.Development of an interactive car sale system which lets a customer to find a car and its details is the main objective of this project. 
Both the user and the administrators can access enter the details of every car. Administrators are responsible of maintaining the details
of vehicles like the Manufacturer information, Year, Model, Price, and Kilometers traveled.</i>
		</h3>
	</div>
</div>
<div id="technical" style="background-color:#2550a8;width:100%;margin-top:50px;margin-bottom:50px;">
	<div class="container" >
	<center><h1 style="color:#fff;">Customers Love Us</h1></center><br />
		<div class="row">
			<div class="col-md-2">	
			</div>
			<div class="col-md-8" data-aos="fade-left" >
				<h3 style="color:#fff;">
				We use data from the over half a million car adverts on our site. We don't stop there either. We also look at prices on over 3,500 dealer websites as well as from major car auctions and ex fleet and leasing car values. 
				?</h3 ><h3 style="color:#fff;">We update our car valuations every day too, so you get the very latest guide price to help you value your car or negotiate with a seller. 				
				ease.</h3><br/>
			 </div>
		</div>
	</div>
</div>

<div id="projects" data-aos="fade-up">
	<div class="container">
		<h1><center>How we work out the value of a car</center></h1><br />
		
		<div class="card-group">
		  <div class="card">
			<center><img class="card-img-top" src="valuation.svg" style="width:300px;height:300px;" alt="Card image cap"></center>
			<div class="card-body">
			  <h5 class="card-title">Do you want to sell your old car ?</h5>
			  <p class="card-text">We use details like the year a car was made and how far it's been driven (its mileage) to work out how much a car is worth now. Our car valuations are a good guide price, but bear in mind each car is unique and there are a good few things that can affect its value. </p>
			</div>
		  </div>
		  <div class="card">
			<center><img class="card-img-top" src="part-exchange.svg" style="width:300px;height:300px;" style="width:80%" alt="Card image cap"></center>
			<div class="card-body">
			  <h5 class="card-title">If you're selling</h5>
			  <p class="card-text">Our guide price is based on the very latest car values, so it's a great place to start when deciding how much you want to sell your car for. As well as a private sale price, we'll give you a part-exchange price so you can be confident of what your car is worth when negotiating a part-exchange deal. </p>
			</div>
		  </div>
		  <div class="card">
			<center><img class="card-img-top" src="handshake.svg" style="width:300px;height:300px;" alt="Card image cap"></center>
			<div class="card-body">
			  <h5 class="card-title">If you're buying</h5>
			  <p class="card-text">We'll give you a dealer price and a private sale price to help you decide who to buy from. Once you've found a car you like, remember our online car valuation. It will help you decide if the condition of the car and its features are worth what the seller is asking for. </p>
			</div>
		  </div>
		</div>
	</div>
</div>
	<div id="contact">
		<div class="container">
		<div data-aos="zoom-in">
			<h1><center>Contact Me</center></h1><br />
			<div class="error"></div>
			<form>
				<label>Name : </label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Enter Name" />
				<label>Email Address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" />
				<label>Message</label>
				<textarea class="form-control" rows="3" id="message" name="message" placeholder="Enter your message here..."></textarea><br />
				<button type="submit" class="btn btn-success form-control" >Send Message</button>
			</form>
		</div>
		</div>
		<div class="jumbotron" style="margin-top:20px; margin-bottom:0px">
			<center>
				<h2>Follow me</h2>
				<a href="#"><img src="facebook.png" style="width:50px;height:50px;margin:5px"/></a>
				<a href="#"><img src="twitter.png" style="width:50px;height:50px;margin:5px"/></a>
				<a href="#"><img src="linkedin.png" style="width:50px;height:50px;margin:5px"/></a>
				<p style="margin-top:10px;">copyright@ 2018 'SELL CAR' developed by Aman.</p>
			</center>
		</div>
	</div>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>