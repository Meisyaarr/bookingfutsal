@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Data Petugas</h5>
                    
                        <div class="d-flex px-2 py-2">
                            <div>
                                <a href="{{route('petugas.create')}}" class="btn btn-warning ">Tambah Petugas</a>
                            </div>
                        </div>
                        <div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($petugass as $petugas)
                                    <tr>
                                        <td>{{$petugas->nama}}</td>
                                        <td>{{$petugas->email}}</td>
                                        <td>{{$petugas->level}}</td>
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