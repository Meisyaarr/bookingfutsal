@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 ">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('transaksi.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Id pelanggan</label>
                                    <input type="text" name="customer_id" class="form-control" id="" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Pelanggan</label>
                                    <input type="text" name="nama_pelanggan" class="form-control" id="" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Waktu Booking</label>
                                    <input type="text" name="waktu_booking" class="form-control" id="" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Booking</label>
                                    <input type="text" name="tanggal_booking" class="form-control" id="">
                                </div>
                            </div>

                                {{$errors->first('name')}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Biaya Sewa</label>
                                    <select type="text" name="biaya_sewa" class="form-control" id="">
                                        <option>Sintetis(100k)</option>
                                        <option>Vinyl(120k)</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-outline-info">Masukan Data Baru</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 