@extends('backend.page-starter') 
@section('isi')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">File Upload</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">File Upload</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Upload Data Karyawan</h4>
                <p class="card-title-desc">Anda perlu memasukkan filel excel untuk menambah data karyawan, pastikan terdapat data berikut : NIP, Nama, Divisi, dan Password
                </p>
            </div>
            <div class="card-body">
                <div>
                    <form action="/upload" enctype="multipart/form-data" method="POST">
                        @csrf 
                        @method('POST')
                        <div>
                            <input name="file" type="file">
                        </div>
                        <div class="text-center mt-4">
                            <input type="submit" class="btn btn-primary waves-effect waves-light" value="Send Files">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection