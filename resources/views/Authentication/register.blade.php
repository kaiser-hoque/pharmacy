@extends('layouts.appAuth')
@section('tile','Register Page')
@section('content')
<div class="wrapper"> <div class="section-authentication-cover"> <div class=""> <div class="row g-0"> <div class="col-12
    col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex"> <div class="card
    shadow-none bg-transparent shadow-none rounded-0 mb-0"> <div class="card-body"> <img
    src="{{asset('public/assets/images/login-images/register-cover.svg')}}" class="img-fluid
        auth-img-cover-login"
        width="550" alt="" />
    </div>
    </div>

</div>

<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
<div class=" card rounded-0 m-3 shadow-none bg-transparent mb-0">
    <div class="card-body p-sm-5"> <div class=""> <div class="mb-3 text-center">
        <img src="assets/images/logo-icon.png" width="60" alt="" />
        </div>
        <div class="text-center mb-4">
            <h5 class="">Syndron Admin</h5>
            <p class="mb-0">Please fill the below details to create your account</p>
        </div>
        <div class="form-body">
        <form action="{{route('register.store')}}" method="POST" class="row g-3">

        @csrf
        <div class="col-12">
        <label for="FullName" class="form-label">Full name</label>
        <input type="text" class="form-control" id="FullName" name="FullName" placeholder="Jhon"
        value="{{old('FullName')}}">
    </div>
    <div class="col-12">
    <label for="inputEmailAddress" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="EmailAddress" name="EmailAddress" value="{{old('EmailAddress')}}"
        placeholder="example@user.com"> @if($errors->has('EmailAddress')) <small class="d-block text-danger">
        {{$errors->first('EmailAddress')}}
    </small>
    @endif

</div>
<div class="col-12">
    <label for="inputChoosePa" class="form-label">Contact Number</label>
    <input type="text" class="form-control border-end-0" id="contact_no_en" value="12345678" placeholder="Enter number"
        name="contact_no_en" value="{{old('contact_no_en')}}">

    @if($errors->has('contact_no_en'))
    <small class="d-block text-danger">
        {{$errors->first('contact_no_en')}}
    </small>
    @endif

    <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
</div>
</div>

<div class="col-12">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control border-end-0" id="password" value="12345678" placeholder="Enter Password"
        name="password" value="{{old('password')}}">

    @if($errors->has('password'))
    <small class="d-block text-danger">
        {{$errors->first('password')}}
    </small>
    @endif

    <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
</div>


<div class="col-12">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
        <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to
            Terms & Conditions</label>
    </div>
</div>
<div class="col-12">
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Sign up</button>
    </div>
</div>
<div class="col-12">
    <div class="text-center ">
        <p class="mb-0">Already have an account? <a href="{{route('login')}}">Sign in
                here</a></p>
    </div>
</div>
</form>
</div>
<div class="login-separater text-center mb-5"> <span>OR SIGN UP WITH EMAIL</span>
    <hr />
</div>
<div class="list-inline contacts-social text-center">
    <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i
            class="bx bxl-facebook"></i></a>
    <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i
            class="bx bxl-twitter"></i></a>
    <a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i
            class="bx bxl-google"></i></a>
    <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i
            class="bx bxl-linkedin"></i></a>
</div>

</div>
</div>
</div>
</div>

</div>
<!--end row-->
</div>
</div>
</div>
@endsection