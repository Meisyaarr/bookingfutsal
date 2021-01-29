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
                            <a href="{{route('lapangan.create')}}" class="btn btn-info">Tambah Data</a>
                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Tipe</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lapangans as $lapangan)
                    <tr>
                        <td>{{$lapangan->kode}}</td>
                        <td>{{$lapangan->tipe}}</td>
                        <td>
                            <form action="{{route('lapangan.delete',$lapangan->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('lapangan.edit',$lapangan->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
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