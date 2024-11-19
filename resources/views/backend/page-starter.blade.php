<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/Activ-laravel/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jul 2022 07:12:08 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>{{ $judul }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/back/images/favicon.ico">

        
        <!-- alertifyjs Css -->
        <link href="assets/back/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />

        <!-- alertifyjs default themes  Css -->
        <link href="assets/back/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/back/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/back/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/back/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        

        <!-- Plugins css -->
        <link href="{{ asset('assets/back/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

        <style>
        table tr {
            cursor: pointer;
        }
        </style>
    </head>

    <body data-layout="horizontal" data-topbar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar" class="isvertical-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22"> <span class="logo-txt">Activ</span>
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22"> <span class="logo-txt">Activ</span>
                                </span>
                            </a>
                
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
            
                    </div>

                    <div class="d-flex"> 

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item light-dark" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-sm layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-sm layout-mode-light"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/back/images/users/avatar-1.jpg') }}"
                                alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <a class="dropdown-item" href="contacts-profile.html"><i class='bx bx-user-circle text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">My Account</span></a>
                                <form action="/auth/{{ session()->get('NIP') }}" method="POST" class="d-inline"> @method('DELETE') @csrf
                                    <button type="submit" class="dropdown-item" href="/auth"><i class='bx bx-user-x text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Delete Account</span></button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout"><i class='bx bx-log-out text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22"> 
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22"> <span class="logo-txt">Activ</span>
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22"> <span class="logo-txt">Activ</span>
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="/dashboard">
                                    <i class="bx bx-spreadsheet icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-dashboards">Laporan</span>
                                </a>
                            </li>

                            <li>
                                <a href="/upload">
                                    <i class="bx bx bx-upload icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-dashboards">Upload Data</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <header id="page-topbar" class="ishorizontal-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22"> <span class="logo-txt">Activ</span>
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/back/images/logo-sm.svg') }}" alt="" height="22"> <span class="logo-txt">Activ</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="topnav">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        
                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle arrow-none" href="/dashboard" id="topnav-dashboard" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-spreadsheet'></i>
                                                <span data-key="t-dashboards">Laporan</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle arrow-none" href="/upload" id="topnav-dashboard" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx bx-upload'></i>
                                                <span data-key="t-dashboards">Upload Data</span>
                                            </a>
                                        </li>
        
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item light-dark" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-sm layout-mode-dark "></i>
                                <i data-feather="sun" class="icon-sm layout-mode-light"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/back/images/users/avatar-1.jpg') }}"
                                alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <a class="dropdown-item" href="/profile"><i class='bx bx-user-circle text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">My Account</span></a>
                                <form action="/auth/{{ session()->get('NIP') }}" method="POST" class="d-inline"> @method('DELETE') @csrf
                                    <button onclick="return confirm('apakah anda yakin ?')" class="dropdown-item" href="/karyawan/destroy"><i class='bx bx-user-x text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Delete Account</span></button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout"><i class='bx bx-log-out text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
    


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                @yield('isi')
                            </div>
                        </div>
                        <!-- end page title -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Activ.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <a href="#" class="right-bar-toggle layout-setting-btn" id="right-bar-toggle">
            <i class="icon-sm mb-2" data-feather="settings"></i> <span class="align-middle">Settings</span>
        </a>

        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center bg-primary p-3">

                    <h5 class="m-0 me-2 text-white">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Choose Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Theme Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <div id="sidebar-setting">
                        <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                            <label class="form-check-label" for="sidebar-size-default">Default</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                            <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                            <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                        </div>

                        <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                            <label class="form-check-label" for="sidebar-color-light">Light</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                            <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                            <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                        </div>
                    </div>

                    <h6 class="mt-4 mb-3">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        
        
        {{-- Datatable  --}}
        <link rel="stylesheet" href="assets/back/css/jquery.dataTables.css" />
        <script src="assets/back/js/jquery.dataTables.js"></script>
        <!-- alertifyjs js -->
        <script src="assets/back/libs/alertifyjs/build/alertify.min.js"></script>
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/back/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/back/libs/metismenujs/metismenujs.min.js') }}"></script>
        <script src="{{ asset('assets/back/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/back/libs/feather-icons/feather.min.js') }}"></script>
        <!-- Plugins js -->
        {{-- <script src="{{ asset('assets/back/libs/dropzone/min/dropzone.min.js') }}"></script> --}}

        <script src="{{ asset('assets/back/js/app.js') }}"></script>
        <script type="text/javascript">
            $(document).ready( function () {
                var successMessage = "{{ session('success_message') }}";
                var successMessageFile = "{{ session('upload_success') }}";
                
                if (successMessage) {
                    alertify.message("Berhasil Diverifikasi");
                }

                if (successMessageFile) {
                    alertify.message("Data Karyawan Berhasil Di import");
                }
                
                $(".verifikasi").on("click", function (event) {
                    event.stopPropagation();
                });

                $('.dataTabel').DataTable();


                // Dropdown Prevent Default

                var selectFocused = false; // Variabel untuk melacak apakah elemen select sedang difokuskan

                $(".progressSelect").on("click", function (event) {
                    event.stopPropagation();
                });
                
                $(".progressSelect").on("change", function (event) {
                    var selectedValue = $(this).val();
                    var id = $(this).attr("id");

                    $.ajax({
                        url: '/progress/' + id, // Ganti URL sesuai dengan rute yang sesuai di Laravel
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            progress: selectedValue,
                            // id: id,
                        },
                        success: function(response) {
                            location.replace('/dashboard');
                        }
                    });
                });

                $(document).on("click", "table tbody tr", function(e) {

                    var item = $(e.currentTarget);
                    var NIP = item.data("nip");
                    var nama_karyawan = item.data("nama_karyawan");
                    var divisi = item.data("divisi");
                    var judul = item.data("judul");
                    var isi = item.data("isi");
                    var kategori = item.data("kategori");
                    var lampiran = item.data("lampiran");
                    var nomor_wa = item.data("nomor_wa");
                    var sifat = item.data("sifat");
                    var status = item.data("status");
                    var lampiran = item.data("lampiran");
                    var progress = item.data("progress");

                    $('#nip').html(NIP);
                    $('#nama_karyawan').html(nama_karyawan);
                    $('#divisi').html(divisi);
                    $('#judul').html(judul);
                    $('#isi').html(isi);
                    $('#kategori').html(kategori);
                    $('#lampiran').attr("src", lampiran);
                    $('#nomor_wa').html(nomor_wa);
                    $('#sifat').html(sifat);
                    $('#status').html(status);
                    $('#lampiran').html(lampiran);
                    $('#progress').html(progress);
                    $('#modalDetail').modal("show");
                })
            });
        </script>

    </body>

<!-- Mirrored from themesdesign.in/Activ-laravel/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jul 2022 07:12:08 GMT -->
</html>