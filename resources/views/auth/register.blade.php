@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.Register')
@endsection
@section('body')
    <body>
    @endsection
    @section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="{{ url('index') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages mt-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="assets/images/valyou_x_black_logo.svg" alt="" class="img-fluid logo-img">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="p-2">
                                    <form method="POST" class="form-horizontal mt-4" action="{{ route('register') }}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                                   value="{{ old('first_name') }}" required name="first_name" id="first_name"
                                                   placeholder="{{ ucwords(str_replace('_',' ','first_name')) }}">
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                                   value="{{ old('last_name') }}" required name="last_name" id="last_name"
                                                   placeholder="{{ ucwords(str_replace('_',' ','last_name')) }}">
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                   value="{{ old('email') }}" id="useremail" name="email" required
                                                   placeholder="E-mail">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password"
                                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                                   required id="userpassword" placeholder="Choose Password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input id="password-confirm" type="password" name="password_confirmation"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   required placeholder="Confirm Password">
                                        </div>

                                        <div class="form-group">
                                            <input type="date" max="17-07-2020"
                                                   class="form-control @error('dob') is-invalid @enderror" name="dob" required
                                                   id="datepicker" placeholder="Date of Birth" value="{{ old('dob') }}">
                                            @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="form-control custom-file-input @error('avatar') is-invalid @enderror" name="avatar" required id="avatar">
                                                <label class="custom-file-label" for="avatar">Profile Image</label>
                                                @error('avatar')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="1" class="custom-control-input" name="customControlInline" id="customControlInline" required>
                                            <label class="custom-control-label register" for="customControlInline">By registering I agree to the Valyou X. <a href="#" class="text-primary">Terms of Use</a></label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn-block waves-effect waves-light btn-right" type="submit"><img width="120" src="{{ asset('assets/images/register-btn.svg') }}" alt="">
                                            </button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3">Sign up with</h5>

                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                       class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>


                                    </form>

                                </div>
                            </div>

                        </div>

                        <div class="mt-5 text-center">
                            <p>Already have an account ? <a href="{{ url('login') }}"
                                                            class="font-weight-medium text-primary"> Login </a></p>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())

                                </script>
                                Valyou X <i class="mdi mdi-heart text-danger"></i> Powered by Blockchain Technology
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    @endsection
    @section('script')
        <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
