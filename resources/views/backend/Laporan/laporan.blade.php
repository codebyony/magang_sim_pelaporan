@extends('backend.page-starter') 
@section('isi')

<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-flex align-items-center justify-content-between">
			<h4 class="mb-0">Master Data</h4>
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item">
						<a href="javascript: void(0);">Tabel</a>
					</li>
					<li class="breadcrumb-item active">Tabel Rapat</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<!-- end page title -->
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title mb-0">Table Rapat</h4>
				<a class="btn btn-success w-sm ms-auto float-end btn-sm" href="/laporan/export">
					<i class="fas fa-file-export text-white-50"></i>  Export Excel </a>
				</a>
			</div>
			<!-- end card header -->
			<div class="card-body table-responsive">
				<table class="display dataTabel table-hover table-stripped table-responsive">
					<thead>
						<tr>
							<th>Pelapor</th>
							<th>Judul Kritik/Saran</th>
							<th>Isi Kritik/Saran</th>
							<th>Kontak</th>
							<th>Status</th>
							<th>Progress</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($item as $i) 
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
							<td> {{ $i->NIP }} <br>
								<b>{{ $i->nama_karyawan }}</b><br/>
								Divisi {{ $i->divisi }}<br/>
							</td>
							<td><b>{{ $i->kategori }}</b> <br/>
								{{ $i->judul }}
							</td>
							<td>{{ mb_strimwidth($i->isi, 0, 60, "..."); }}</td>
							<td>{{ $i->nomor_wa }}</td>
							<td><a class="verifikasi" href="@if($i->status == 'Belum Diverifikasi') /verifikasi/{{ $i->id }} @else javascript:void(0) @endif">
                <button type="button" class=" {{ ($i->status == "Belum Diverifikasi") ? 'btn btn-warning btn-sm':'btn btn-primary btn-sm disabled' }} ">
								{{ ($i->status == "Belum Diverifikasi") ? 'Verifikasi':'Diverifikasi' }}
								</button>
                </a>
							</td>
              <td>
                <select class="btn btn-sm btn-primary progressSelect" id="{{ $i->id }}">
                  <option value="Waiting" {{ $i->progress == 'Waiting' ? 'selected' : '' }}>Waiting</option>
                  <option value="Process" {{ $i->progress == 'Process' ? 'selected' : '' }}>Process</option>
                  <option value="Finish" {{ $i->progress == 'Finish' ? 'selected' : '' }}>Finish</option>
                </select>
              </td>
						  </tr> @endforeach
					</tbody>
				</table>
			</div>
			<!-- end card body -->
		</div>
		<!-- end card -->
	</div>
	<!-- end col -->
</div>
<!-- end row -->

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
                <th>Judul</th>
                <td id="judul"></td>
              </tr>
              <tr>
                <th>Isi</th>
                <td id="isi"></td>
              </tr>
              <tr>
                <th>Kategori</th>
                <td id="kategori"></td>
              </tr>
              <tr>
                <th>Lampiran</th>
                <td><embed id="lampiran" src="uploads/laporans/laporan1.pdf" frameborder="0" width="90%" height="400px"></td>
              </tr>
              <tr>
                <th>Nomor WA</th>
                <td id="nomor_wa"></td>
              </tr>
              <tr>
                <th>Sifat</th>
                <td id="sifat"></td>
              </tr>
              <tr>
                <th>Progress</th>
                <td id="progress"></td>
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
@endsection