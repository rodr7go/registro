@extends('layouts.app')

@section('content')

<div class="page login-page">
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                        <div class="content">
                            <div class="logo">
                                <h1>Controlmas.MX</h1>
                            </div>
                            <p>Registro de prospectos</p>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <form id="login-form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}
                                    <input id="login-username" type="text" name="email" required="" class="input-material" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input id="login-password" type="password" name="password" required="" class="input-material" placeholder="Contraseña">
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                {{--<a id="login" href="index.html" class="btn btn-primary">Login</a>--}}
                                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                            </form>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>

                            {{--<a href="#" class="forgot-pass">Forgot Password?</a>--}}
                            {{--<br>--}}
                            {{--<small>Do not have an account? </small>--}}
                            {{--<a href="register.html" class="signup">Signup</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
    </div>
</div>
{{--<!-- Javascript files-->--}}
{{--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>--}}
{{--<script src="{{ asset('js/theme/popper.min.js') }}"> </script>--}}
{{--<script src="{{ asset('js/theme/bootstrap.min.js') }}"></script>--}}
{{--<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>--}}
{{--<script src="{{ asset('js/theme/jquery.validate.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/theme/front.js') }}"></script>--}}
</body>
</html>
@endsection
