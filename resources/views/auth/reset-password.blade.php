@extends('auth.layout')
@section('title') reset password @endsection
@section('main')
<div style="height: 70px; background-color: white;">
    <div class="page-header float-left">
        <div class="page-title" style="padding-top:10px; padding-left:20px ">
            <a href="#">
                <h2>BZU Transportation</h2>
            </a>
        </div>
    </div>

</div>

<div class="container">
<div class="login-content" >
    <div class="login-logo">

    </div>
    <div class="login-form">
        @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
    <form method="POST" action="{{url('/reset-password')}}">
        @csrf
        <div class="form-group">
            <label>{{__('web.Email')}}</label>
            <input type="email" name="email"class="form-control" placeholder="{{__('web.Email')}}">
        </div>
        <div class="form-group">
            <label>{{__('web.Password')}}</label>
            <input type="password" name="password" class="form-control" placeholder="{{__('web.Password')}}">
       </div>
       <div class="form-group">
           <label>{{__('web.Confirm Password')}}</label>
           <input type="password" name="password_confirmation" class="form-control" placeholder="{{__('web.Confirm Password')}}">
      </div>
        <input name="token" value="request()->route('token')" type="hidden">

        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">{{__('web.Reset Password')}}</button>

    </form>
    </div>
</div>
</div>

@endsection
