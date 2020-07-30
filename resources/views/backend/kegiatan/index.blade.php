@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mb-3">
            <a href="{{route('backend.kegiatan.create')}}" class="btn btn-outline-primary">
              tambah kegiatan
          </a>
          </div>

          <div class="card border-0 shadow">
            <div class="px-3 py-3">
              <h4 class="text-muted">Kegiatan Masjid</h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Status</th>
                    <th>Deskripsi</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Yasinan</td>
                    <td>hallo</td>
                    <td>12/12/11</td>
                    <td>12.00</td>
                    <td>hadir</td>
                    <td>
                      <a href="http://" class="btn btn-outline-primary btn-sm">Edit</a>
                      <a href="http://" class="btn btn-outline-danger btn-sm">Hapus</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection