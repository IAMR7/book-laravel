@extends('admin/layout_admin/v_template')

@section('title', 'Admin - List Book')
    
@section('content')

<div class="content-wrapper">
    <h3>Book Management</h3>
    <div class="row mt-4">
        <div class="col-lg-8 col-md-12 col-12">
            <div class="card">
                <div class="card-body p-5">
                    @if (session('pesan'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Sukses !</strong><br>
                            {{session('pesan')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table class="table table-striped table-hovered">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No</th>
                                <th>Sampul</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listbook as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <img src="{{asset('cover')}}/{{$row->sampul}}" alt="" class="rounded">
                                </td>
                                <td>{{$row->judul}}</td>
                                <td>{{$row->penulis}}</td>
                                <td>{{$row->penerbit}}</td>
                                <td>
                                    <a href="/admin/book/detail/{{$row->id}}" class="btn btn-sm btn-primary"><i class="ti-info"></i></a>
                                    <a href="/admin/book/edit/{{$row->id}}" class="btn btn-sm btn-warning"><i class="ti-settings"></i></a>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$row->id}}"><i class="ti-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12">
            <div class="card">
                <div class="card-body p-5">
                    <h4>Tambah Buku Baru</h4>
                    <hr>
                    <form class="mt-4" action="book/add" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="hidden" class="form-control" id="id" name="id">
                            <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}">
                            <div class="text-danger">
                                @error('judul')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" value="{{old('penulis')}}">
                            <div class="text-danger">
                                @error('penulis')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{old('penerbit')}}">
                            <div class="text-danger">
                                @error('penerbit')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="month" class="form-control" id="tahun" name="tahun" value="{{old('tahun')}}">
                            <div class="text-danger">
                                @error('tahun')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Upload Cover Buku</label>
                            <input type="file" class="form-control" id="sampul" name="sampul" value="{{old('sampul')}}">
                            <div class="text-danger">
                                @error('sampul')
                                    {{$message}}
                                @enderror
                            </div>
                          </div>
                        <button type="submit" class="btn btn-md btn-primary"><i class="ti-save-alt mr-1"></i> Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@foreach ($listbook as $row)
<div class="modal fade" id="delete{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Peringatan !</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Yakin ingin menghapus buku {{$row->judul}} ?</p>
        </div>
        <div class="modal-footer">
          <a href="/admin/book/delete/{{$row->id}}" class="btn btn-sm btn-primary">Iya</a>
          <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach

@endsection