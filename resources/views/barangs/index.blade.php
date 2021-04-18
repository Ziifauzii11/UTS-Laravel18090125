@extends('barangs.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">
            <div class="text-left">
                <h2>Kelola Data Barang</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-success" href="{{ route('barangs.create') }}">Tambah Barang</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
   
    <table class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Katagori Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Stok</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($barangs as $key => $barang)
        <tr>
          
            <td>{{ $key+1 }}</td>
            <td>{{ $barang->katagori_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->jumlah_stok }}</td>
            <td>
                <form action="{{ route('barangs.destroy',$barang->id) }}" method="POST">
   
                    <a class="btn btn-info btn-sm" href="{{ route('barangs.show',$barang->id) }}">Detail</a>
    
                    <a class="btn btn-primary btn-sm" href="{{ route('barangs.edit',$barang->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection