@extends('admin/layout_admin/v_template')

@section('title', 'Admin - List Book')
    
@section('content')

<div class="content-wrapper">
    <h3>Detail Buku</h3>

    <div class="row mt-4">
        <div class="col-lg-4 col-md-12 col-12">
            <div class="card">
                <div class="card-body p-5">
                    <img src="{{asset('cover')}}/{{$listbook->sampul}}" alt="" class="image rounded" width="100%">
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12">
            <div class="card">
                <div class="card-body p-5">
                    <h2 class="text-primary">Judul Buku : {{$listbook->judul}}</h2>
                    <hr>
                    <h6 class="mb-3">Ditulis Oleh : {{$listbook->penulis}}</h6>
                    <h6 class="mb-3">Pada Tahun : <small class="badge badge-primary">{{$listbook->tahun}}</small> </h6>
                    <h6 class="mb-3">Penerbit : {{$listbook->penerbit}}</h6>
                    <hr>
                    <h6 class="mb-3">Diinsert Pada : {{$listbook->created_at}}</h6>
                    <h6 class="mb-5">Diperbaharui Pada : {{$listbook->updated_at}}</h6>
                    <a href="/admin/book" class="btn btn-md btn-primary"><i class="ti-arrow-left"></i> Kembali</a>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection