@extends('layout.auth')
@section('content')
<div class="overflow-hidden p-3 acc-vh">
    <!-- start row -->
    <div class="row vh-100 w-100 g-0">
        <div class="col-lg-6 vh-100  overflow-y-auto overflow-x-hidden">
            <!-- start row -->
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <!-- Alert Success -->
                    <div id="alert-success" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                        <span id="success"></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <!-- Alert Danger -->
                    <div id="alert-danger" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                        <span id="danger"></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form id="register-form" action="javascript:void(0);" class=" vh-100 d-flex justify-content-between flex-column p-4 pb-0">
                        @csrf
                        <div class="text-center mb-3 auth-logo">
                            <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                        </div>
                        <div>
                            <div class="mb-3">
                                <h3 class="mb-2">Register</h3>
                                <p class="mb-0">Create new CRMS account</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <div class="input-group input-group-flat">
                                    <input type="text" name="first_name" id="first_name" class="form-control">
                                    <span class="input-group-text">
                                        <i class="ti ti-user"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <div class="input-group input-group-flat">
                                    <input type="text" name="last_name" id="last_name" class="form-control">
                                    <span class="input-group-text">
                                        <i class="ti ti-user"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <div class="input-group input-group-flat">
                                    <input type="email" name="email" id="email" class="form-control">
                                    <span class="input-group-text">
                                        <i class="ti ti-mail"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group input-group-flat pass-group">
                                    <input type="password" name="password" id="password" class="form-control pass-input">
                                    <span class="input-group-text toggle-password ">
                                        <i class="ti ti-eye-off"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <div class="input-group input-group-flat pass-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control pass-input">
                                    <span class="input-group-text toggle-password ">
                                        <i class="ti ti-eye-off"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="form-check form-check-md d-flex align-items-center">
                                    <input class="form-check-input mt-0" type="checkbox" value="" id="checkebox-md"
                                        checked="">
                                    <label class="form-check-label ms-1" for="checkebox-md">I agree to the <a
                                            href="javascript:void(0);" class="text-primary link-hover">Terms &
                                            Privacy</a>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" id="register-btn" class="btn btn-primary w-100">Sign Up</button>
                            </div>
                            <div class="mb-3">
                                <p class="mb-0">Already have an account? <a href="{{ route('login') }}"
                                        class="link-indigo fw-bold link-hover"> Sign In Instead</a></p>
                            </div>
                            <div class="or-login text-center position-relative mb-3">
                                <h6 class="fs-14 mb-0 position-relative text-body">OR</h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 mb-3">
                                <div class="text-center flex-fill">
                                    <a href="javascript:void(0);"
                                        class="p-2 btn btn-info d-flex align-items-center justify-content-center">
                                        <img class="img-fluid m-1" src="assets/img/icons/facebook-logo.svg"
                                            alt="Facebook">
                                    </a>
                                </div>
                                <div class="text-center flex-fill">
                                    <a href="javascript:void(0);"
                                        class="p-2 btn btn-outline-light d-flex align-items-center justify-content-center">
                                        <img class="img-fluid  m-1" src="assets/img/icons/google-logo.svg"
                                            alt="Facebook">
                                    </a>
                                </div>
                                <div class="text-center flex-fill">
                                    <a href="javascript:void(0);"
                                        class="p-2 btn btn-dark d-flex align-items-center justify-content-center">
                                        <img class="img-fluid  m-1" src="assets/img/icons/apple-logo.svg" alt="Apple">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pb-4">
                            <p class="text-dark mb-0">Copyright &copy; <script
                                    type="text/javascript">
                                    document.write(new Date().getFullYear())
                                </script> - CRMS</p>
                        </div>
                    </form>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- end col -->
        <div class="col-lg-6 account-bg-02"></div> <!-- end col -->
    </div>
    <!-- end row -->
</div>
@endsection
