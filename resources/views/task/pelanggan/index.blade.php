@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="font-weight-bold">Master Data Pelanggan</h5>
                    <div class="d-flex">
                        <div>
                        <a href="{{route('task.pelanggan.create')}}" class="btn btn-info">Tambah Data</a>
                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pelanggans as $pelanggan)
                    <tr>
                        <td>{{$pelanggan->nama_pelanggan}}</td>
                        <td>{{$pelanggan->alamat}}</td>
                        <td>{{$pelanggan->no_telp}}</td>
                        <td>
                            <form action="{{route('pelanggan.delete',$pelanggan->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                    <a href="{{route('pelanggan.edit',$pelanggan->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
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