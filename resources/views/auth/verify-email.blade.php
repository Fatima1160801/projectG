@extends('auth.layout')
@section('title') verify email @endsection
@section('main')

<div class="alert alert-success">
    A Verification Email send successfully ,please check your inbox.
</div>

<form method="POST" action="{{url('email/verification-notification')}}">
    @csrf

    <button type="submit" >Resend Email</button>

</form>
@endsection
