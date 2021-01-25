@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
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
                                    <label for="">Tipe</label>
                                    <input type="text" name="type_id" class="form-control" id="" >
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
                                    <label for="">Pembayaran</label>
                                    <input type="text" name="pembayaran" class="form-control" id="" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Lapangan</label>
                                    <input type="text" name="lapangan" class="form-control" id="">
                                </div>
                            </div>

                                {{$errors->first('name')}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Option</label>
                                    <input type="text" name="option" class="form-control" id="">
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