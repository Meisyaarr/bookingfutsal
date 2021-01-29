@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('lapangan.update',$lapangan->id)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kode</label>
                                    <input type="text" name="kode" class="form-control" id="" >
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tipe</label>
                                    <input type="text" name="tipe" class="form-control" id="">
                                </div>
                            </div>

                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-info">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 