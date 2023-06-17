@section('title') {{ 'Admin' }}@endsection
@extends('admin.layouts')
@section('content')

<!-- partial -->
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12">
        <div class="home-tab">
          <div class="d-sm-flex align-items-center justify-content-between border-bottom">
            <h4>Data Kampus Penghuni</h4>
            <div>
              <div class="btn-wrapper">
                <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
              </div>
            </div>
          </div>
          <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
              <div class="row">
                <div class="col-sm-12">
                  <div class="statistics-details d-flex align-items-center justify-content-between">

                    <div class="container my-3">
      
                      <a class="btn btn-success mb-3 mx-3" href="{{ route('univ.create') }}">Tambah Kampus</a>
                      
                      <table class="table table-striped table-hover">
                          <tr>
                              <td class="text-center">No</td>
                              <td class="text-center">Kampus</td>
                              <td class="text-center"> Aksi</td>
                          </tr>
                          @foreach ($universitas as $univ)
                          <tr>
                              <td class="text-center">{{ $loop->iteration }}</td>
                              <td class="text-center">{{ $univ->name }}</td>
                              <td class="text-center">
                                  <form action="/univ/{{ $univ->id }}/" method="POST">
                                    <a href="/univ/{{ $univ->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                                      ('Apakah Anda yakin ingin menghapus univ ini?')">Hapus</button>
                                  </form>
                              </td>
                          </tr>
                          @endforeach
                      </table>
              
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection