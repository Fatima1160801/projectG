@extends('layout')
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

                    <a class="nav-link " href="{{url("register/id")}}"><i class="fas fa-address-book"></i> {{__('web.Register')}}</a>
                    <a class="nav-link  " href="{{url("login/>id")}}"> <i class="fas fa-sign-in-alt"></i>{{__('web.login')}}</a>

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
                <form>
                    <div class="form-group">
                        <label> {{__('web.University ID')}} </label>
                        <input type="number" class="form-control" placeholder="{{__('web.University ID')}}">
                    </div>
                        <div class="form-group">
                            <label>{{__('web.Password')}}</label>
                            <input type="password" class="form-control" placeholder="{{__('web.Password')}}">
                    </div>
                            <div class="checkbox">
                                <label>
                            <input type="checkbox"> {{__('web.Remember Me')}}
                        </label>
                                <label class="pull-right">
                            <a href="#">{{__('web.Forgotten Password?')}}</a>
                        </label>

                            </div>
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">{{__('web.Sign up')}}</button>

                            <div class="register-link m-t-15 text-center">
                                <p> {{__('web.Dont have account ?')}} <a href="#"> {{__('web.Sign Up Here')}} </a></p>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
<div style="height: 490px;"></div>

@endsection
