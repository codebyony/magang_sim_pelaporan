<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NEWSROOM - Free Bootstrap Magazine Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- alertifyjs Css -->
    <link href="assets/back/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />

    <!-- alertifyjs default themes  Css -->
    <link href="assets/back/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Topbar Start -->
    {{-- <div class="container-fluid">
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
                </a>
            </div>
            <div class="contact-form bg-light col-lg-12 text-center">
                <img width="200px" height="200px" class="img-fluid" src="assets/img/logo.png" alt="">
                <div class="col-lg-12 text-center mb-3">
                    <h5>Layanan Pelaporan Karyawan terhadap proses bisnis, aktivitas kerja, maupun keluhan yang ada pada di <span class="text-info">PT PAL </span></h5>
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Kami Mendengarkan : </span>Hubungi kami dengan keluhan anda</h1>
                    <span class="text-primary">* Data ini dijamin Kerahasiaanya </span>
                </div>
            </div>
            
        </div>
    </div> --}}
    <!-- Topbar End -->


    <!-- Navbar Start -->
    {{-- <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
                <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text text-secondary"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div> --}}
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    {{-- <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="#">Home</a>
                <span class="breadcrumb-item active">Keluhan</span>
            </nav>
        </div>
    </div> --}}
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="contact-form bg-light col-lg-12 text-center">
                <img width="200px" height="200px" class="img-fluid" src="assets/img/logo.png" alt="">
                <div class="col-lg-12 text-center mb-3">
                    <h5>Layanan Pelaporan Karyawan terhadap proses bisnis, aktivitas kerja, maupun keluhan yang ada pada di <span class="text-info">PT PAL </span></h5>
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Kami Mendengarkan : </span>Hubungi kami dengan keluhan anda</h1>
                    <span class="text-primary">* Data ini dijamin Kerahasiaanya </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form bg-light mb-3" style="padding: 30px;">
                        {{-- <div class="col-lg-12 text-center mb-4">
                            <h5>Sampaikan Keluhan Anda "Jangan khawatir, keluhan Anda akan membantu meningkatkan kualitas layanan"</h5>
                        </div> --}}
                        <form action="/" method="POST" enctype="multipart/form-data"> @csrf
                            <div class="control-group text-center">
                                <ul class="ks-cboxtags">
                                    <li><input type="checkbox" id="Normal" class="radio" value="Normal" name="sifat"><label for="Normal">Normal</label></li>
                                    <li><input type="checkbox" id="Anonim/Private" class="radio" value="Anonim/Private" name="sifat" checked><label for="Anonim/Private">Anonim/Private</label></li>
                                    <p class="help-block text-danger"></p>
                                    <span>**Jenis laporan Anonim/Private tidak akan ditampilkan di laporan manajemen, namun tetap isikan Nama Asli</span>
                                </ul>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control p-4" id="NIP" placeholder="NIP" name="NIP" /> @error('NIP') <code>
                                          {{ $massage }}
                                        </code>
                                        @enderror
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control p-4" id="nama_karyawan" placeholder="Name" name="nama_karyawan" /> @error('nama_karyawan') <code>
                                          {{ $massage }}
                                        </code>
                                        @enderror
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="nomor_wa" placeholder="Nomer WA / Ext" name="nomor_wa" />@error('nomor_wa') <code>
                                    {{ $massage }}
                                  </code>
                                  @enderror
                                  <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <label for="inputName">Divisi</label>
                              <select name="divisi" class="form-control wide" id="inputDoctorName">
                                <option value="Teknologi Informasi ">Teknologi Informasi </option>
                                <option value="Akuntansi ">Akuntansi </option>
                                <option value="HCM ">HCM </option>
                                <option value="Pembendaharaan ">Pembendaharaan </option>
                              </select>
                              <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <label for="inputKategori">Kategori Keluhan</label>
                              <select name="kategori" class="form-control wide" >
                                <option value="Proses Bisnis ">Proses Bisnis </option>
                                <option value="Management ">Management </option>
                                <option value="Kebijakan ">Kebijakan </option>
                                <option value="Peraturan Perusahaan ">Peraturan Perusahaan </option>
                                <option value="Lingkungan Kerja ">Lingkungan Kerja </option>
                              </select>
                              <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <input type="text" class="form-control p-4" id="judul" placeholder="Judul Keluhan" name="judul" />@error('judul') <code>
                                {{ $massage }}
                              </code>
                              @enderror
                              <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="4" id="isi" placeholder="Isi Keluhan" name="isi"></textarea>@error('isi') <code>
                                  {{ $massage }}
                                </code>
                                @enderror
                                <p class="help-block text-danger"></p>
                            </div>
                            {{-- <div class="control-group">
                                <h3>Upload Files</h3>
                                <div class="drop_box">
                                  <header>
                                    <h4>Select File here</h4>
                                  </header>
                                  <p>Files Supported: PDF, TEXT, DOC , DOCX</p>
                                  <input type="file" name="lampiran" class="form-control" id="formFile"
                                  accept="lampiran/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                  @error('lampiran')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror 
                                  <button class="btn">Choose File</button>
                                </div>
                              <p class="help-block text-danger"></p>
                            </div> --}}
                            <div class="control-group">
                              <input type="file" name="lampiran" class="form-control" id="formFile"
                                accept="lampiran/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                @error('lampiran')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror 
                                <span style="color:red">*masukkan gambar</span>
                              <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Informasi PT PAL</h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="assets/img/berita1.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="">Technology</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">January 01, 2023</a>
                        </div>
                        <a class="h4 m-0 text-white" href="https://www.pal.co.id/resmi-aplikasikan-im4-pt-pal-indonesia-jadi-industri-maritim-pertama-di-indonesia-yang-terapkan-artificial-intelligence/">Implementasi AI di PT PAL </a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="assets/img/berita2.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="">Technology</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">January 01, 2023</a>
                        </div>
                        <a class="h4 m-0 text-white" href="https://www.pal.co.id/pt-pal-indonesia-raih-gold-winner-dalam-ajang-jambore-pr-indonesia/">PT PAL Raih Gold Winner</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="assets/img/berita3.jpeg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="">Technology</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">January 01, 2023</a>
                        </div>
                        <a class="h4 m-0 text-white" href="https://www.pal.co.id/pt-pal-indonesia-dukung-elektrifikasi-nasional-dalam-pelatihan-relocatable-power-plant/">Pelatihan Relocatable pada PT PAL</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="assets/img/berita4.jpeg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="">Technology</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">January 01, 2023</a>
                        </div>
                        <a class="h4 m-0 text-white" href="https://www.pal.co.id/mental-sehat-produktivitas-meningkat-pt-pal-indonesia-adakan-webinar-stress-management-di-era-transformasi/">Webinar Stress Management pada PT PAL</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="assets/img/berita5.jpeg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="">Technology</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">January 01, 2023</a>
                        </div>
                        <a class="h4 m-0 text-white" href="https://www.pal.co.id/pengumuman-pengadaan-permesinan-fasilitas-pembangunan-kapal-selam/">Pengumuman Pengadaan Permesinan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-lg-12 col-md-6 mb-6 text-center">
                <a href="index.html" class="navbar-brand">
                    <h1 class="mb-4 mt-n2 display-5 text-uppercase"><span class="text-primary">Informasi </span>SP PAL Indonesia</h1>
                </a>
                <p><a href="/login" style="color: rgb(116, 116, 116); text-decoration=none">G</a>edung Divisi Supply Chain PT PAL Indonesia-Ujung Surabaya (60155)</p><br>
                <p>Telp: (031) 3292275 EXT: 555 Fax: (031) 3286348</p><br>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://www.instagram.com/ptpal_indonesia/"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
            </div>
            {{-- <div class="col-lg-3 col-md-6 mb-4">
                <h4 class="font-weight-bold mb-4">Tags</h4>
                <div class="d-flex flex-wrap m-n1">
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>About</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Privacy & policy</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Terms & conditions</a>
                    <a class="text-secondary" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Contact Javascript File -->
    <script src="assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --}}
    <script src="assets/js/main.js"></script>
    <script src="assets/js/cb.js"></script>
    <!-- alertifyjs js -->
    <script src="assets/back/libs/alertifyjs/build/alertify.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            var successMessage = "{{ session('laporan_success') }}";
            
            if (successMessage) {
                alertify.message("Data Berhasil Ditambahkan");
            }
        });
    </script>
</body>

</html>