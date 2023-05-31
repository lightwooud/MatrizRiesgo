@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}" class="container w-25">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
       
        
        <h1 class="h3 mb-4 mt-5 fw-normal">Registrar</h1>

        <div class="form-group form-floating mb-3 ">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required="required" autofocus>
            <label for="floatingEmail">Nombre</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif 
        </div>
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Contraseña" required="required">
            <label for="floatingPassword">Contraseña</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmar contraseña" required="required">
            <label for="floatingConfirmPassword">Confirmar contraseña</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>

        <h6 class=" mt-4 ">Ya tienes cuenta? <a href="{{ route('login.perform') }}" class="btn btn-primary me-2">Inicia aqui</a></h6>
        
        
        @include('auth.partials.copy')
    </form>
@endsection