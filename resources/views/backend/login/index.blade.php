<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('/login/fonts/ionicons/css/ionicons.css')}}">
	<link rel="stylesheet" href="{{asset('/login/fonts/font.css')}}">
	<link rel="stylesheet" href="{{asset('/login/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('/login/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('/login/css/media.css')}}">
</head>
<body>
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<main class="cd-main">
		<section class="cd-section index7 visible">
			<div class="cd-content style7">
				<div class="login-box">
					<div class="login-form-slider">
						<div class="login-slide slide">
							<form action="{{route('login')}}" method="POST" class="padding-40px">
								@csrf
								<div class="form-group user-name-field">
									<input required type="text" name="username" class="form-control" placeholder="User name">
									<div class="field-icon"><i class="ion-person"></i></div>
								</div>
								<div class="form-group margin-bottom-30px forgot-password-field">
									<input required type="password" name="password" class="form-control" placeholder="Password">
									<div class="field-icon"><i class="ion-locked"></i></div>
								</div>
								<div class="form-group sign-in-btn">
									<button type="submit" class="submit">Sign In</button>
								</div>
								{{session('error')}}
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<div id="cd-loading-bar" data-scale="1"></div>
	@if (session('pesan'))
	<script>
		toastr.success('<?= session('pesan') ?>')
	</script>
	@endif
	<!-- pesan toast -->
	@if (session('error'))
	<script>
		toastr.error('<?= session('error') ?>')
	</script>
	@endif
	<!-- JS File -->
	<script src="{{asset('/login/js/modernizr.js')}}"></script>
	<script type="text/javascript" src="{{asset('/login/js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/login/js/bootstrap.js')}}"></script>
	<script src="{{asset('/login/js/velocity.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/login/js/script.js')}}"></script>
</body>
</html>