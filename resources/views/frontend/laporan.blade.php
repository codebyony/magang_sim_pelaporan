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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- alertifyjs Css -->
    <link href="{{ asset('assets/back/libs/alertifyjs/build/css/alertify.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- alertifyjs default themes  Css -->
    <link href="{{ asset('assets/back/libs/alertifyjs/build/css/themes/default.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Contact Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="contact-form bg-light col-lg-12 text-center">
                <img width="200px" height="200px" class="img-fluid" src="{{ asset('assets/img/logo.png') }}" alt="">
                <div class="col-lg-12 text-center mb-3">
                    <h5>Layanan Pelaporan Karyawan terhadap proses bisnis, aktivitas kerja, maupun keluhan yang ada pada di <span class="text-info">PT PAL </span></h5>
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Kami Mendengarkan : </span>Hubungi kami dengan keluhan anda</h1>
                    <span class="text-primary">* Data ini dijamin Kerahasiaanya </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form bg-light mb-3" style="padding: 30px;">
                            <a href="/laporan/{{ session()->get('NIP') }}" style="color: rgb(0, 0, 0); text-decoration=none"><i class='fas fa-angle-left'>Back</i></a>
                        <div class="col-lg-12 text-center mb-3">
                            <h5>Daftar Laporan Masuk</h5>
                        </div>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Keluhan</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($tabel as $i) 
                                    <tr
                                        data-nip={{ $i->NIP }} 
                                        data-nama_karyawan="{{ $i->nama_karyawan }}"
                                        data-divisi="{{ $i->divisi }}"
                                        data-judul="{{ $i->judul }}"
                                        data-isi="{{ $i->isi }}"
                                        data-kategori="{{ $i->kategori }}"
                                        data-lampiran="{{ $i->lampiran }}"
                                        data-nomor_wa="{{ $i->nomor_wa }}"
                                        data-status="{{ $i->status }}"
                                        data-sifat="{{ $i->sifat }}"
                                        data-progress="{{ $i->progress }}"
                                    >
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $i->judul }}</td>
                                        <td>{{ $i->isi }}</td>
                                        <td>{{ $i->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        <span id="nama_karyawan"></span> - <span id="nip"></span>
                      </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                      <div class="modal-body table-responsive">
                        <table class="table table-nowrap mb-0 table-responsive">
                          <tr>
                            <th>Divisi</th>
                            <td id="divisi"></td>
                          </tr>
                          <tr>
                            <th>Nomor WA</th>
                            <td id="nomor_wa"></td>
                          </tr>
                          <tr>
                            <th>Kategori</th>
                            <td id="kategori"></td>
                          </tr>
                          <tr>
                            <th>Progress</th>
                            <td id="progress"></td>
                          </tr>
                          <tr>
                            <th>Judul</th>
                            <td id="judul"></td>
                          </tr>
                          <tr>
                            <th>Isi</th>
                            <td id="isi"></td>
                          </tr>
                        </table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3 mt-3">
                <h3 class="m-0">Informasi PT PAL</h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/berita1.jpg') }}" style="object-fit: cover;">
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
                    <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/berita2.jpg') }}" style="object-fit: cover;">
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
                    <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/berita3.jpeg') }}" style="object-fit: cover;">
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
                    <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/berita4.jpeg') }}" style="object-fit: cover;">
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
                    <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/berita5.jpeg') }}" style="object-fit: cover;">
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
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/cb.js') }}"></script>
    <!-- alertifyjs js -->
    <script src="{{ asset('assets/back/libs/alertifyjs/build/alertify.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            var successMessage = "{{ session('laporan_success') }}";
            
            if (successMessage) {
                alertify.message("Data Berhasil Ditambahkan");
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready( function () {
            
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

</html>