@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">

            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Pelanggan</label>
                                    <input type="text" name="nama_pelanggan" class="form-control" id="" >
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="harga" class="form-control" id="">
                                </div>
                            </div>
                                {{$errors->first('name')}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">No Telp</label>
                                    <input type="text" name="no_telp" class="form-control" id="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Option</label>
                                    <input type="text" name="option" class="form-control" id="">
                                </div>
                            </div>
                        <div>
                            <button type="submit" class="btn btn-outline-info">Masukan Data Baru</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 