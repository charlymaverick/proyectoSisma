@extends('layouts.login')
@section('contenido')
<div class="login-form login-signin">
	<!--begin::Form-->
	<form class="form" method="POST" action="{{ route('login') }}">
		<!--begin::Title-->
		@csrf
		<div class="pb-13 pt-lg-0 pt-5">
			<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Bienvenidos a Sisma</h3>
			<!-- <span class="text-muted font-weight-bold font-size-h4">New Here? -->
			<!-- <a href="{{ route('register') }}" id="kt_login_signup" class="text-primary font-weight-bolder">Create an Account</a></span> -->
		</div>
		<!--begin::Title-->
		<!--begin::Form group-->
		<div class="form-group">
			<label class="font-size-h6 font-weight-bolder text-dark">Correo</label>
			<input id="email" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
			@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
		</div>
		<!--end::Form group-->
		<!--begin::Form group-->
		<div class="form-group">
			<div class="d-flex justify-content-between mt-n5">
				<label class="font-size-h6 font-weight-bolder text-dark pt-5">Contraseña</label>
				<a href="{{ route('password.request') }}" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot"></a>
			</div>
			<input id="password" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
			@error('password')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
		</div>
		<!--end::Form group-->
		<!--begin::Action-->
		<div class="pb-lg-0 pb-5">
			<button type="submit"  class="btn btn-danger font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Entrar</button>
			
			
		</div>
		<!--end::Action-->
	</form>
	<!--end::Form-->
</div>
<!--end::Signin-->
@endsection