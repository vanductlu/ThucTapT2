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
    <link rel="shortcut icon" href="{{ asset('public/admin/assets/images/ebook-logo.ico') }}">

    <!-- App CSS -->
    <link href="{{ asset('public/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/css/icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/css/app.min.css') }}" rel="stylesheet">
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
                                    <span><img src="{{ asset('public/admin/assets/images/ebook.png') }}" alt="Ebook Logo" height="26"></span>
                                </a>
                                <p class="text-muted mb-4 mt-3">Don't have an account? Create your free account now.</p>
                            </div>

                            <h4 class="auth-title">Create Account</h4>

                            <!-- Display validation errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Registration Form -->
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input class="form-control" type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="Enter your first name" required>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input class="form-control" type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="Enter your last name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" required placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your password">
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
        {{ date('Y') }} &copy; Upvex theme by <a href="#" class="text-muted">Coderthemes</a> 
    </footer>

    <!-- Vendor JS -->
    <script src="{{ asset('public/admin/assets/js/vendor.min.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('public/admin/assets/js/app.min.js') }}"></script>
    
</body>
</html>