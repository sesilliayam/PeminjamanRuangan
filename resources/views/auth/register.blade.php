<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register &mdash; Peminjaman Ruangan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-register">

				<div class="container">
						<div class="col">
							<span class="login100-form-title">
								Sign Up
							</span>
						</div>
					<div class="login100-pic js-tilt" data-tilt>

					</div>
						<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                            @csrf
							<div class="align-content-around">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="formGroupExampleInput">Nama</label>
											<input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name" required>
											<small id="emailHelp" class="form-text text-muted">Contoh: Budi Santoso</small>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="formGroupExampleInput">Email</label>
											<input type="email" class="form-control" id="formGroupExampleInput" placeholder="" name="email" required>
											<small id="emailHelp" class="form-text text-muted">Contoh: budisantoso@telkomuniversity.com</small>
										</div>
									</div>
								</div>

								<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="formGroupExampleInput">Status</label>
												<input  name="status" type="text" class="form-control" id="formGroupExampleInput" placeholder="" required>
												<small id="" class="form-text text-muted">Contoh: Mahasiswa</small>
											</div>
										</div>
									</div>

								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="formGroupExampleInput">Password</label>
											<input type="password" class="form-control" id="formGroupExampleInput" placeholder="" name="password" required>
										</div>
									</div>
                                </div>
                                
                                <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Confirm Password</label>
                                                <input type="password" class="form-control" id="formGroupExampleInput" placeholder="" name="password_confirmation" required>
                                            </div>
                                        </div>
                                    </div>

								<br>

								<div class="row">
									<div class="col">
										<button class="login100-form-btn">
											Sign Up
										</button>
									</div>
                                </div>
                                
                                <div class="text-center p-t-136"> 
                                        <a class="txt2" href="{{route('login')}}">
                                                Sudah punya akun? Login
                                            </a>
                                </div>

							</div>
						</form>
				</div>
			</div>
		</div>
	</div>

	
	

	
<!--===============================================================================================-->	
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>

</body>
</html>