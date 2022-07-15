@extends('admin/layout_admin/v_template')

@section('title', 'Admin - Edit Buku')
    
@section('content')

<div class="content-wrapper">
    <h3>Edit Book</h3>
    <div class="row mt-4">
        <div class="col-lg-4 col-md-12 col-12">
            <div class="card">
                <div class="card-body p-5">
                    <form class="mt-4" action="update/{{$listbook->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="{{$listbook->id}}">
                            <input type="text" class="form-control" id="judul" name="judul" value="{{$listbook->judul}}">
                            <div class="text-danger">
                                @error('judul')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" value="{{$listbook->penulis}}">
                            <div class="text-danger">
                                @error('penulis')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{$listbook->penerbit}}">
                            <div class="text-danger">
                                @error('penerbit')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="month" class="form-control" id="tahun" name="tahun" value="{{$listbook->tahun}}">
                            <div class="text-danger">
                                @error('tahun')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-5">
                                <img src="{{asset('cover')}}/{{$listbook->sampul}}" alt="" class="image rounded" width="100%">
                            </div>
                            <div class="col-7">
                                <div class="form-group">
                                    <label>Upload Cover Buku</label>
                                    <input type="file" class="form-control" id="sampul" name="sampul" value="{{$listbook->sampul}}">
                                    <div class="text-danger">
                                        @error('sampul')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/book" class="btn btn-md btn-outline-primary"><i class="ti-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-md btn-primary"><i class="ti-save-alt mr-1"></i> Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection