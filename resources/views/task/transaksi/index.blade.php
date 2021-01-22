@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="px-3">
        <h5 class="font-weight-bold text-justify px-3">Jadwal Lapangan Hari Ini</h5>
        </div>
    
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div>
                        <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>No Transaksi</th>
                        <th>Nama Pelanggan</th>
                        <th>Pembayaran</th>
                        <th>Lapangan</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>9736829</td>
                        <td>Keyc</td>
                        <td>Lunas</td>
                        <td>Booking</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success">Booking</a>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        <div>
    </div>
</div>
@endsection