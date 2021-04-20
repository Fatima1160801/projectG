@extends('layout')
@section('title') Forget Password @endsection
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

                    <a class="nav-link " href="register.html"><i class="fas fa-address-book"></i>{{__('web.Register')}}</a>
                    <a class="nav-link  " href="login.html"> <i class="fas fa-sign-in-alt"></i>{{__('web.login')}}</a>

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
                        <label>{{__('web.Email')}}</label>
                        <input type="email" class="form-control" placeholder="{{__('web.Email')}}">
                    </div>

                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">{{__('web.submit')}}</button>

                            <div class="register-link m-t-15 text-center">
                                <p> {{__('web.Dont have account ?')}} <a href="#"> {{__('web.Sign up Here')}} </a></p>
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
