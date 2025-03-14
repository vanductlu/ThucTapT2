<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/ebook-logo.ico') }}">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="{{ route('login') }}">
                                        <span><img src="{{ asset('assets/images/ebook.png') }}" alt="" height="26"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Don't have an account? Create your free account now.</p>
                                </div>

                                <h4 class="auth-title">Create Account</h4>

                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="fullname">Full Name</label>
                                        <input class="form-control" type="text" id="fullname" name="name" placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emailaddress">Email Address</label>
                                        <input class="form-control" type="email" id="emailaddress" name="email" required placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" id="password" name="password" required placeholder="Enter your password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                            <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript:void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit"> Sign Up </button>
                                    </div>
                                </form>

                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign up using</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have an account? <a href="{{ route('login') }}" class="text-muted ml-1"><b class="font-weight-semibold">Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2019 &copy; Upvex theme by <a href="#" class="text-muted">Coderthemes</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        
    </body>
</html>
