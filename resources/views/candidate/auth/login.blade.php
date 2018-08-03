@extends('candidate.layout.auth')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6" style="padding-top: 80px;">
            <div class="card">
                <div class="card-header text-center">{{ __('I AM CANDIDATE') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/candidate/login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                <a class="btn btn-success" href="{{ route('candidate.register') }}">
                                    {{ __('I don t have a account') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="background-color: #3498db;padding-top: 100px;padding-bottom: 220px;">
            <h1>Showcase your skills.</h1>
            <ul>
                <li>Explore our project library</li>
                <li>Custom environment variables</li>
                <li>Easily monitor ongoing assessments</li>
                <li>Get comprehensive reports</li>
                <li>Live demos of candidates work</li>
            </ul>
        </div>
    </div>
</div>
@endsection
