@extends('layouts.app')

@section('content')

<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-size1: 100% 50%; background-image: url(assets/media/illustrations/development-hd-dark.png)">
    <!--begin::Content-->
    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <!--begin::Logo-->
        <a href="/" class="mb-12">
            <img alt="Logo" src="{{ asset('media/logos/dev-option-dark-logo.png') }}" class="h-150px" />
        </a>
        <!--end::Logo-->
        <!--begin::Wrapper-->
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100" method="POST" action="{{ route('login') }}">
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Sign In to DevOcean</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    @if (Route::has('register'))
                    <div class="text-gray-400 fw-bold fs-4">New Here?
                    <a href="{{ route('register') }}" class="link-primary fw-bolder">{{ __('Register') }}</a></div>
                    @endif
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input id="email" class="form-control form-control-lg form-control-solid" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert" style="display: block;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-2">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                        <!--end::Label-->
                        <!--begin::Link-->
                        
                        @if (Route::has('password.request'))
                            <a class="link-primary fs-6 fw-bolder" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Input-->
                    <input class="form-control form-control-lg form-control-solid" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert" style="display: block;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    
                    <!--end::Input-->
                </div>

                <div class="fv-row mb-10 text-right">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                </div>

                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                    <!--begin::Submit button-->
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">Continue</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Submit button-->
                    <!--begin::Separator-->
                    <template v-if="false">
                        <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                        <!--end::Separator-->
                        <!--begin::Google link-->
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
                        <!--end::Google link-->
                        <!--begin::Google link-->
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a>
                        <!--end::Google link-->
                        <!--begin::Google link-->
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                        <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continue with Apple</a>
                    </template>
                    <!--end::Google link-->
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Content-->
    <!--begin::Footer-->
    <div class="d-flex flex-center flex-column-auto p-10">
        <!--begin::Links-->
        <div class="d-flex align-items-center fw-bold fs-6">
            <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
            <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
            <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
        </div>
        <!--end::Links-->
    </div>
    <!--end::Footer-->
</div>

@endsection
