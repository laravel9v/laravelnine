@extends('layout/medications')


@section('signup')

<div class="wrapper">
    <div class="logo"> <img src="/img/logo_drug.png" alt="logo"> </div>
    <div class="text-center mt-4 name"> Signup </div> 
    <form action="{{ route('signup_btn')}}" method="POST" class="p-3 mt-3">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="name" id="userName" placeholder="Username">
          
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password">
        </div>
        <button type="submit" class="btn mt-3">Sign-up</button>
        
    </form>
    @if ($message =Session::get('faild'))
    <div class="container">
        <div class="alert alert-primary" role="alert">
            {{$message}}
        </div>
    </div>
       
    @endif
</div>
@endsection