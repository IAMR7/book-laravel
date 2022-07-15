@extends('admin/layout_admin/v_template')

@section('title', 'Admin - Dashboard')
    
@section('content')

<div class="content-wrapper">
    <h3>Dashboard</h3>
    <div class="row mt-4">
        @foreach ($listbook as $row)
        <div class="col-lg-2 col-md-3 col-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{asset('cover')}}/{{$row->sampul}}" alt="" class="image" width="100%">
                </div>
                <div class="card-footer text-white bg-primary">
                    <h4>{{$row->judul}}</h4>
                    <p>{{$row->penulis}} ({{$row->tahun}})</p>
                    <a href="" class="btn btn-sm btn-block btn-light">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection