@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Jadwal Lapangan Hari ini</h5>
                    
                        <div class="d-flex px-2 py-2">
                            <div>
                                <a href="{{route('task.transaksi.create')}}" class="btn btn-warning ">Tambah Data</a>
                            </div>
                        </div>
                        <div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Pelanggan</th>
                                        <th>Pembayaran</th>
                                        <th>Lapangan</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($transaksis as $transaksi)
                                    <tr>
                                        <td>{{$transaksi->nama_pelanggan}}</td>
                                        <td>{{$transaksi->pembayaran}}</td>
                                        <td>{{$transaksi->lapangan}}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success">Booking</a>
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