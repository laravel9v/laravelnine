@extends('layout/medications')


@section('navbar')
<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col col-xl-10">

      <div class="card" style="background-color: #eee;">
        <div class="card-body p-5">
          <div class="alert alert-dark" role="alert" style="background-color: #ffffff;">
            <h4 class="d-inline">Diltiazem hydrochloride</h4>
              @auth
              <a class="btn btn-outline-success d-inline float-end" href="#" >Edit</a>
              <a class="btn btn-outline-success d-inline float-end mx-1" href="#" >Delete</a>
              @endauth
              <a class="btn btn-outline-success d-inline float-end" href="#" >Show</a>
            </div>
            <div class="alert alert-dark" role="alert" style="background-color: #ffffff;">
              <h4 class="d-inline">Diltiazem hydrochloride</h4>
                @auth
                <a class="btn btn-outline-success d-inline float-end" href="#" >Edit</a>
                <a class="btn btn-outline-success d-inline float-end mx-1" href="#" >Delete</a>
                @endauth
                <a class="btn btn-outline-success d-inline float-end" href="#" >Show</a>
              </div>
              <div class="alert alert-dark" role="alert" style="background-color: #ffffff;">
                <h4 class="d-inline">Diltiazem hydrochloride</h4>
                  @auth
                  <a class="btn btn-outline-success d-inline float-end" href="#" >Edit</a>
                  <a class="btn btn-outline-success d-inline float-end mx-1" href="#" >Delete</a>
                  @endauth
                  <a class="btn btn-outline-success d-inline float-end" href="#" >Show</a>
                </div>
                <div class="alert alert-dark" role="alert" style="background-color: #ffffff;">
                  <h4 class="d-inline">Diltiazem hydrochloride</h4>
                    @auth
                    <a class="btn btn-outline-success d-inline float-end" href="#" >Edit</a>
                    <a class="btn btn-outline-success d-inline float-end mx-1" href="#" >Delete</a>
                    @endauth
                    <a class="btn btn-outline-success d-inline float-end" href="#" >Show</a>
                  </div>
                  <div class="alert alert-dark" role="alert" style="background-color: #ffffff;">
                    <h4 class="d-inline">Diltiazem hydrochloride</h4>
                      @auth
                      <a class="btn btn-outline-success d-inline float-end" href="#" >Edit</a>
                      <a class="btn btn-outline-success d-inline float-end mx-1" href="#" >Delete</a>
                      @endauth
                      <a class="btn btn-outline-success d-inline float-end" href="#" >Show</a>
                    </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection