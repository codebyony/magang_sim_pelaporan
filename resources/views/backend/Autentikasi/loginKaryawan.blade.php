<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/symox-laravel/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jul 2022 07:12:08 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/back/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/back/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/back/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/back/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="horizontal" data-topbar="dark">

    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay"></div>
        <div class="container">
            {{-- <div class="card ">
                <div class="card-body col-lg-12 text-center">
                    <img width="150px" height="150px" class="img-fluid" src="assets/img/logo.png" alt="">
                    <div class="col-lg-12 text-center mb-3">
                        <h5>Layanan Pelaporan Karyawan terhadap proses bisnis, aktivitas kerja, maupun keluhan yang ada pada di <span class="text-info">PT PAL </span></h5>
                        <h2 class="m-0 display-5 text-uppercase"><span class="text-primary">Kami Mendengarkan : </span>Hubungi kami dengan keluhan anda</h2>
                        <span class="text-primary">* Data ini dijamin Kerahasiaanya </span>
                    </div>
                </div>
            </div> --}}
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">

                       <div class="text-center mb-4">
                            {{-- <a href="index.html">
                                <img width="50px" height="50px" class="img-fluid" src="assets/img/logo.png" alt=""> <span class="logo-txt">Layanan Pelaporan</span>
                            </a> --}}
                       </div>

                        <div class="card">
                            <div class="card-body p-4"> 
                                <div class="text-center mt-2">
                                    <img width="100px" height="100px" class="img-fluid" src="assets/img/logo.png" alt="">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Halaman login layanan SP PAL Indonesia.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    @if(session()->get('error_username'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-block-helper me-2"></i>
                                        {{ session()->get('error_username') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    @if(session()->get('error_password'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-block-helper me-2"></i>
                                        {{ session()->get('error_password') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <form method="POST" action="/auten"> @csrf
        
                                        <div class="mb-3">
                                            <label class="form-label" for="username">NIP</label>
                                            <input type="text" class="form-control" name="NIP" placeholder="Enter username">
                                            @error('NIP')
                                            <code>
                                                {{ $message }}
                                            </code>
                                            @enderror
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                                            @error('password')
                                            <code>
                                                {{ $message }}
                                            </code>
                                            @enderror
                                        </div>

                                        <div class="mt-3 text-end">
                                            <input class="btn btn-primary w-sm waves-effect waves-light" type="submit" value="Log In">
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-muted p-4">
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Activ. Menampung Keluhan Anda</p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src="assets/back/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/back/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/back/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/back/libs/feather-icons/feather.min.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/symox-laravel/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jul 2022 07:12:08 GMT -->
</html>
