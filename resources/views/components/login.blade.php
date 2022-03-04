@extends('layout/medications')


@section('login')

<div class="wrapper">
    <div class="logo"> <img src="/img/logo_drug.png" alt="logo"> </div>
    <div class="text-center mt-4 name"> Login </div> 
    <form action="{{ route('login_btn')}}" method="POST" class="p-3 mt-3">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="name" id="userName" placeholder="Username">
          
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password">
        </div>
        <button type="submit" class="btn mt-3">Login</button>
        
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