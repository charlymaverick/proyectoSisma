@extends('layouts.login')
@section('contenido')
<div class="login-form">
<!--begin::Form-->
<form class="form" method="post" action="{{ route('password.email') }}">
    <!--begin::Title-->
    @csrf
    <div class="pb-13 pt-lg-0 pt-5">
        <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten Password ?</h3>
        <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
    </div>
    <!--end::Title-->
    <!--begin::Form group-->
    <div class="form-group">
        <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <!--end::Form group-->
    <!--begin::Form group-->
    <div class="form-group d-flex flex-wrap pb-lg-0">
        <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Enviar</button>
        <a href="{{route('login')}}"  class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</a>
    </div>
    <!--end::Form group-->
</form>
<!--end::Form-->
</div>
@endsection