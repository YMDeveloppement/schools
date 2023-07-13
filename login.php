<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/schools/pages/css/login.css">	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
	<title>Document</title>

	<style>
		.sign{
			border-radius: 20px !important;
			border: 1px solid #FF4B2B !important;
			background-color: #FF4B2B !important;
			color: #FFFFFF !important;
			font-size: 12px !important;
			font-weight: bold !important;
			padding: 12px 45px !important;
			letter-spacing: 1px !important;
			text-transform: uppercase !important;
			transition: transform 80ms ease-in !important;"
		}


		.containerNow {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
			position: relative;
			overflow: hidden;
			width: 868px !important;
			max-width: 100%;
			min-height: 580px !important;
		}
		body {
			background: #f6f5f7;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			font-family: 'Montserrat', sans-serif;
			height: 100vh;
			margin: 6px 0 50px;
			overflow: hidden;
		}
		.alert{
			width: 100%;
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center ;
		}
		.alert_content{
			width: 100%;
			text-align: center;
			color: #721c24;
			background-color: #f8d7da;
			border-color: #f5c6cb;
			padding: 0.75rem 1.25rem;
			margin-bottom: 1rem;
			border-radius: 50px;
		}
	</style>

</head>
<body>

<!-- <h2>Weekly Coding Challenge #1: Sign in/up Form</h2> -->
<div class="container containerNow" id="container">
	<div class="form-container sign-up-container">
		<form action="Controllers/users.php" method="post">
			
			<?php 
				if(isset($_GET["error"])){

					$error=$_GET["error"] ;
					// if($error){
						// right-panel-active
						echo <<<script
							<script> 
							console.log("tazazaz");
								const container = document.getElementById('container');
								container.classList.add("right-panel-active");
							</script>
						script;
					// }	
					echo <<<alert
						<div class="alert" role="alert">
							<div class="alert_content">
							<i class="fa-solid fa-circle-exclamation"></i> $error
							</div>
						</div>	
					alert;
				}
			
				
			?>
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="name"  id="name" />
			<input type="text" placeholder="Name" name="surname"  id="surname" />
			<input type="email" placeholder="Email" name="email"  id="email"/>
			<input type="password" placeholder="Password" name="passw"  id="passw"/>
			<input type="password" placeholder="Password" name="confirmPw"  id="confirmPw"/>
			<!-- <button type="submit" id="Sign Up" name ='Sign Up'>Sign In</button> -->
			<input type="submit" id="Sign In" name ='SignIn' value="Sign In" class="sign" />
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="Controllers/users.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>   
			</div>
			<span>or use your account</span>
			<!-- <input type="hidden" name="id"> -->
			<input type="email" name="email"  id="email" placeholder="Email" />
			<input type="password" name="password"  id="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<!-- <button type ="submit" name = "Sign In">Sign In</button> -->
			<input type ="submit" name = "login" id="login" value="Login"/>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn" style="border-radius: 20px !important;border: 1px solid white !important;background-color: transparent !important;color: #FFFFFF !important;font-size: 12px !important;font-weight: bold !important;padding: 12px 45px !important;letter-spacing: 1px !important;text-transform: uppercase !important;transition: transform 80ms ease-in !important;width: auto !important;">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<input type ="submit" class="ghost" id="signUp" name = "SignIn"  value="Sign In" style="border-radius: 20px !important;border: 1px solid white !important;background-color: transparent !important;color: #FFFFFF !important;font-size: 12px !important;font-weight: bold !important;padding: 12px 45px !important;letter-spacing: 1px !important;text-transform: uppercase !important;transition: transform 80ms ease-in !important;width: auto !important;"/>
				<!-- <button type="submit" class="ghost" id="signUp">Sign Up</button> -->
			</div>
		</div>
	</div>
</div>
<script src="../schools/pages/js/login.js"></script>
<!-- <script>	 alert('yassine')</script> -->


</body>
</html>