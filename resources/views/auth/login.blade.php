@extends('auth.layout')
@section('title') Login Page @endsection
@section('main')

<div>
    <div style="height: 70px; background-color: white;">
        <div class="page-header float-left">
            <div class="page-title" style="padding-top:10px; padding-left:20px ">
                <a href="#">
                    <h2>BZU Transportation</h2>
                </a>
            </div>
        </div>
        <div>
            <div class="float-right d-flex" style="padding-right:10px">

                    <a class="nav-link " href="{{url("register/id")}}"><i class="fa fa-pencil-square-o"></i>  {{__('web.Register')}}</a>
                    <a class="nav-link  " href="{{url("login/id")}}"> <i class="fa fa-sign-in"></i> {{__('web.login')}}</a>
                    @if(App::getLocale()=="ar")
                    <a class="nav-link mr-1" href="{{url('lang/set/en')}}"><i class="fa fa-question-circle"></i> english</a>
                    @else
                    <a class="nav-link mr-1" href="{{url('lang/set/ar')}}"><i class="fa fa-question-circle"></i> arabic</a>
                    @endif
            </div>
        </div>
    </div>
    <div style="height: 20px; ">

<div class="sufee-login d-flex  flex-wrap">



    <div class="container">
        <div class="login-content">
            <div class="login-logo">

            </div>
            <div class="login-form">
                <form method="POST" action="{{url('login')}}">
                    @csrf
                    <div class="form-group">
                        <label> {{__('web.Email')}} </label>
                        <input type="email" name="email" class="form-control" placeholder="{{__('web.Email')}}">
                    </div>
                        <div class="form-group">
                            <label>{{__('web.Password')}}</label>
                            <input type="password" name="password" class="form-control" placeholder="{{__('web.Password')}}">
                    </div>
                            <div class="checkbox">
                                <label>
                            <input type="checkbox" name="remember"> {{__('web.Remember Me')}}
                                </label>
                                <label class="pull-right">
                            <a href="{{url('/forgot-password')}}">{{__('web.Forgotten Password?')}}</a>
                               </label>

                            </div>
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">{{__('web.login')}}</button>

                            <div class="register-link m-t-15 text-center">
                                <p> {{__('web.Dont have account ?')}} <a href="{{url('/register')}}"> {{__('web.Register from Here')}} </a></p>
                            </div>
                            @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
<div style="height: 490px;"></div>

@endsection
