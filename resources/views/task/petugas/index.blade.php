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
                                <a href="{{route('petugas.create')}}" class="btn btn-info">Tambah Petugas</a>
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
                                            <form action="{{route('petugas.delete',$petugas->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                                <a href="{{route('petugas.edit',$petugas->id)}}" class="btn btn-sm btn-primary">Edit</a>
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