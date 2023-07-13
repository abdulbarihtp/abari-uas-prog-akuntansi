@extends('abari_layout.abari_template')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaturan User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel User</h3>
        </div>
        <div class="card-body">
        @if (session('msg')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> {{ session('msg') }}
      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <button type="button" class="btn btn-sm btn-success" onclick="window.location='{{ url('abari_user/tambah') }}'">
        <i class="fas fa-plus-circle"></i> Tambah Data
</button>
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
    <th>ID User</th>
    <th>User Name</th>
    <th>Password</th>
    <th>Level</th>
    <th>Aksi</th>           
        </tr>
    </thead>

    <tbody>
        @foreach($akun as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->id_user }}</td>
            <td>{{ $row->user_name }}</td>
            <td>{{ $row->password }}</td>
            <td>{{ $row->level }}</td>
            <td>
              <button onclick="window.location='{{ url('abari_user/edit/'.$row->id_user) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

                <button onClick="window.location='{{ url('abari_user/delete/'.$row->id_user) }}'" type="button"  title="Hapus Data" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
                </button>
               
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          @abdulbari
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection