@extends('barangs.layout')
  
@section('content')

<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Barang
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Katagori barang: </b>{{$barang->katagori_barang}}</li>
                    <li class="list-group-item"><b>Nama Barang: </b>{{$barang->nama_barang}}</li>
                    <li class="list-group-item"><b>Jumlah Stok: </b>{{$barang->jumlah_stok}}</li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('barangs.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection