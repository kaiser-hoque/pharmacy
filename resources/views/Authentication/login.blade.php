@extends('layouts.appAuth')
@section('tile','Login Page')
@section('content')
    <div class="wrapper"> <div class="section-authentication-cover"> <div class="">
        <div class="row g-0">
    
            <div
                class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
    
                <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
                    <div class="card-body">
                        <img src="{{asset('public/assets/images/login-images/login-cover.svg')}}" class="img-fluid auth-img-cover-login"
                            width="650" alt="" />
                    </div>
                </div>
    
            </div>
    
            <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
                <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                    <div class="card-body p-sm-5">
                        <div class="">
                            <div class="mb-3 text-center">
                                <img src="assets/images/logo-icon.png" width="60" alt="">
                            </div>
                            <div class="text-center mb-4">
                                <h5 class="">Syndron Admin</h5>
                                <p class="mb-0">Please log in to your account</p>
                            </div>
                            <div class="form-body">
                                <form action="{{route('login.check')}}" method="POST" class="row g-3">
                                    @csrf
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Contact Number/Email Address </label>
                                        <input type="email" class="form-control" name="username" value="{{old('username')}}" id="inputEmailAddress"
                                           placeholder="Phone Number/Email Address">
                                        @if($errors->has('username'))
                                        <small class="d-block text-danger">
                                            {{$errors->first('username')}}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" class="form-control border-end-0"
                                                id="inputChoosePassword" value="12345678" 
                                                name="password"
                                                placeholder="Enter Password">

                                                @if($errors->has('password'))
                                                <small class="d-block text-danger">
                                                    {{$errors->first('password')}}
                                                </small>
                                                @endif
                                                <!-- <a
                                                href="javascript:;" 
                                                name="password" class="input-group-text bg-transparent"><i
                                                    class="bx bx-hide"></i></a> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end"> <a href="auth-cover-forgot-password.html">Forgot
                                            Password ?</a>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center">
                                            <p class="mb-0">Don't have an account yet? <a href="{{route('register')}}">Sign
                                                    up here</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="login-separater text-center mb-5"> <span>OR SIGN IN WITH</span>
                                <hr>
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