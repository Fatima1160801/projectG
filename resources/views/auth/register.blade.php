@extends('auth.layout')
@section('title') Register @endsection
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
            <div class="float-right d-flex">


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
            @include('web.inc.requestTrip')
            <form method="POST" action="{{url('/register')}}">
                @csrf
                <div class="form-group">
                    <label>{{__('web.User Name')}}</label>
                    <input type="text" name="name" class="form-control" placeholder="">
                </div>
                    <div class="form-group">
                        <label>{{__('web.Email address')}}</label>
                        <input type="email" name="email" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>{{__('web.User phone')}}</label>
                    <input type="text" name="phone" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>{{__('web.User University ID')}}</label>
                <input type="number" class="form-control" name="BZUid" placeholder="">
           </div>

             <div class="form-group">
                 <label>{{__('web.Password')}}</label>
                 <input type="password" name="password" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>{{__('web.Confirm Password')}}</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="">
           </div>
                            <div class="checkbox">
                                <label>
                        <input type="checkbox"> {{__('web.Agree the terms and policy')}}
                               </label>
                            </div>
                            <button class="btn btn-primary btn-flat m-b-30 m-t-30">{{__('web.Register')}}</button>

                            <div class="register-link m-t-15 text-center">
                                <p>{{__('web.Already have account ?')}} <a href="{{url('/login')}}"> {{__('web.login')}}</a></p>
                            </div>
            </form>
        </div>
    </div>
</div>
</div>
    </div>
</div>
<div style="height: 650px;"></div>

@endsection
