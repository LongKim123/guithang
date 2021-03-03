<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Classic Login Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="{{asset('login/login_css/style.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href=""> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- js -->
<script type="text/javascript" src="{{asset('login/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<script src="{{asset('login/js/jquery.vide.min.js')}}"></script>
	<!-- main -->
	<div data-vide-bg="{{asset('login/video/Ipad')}}">
		<div class="center-container">
			<!--header-->
			<div class="header-w3l">
				<h1>Register Web CpSeed</h1>
			</div>
			<!--//header-->
			<div class="main-content-agile">
				<div class="sub-main-w3">	
					<div class="wthree-pro">
						<h2>Register</h2>
					</div>
					<form action="{{route('dang-ky.store')}}" method="post">
						@csrf
						<input  placeholder="UserName" name="name" class="user" type="text" required="">
						<input placeholder="E-mail" name="email" class="user" type="email" required="">
						
						<input  placeholder="Password" name="password" class="pass" type="password" required="">
						
						<input  placeholder="Address" name="address" class="user" type="text" required="">
						<input  placeholder="Phone Number" name="phone_number" class="user" type="text" required="">
						<div class="sub-w3l">
							<h6><a href="{{URL::to('/')}}">Login?</a>
							</h6>
							<div class="right-w3l">
								<input type="submit" value="Register">
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--//main-->

			<!--footer-->
			<div class="footer">
				
			</div>
			<!--//footer-->
		</div>
	</div>

</body>
</html>