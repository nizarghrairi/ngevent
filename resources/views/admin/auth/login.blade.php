@extends('layouts.login')
@section('title','Login')
@section('content')

    <div class="content-body">
        <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-md-4 col-10 box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header border-0">
                            <div class="card-title text-center">
                                <img src="{{asset('assets/app-assets/images/logo/Logo-NG(50px).png')}}" alt="branding logo">
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                <span>Login for NGEVENT</span>
                            </h6>
                        </div>
                        @include('admin.includes.alerts.errors')
                        @include('admin.includes.alerts.success')
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form-horizontal" action="{{route('admin.login')}}" method="post" novalidate>
                                    @csrf
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="text" name="email" class="form-control input-lg" id="email"
                                               placeholder="Your Email" value="{{old('email')}}" >
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="password" name="password" class="form-control input-lg" id="password"
                                               placeholder="Enter Password">
                                        <div class="form-control-position">
                                            <i class="la la-key"></i>
                                        </div>
                                        @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </fieldset>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-12 text-center text-md-left">
                                            <fieldset>
                                                <input type="checkbox" id="remember-me" name="remember_me" class="chk-remember">
                                                <label for="remember-me"> Remember Me</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-12 text-center text-md-right"><a
                                                href="#" class="card-link">Forgot
                                                Password?</a></div>
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-block btn-lg"><i
                                            class="ft-unlock"></i>
                                        Login</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
