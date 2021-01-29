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
                                <a href="{{route('task.transaksi.create')}}" class="btn btn-success">Booking</a>
                            </div>
                        </div>
                        <div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Pelanggan</th>
                                        <th>Waktu Booking</th>
                                        <th>Tanggal Booking</th>
                                        <th>Biaya Sewa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($transaksis as $transaksi)
                                    <tr>
                                        <td>{{$transaksi->nama_pelanggan}}</td>
                                        <td>{{$transaksi->waktu_booking}}</td>
                                        <td>{{$transaksi->tanggal_booking}}</td>
                                        <td>{{$transaksi->biaya_sewa}}</td>
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