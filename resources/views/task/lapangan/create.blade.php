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
                                    <label for="">Nama Lapangan</label>
                                    <input type="text" name="nama_lapangan" class="form-control" id="" >
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" name="harga" class="form-control" id="">
                                </div>
                            </div>
                                {{$errors->first('name')}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Bentuk</label>
                                    <input type="text" name="Bentuk" class="form-control" id="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Waktu Booking</label>
                                    <input type="text" name="waktu_booking" class="form-control" id="">
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