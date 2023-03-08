@extends('layouts.userLayout')

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />
	<link rel="stylesheet" href="{{asset('css/auth/register.style.css')}}">

	

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
@section('title', 'Sign Up')

@section('content')
{{-- <x-nav-component/> --}}
<main class="d-flex w-100">
	<div class="container d-flex flex-column">
		<div class="row d-flex justify-content-end">
			<div class="col-sm-10 col-md-8 col-lg-6  h-100 signup">
				<div class="d-table-cell align-middle">

					<div class="text-center mt-4">
						<h1 class="getstarted">Get started</h1>
						<p class="lead" id="lead">
							Start creating the best possible user experience for you customers.
						</p>
					</div>

					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
								<div class="text-center">
									<img src="img/logo/G2.png" alt="GG" class="img-fluid rounded-circle" width="132" height="132" />
								</div>
								
								<form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
								@csrf
									<div class="mb-3">
										<label class="form-label" for="name">Name</label>
										@error('name')
										  <div class="alert alert-danger">{{$message}}</div>
										   @enderror
										<input class="@error('name')
										is-invalid
										@enderror form-control form-control-lg" id="name" value="{{old('name')}}" type="text" name="name" placeholder="Enter your name" />

									</div>
									
									<div class="mb-3">
										<label class="form-label" for="email">Email</label>
										@error('email')
										<div class="alert alert-danger">{{$message}}</div>
									  @enderror
										<input class="@error('email')
										is-invalid
									@enderror form-control form-control-lg" id="email" value="{{old('email')}}" type="email" name="email" placeholder="Enter your email" />
									</div>
									<div class="mb-3">
										<label class="form-label" for="password">Password</label>
										@error('password')
										  <div class="alert alert-danger">{{$message}}</div>
										@enderror
										<input class="@error('password')
										is-invalid
										@enderror form-control form-control-lg" id="password" value="{{old('password')}}" type="password" name="password" placeholder="Enter password" />
									</div>
									<div class="mb-3">
										<label class="form-label" for="password_confirmation">Confirm Password</label>
										@error('password_confirmation')
										  <div class="alert alert-danger">{{$message}}</div>
										@enderror
										<input class="@error('password_confirmation')
										is-invalid
									@enderror form-control form-control-lg" id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm password" />
									</div>
									<div class="mb-3">
										<label class="form-label" for="photo">Photo</label>
										<input class="form-control form-control-lg" id="photo" type="file" name="photo" accept="image/*" />
									</div>
									<div class="text-center mt-3">
										
										 <button type="submit" id="signupbtn" class="btn btn-lg">Sign up</button> 
									</div>
									
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>


@endsection



{{-- <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />
	<link rel="stylesheet" href="{{asset('css/register.style.css')}}">

	<title>Sign Up | GoldGym</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row d-flex justify-content-end">
				<div class="col-sm-10 col-md-8 col-lg-6  h-100 signup">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="getstarted">Get started</h1>
							<p class="lead">
								Start creating the best possible user experience for you customers.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="img/logo/G2.png" alt="GG" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									
									<form method="POST" action="{{route('register')}}">
									@csrf
										<div class="mb-3">
											<label class="form-label" for="name">Name</label>
											@error('name')
                                  			<div class="alert alert-danger">{{$message}}</div>
                               				@enderror
											<input class="@error('name')
											is-invalid
											@enderror form-control form-control-lg" id="name" value="{{old('name')}}" type="text" name="name" placeholder="Enter your name" />

										</div>
										
										<div class="mb-3">
											<label class="form-label" for="email">Email</label>
											@error('email')
											<div class="alert alert-danger">{{$message}}</div>
										  @enderror
											<input class="@error('email')
											is-invalid
										@enderror form-control form-control-lg" id="email" value="{{old('email')}}" type="email" name="email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label" for="password">Password</label>
											@error('password')
                                  			<div class="alert alert-danger">{{$message}}</div>
                                			@enderror
											<input class="@error('password')
											is-invalid
											@enderror form-control form-control-lg" id="password" value="{{old('password')}}" type="password" name="password" placeholder="Enter password" />
										</div>
										<div class="mb-3">
											<label class="form-label" for="password_confirmation">Confirm Password</label>
											@error('password_confirmation')
                                  			<div class="alert alert-danger">{{$message}}</div>
                                			@enderror
											<input class="@error('password_confirmation')
											is-invalid
										@enderror form-control form-control-lg" id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm password" />
										</div>
										<div class="mb-3">
											<label class="form-label" for="photo">Photo</label>
											<input class="form-control form-control-lg" id="photo" type="file" name="photo" accept="image/*" />
										</div>
										<div class="text-center mt-3">
											
											 <button type="submit" id="signupbtn" class="btn btn-lg">Sign up</button> 
										</div>
										
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html> --}}