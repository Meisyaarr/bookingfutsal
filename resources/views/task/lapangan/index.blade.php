@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="font-weight-bold">Master Data Lapangan</h5>
                    <div class="d-flex">
                        <div>
                            <a href="{{route('lapangan.create')}}" class="btn btn-warning">Tambah Data</a>
                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nama Lapangan</th>
                        <th>Harga</th>
                        <th>Bentuk</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lapangans as $lapangan)
                    <tr>
                        <td>{{$lapangan->nama_lapangan}}</td>
                        <td>{{$lapangan->harga}}</td>
                        <td>{{$lapangan->bentuk}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary">Detail</a>
                            <a href="" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection