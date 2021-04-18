@extends('barangs.layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <<strong>Data Tidak Lengkap!</strong>Mohon Lengkapi Data<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('barangs.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="katagori_barang">Katagori Barang</label>
                    <input type="text" name="katagori_barang" class="form-control" id="katagori_barang" aria-describedby="katagori_barang" placeholder="Masukkan Katagori Barang">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" aria-describedby="nama_barang" placeholder="Masukkan Nama Barang">
                </div>
                <div class="form-group">
                    <label for="jumlah_stok">Jumlah Stok</label>
                    <input type="text" name="jumlah_stok" class="form-control" id="jumlah_stok" aria-describedby="jumlah_stok" placeholder="Masukkan Jumlah Stok">
                </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection