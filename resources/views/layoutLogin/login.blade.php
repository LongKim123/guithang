<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Website CPSeed</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="{{asset('login/css/style.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{asset('login/css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
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
				<h1>Login Web CpSeed</h1>
			</div>
			<!--//header-->
			<div class="main-content-agile">
				<div class="sub-main-w3">	
					<div class="wthree-pro">
						<h2>Login Here</h2>
					</div>
					<form action="{{route('dang-nhap')}}" method="post">
						@csrf
						<input placeholder="Username or E-mail" name="email" class="user" type="email" required="">
						<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br><br>
						<input  placeholder="Password" name="password" class="pass" type="password" required="">
						<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
						<div class="sub-w3l">
					<a class="btn-social-fb" href="{{URL::to('/login-facebook')}}" role="button"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="50"
                      height="50"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"
                      /></svg
                  ></a>
                  <a class="btn-social-yt"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="50"
                      height="50"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"
                      /></svg
                  ></a>
                  <a  style="font-size: 24px; color:black;" href="{{route('dang-ky')}}">Sign Up?</a>
							

								
							<div class="right-w3l">
								<input type="submit" value="Login">
								
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