@extends('layouts.app1')

@section('stylesheets')
    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

    <!-- Base Styling  -->
    <link rel="stylesheet" href="../css/app/app.v1.css" />
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <h3 class="text-center">Braio</h3>
                <p class="text-center">Sign in to get in touch</p>
                <hr class="clean">
                <form role="form" method="POST" action="{{--{{ route('/') }}--}}">
                    {{ csrf_field() }}
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Email Adress" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="text" id="password" class="form-control" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="cr-styled">
                            <input type="checkbox" name="remember" ng-model="todo.done" {{ old('remember') ? 'checked' : '' }}>
                            <i class="fa"></i>
                        </label>
                        Remember me
                    </div>
                    <button type="submit" class="btn btn-purple btn-block">Sign in</button>
                </form>
                <hr>
                {{--<p class="text-center text-gray">Dont have account yet!</p>
                <button type="submit" class="">Create Account</button>--}}
                <a class="btn btn-default btn-block" href="{{--{{ route('password.request') }}--}}">
                    Forgot Your Password?
                </a>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <!-- NanoScroll -->
    <script src="../js/plugins/nicescroll/jquery.nicescroll.min.js"></script>

    <!-- Custom JQuery -->
    <script src="../js/app/custom.js" type="text/javascript"></script>
@endsection