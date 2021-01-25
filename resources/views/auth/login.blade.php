<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('Icons/graduation_hat.svg')}}" type="image/icon type">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login | Asia International University</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body style="background-image: url('Images/Mahasiswa_crop.jpg'); background-size: cover;">
<div class="container-login">
    <div class="row justify-content-center">
        <div class="login-card-container">
            <div class="card-login">
                <div class="card-header">
                    <img src="{{asset('Icons/graduation_hat.svg')}}" alt="icons">
                    <h5>ASIA INTERNATIONAL UNIVERSITY</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group-input row">
                            <div class="col-md-11">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group-input row">
                            <div class="col-md-11">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary col-md-11 login-btn">
                                    {{ __('Login') }}
                                </button>

                                <button class="btn btn-success col-md-11 register-btn"> 
                                    <a href="{{ route('register') }}" style="color: #fff; text-decoration:none;">{{ __('Register')}}</a> 
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
