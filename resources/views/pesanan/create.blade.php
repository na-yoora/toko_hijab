@extends('layout')

@section('title', 'form pesanan')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">
<center><font face="Arial"> <h1>Form Pesanan</h1></font></center>
<form method="post" action="/pesanan">
@csrf
  <div class="form-group">
    <label for="nama_pemesan">Nama Pemesan</label>
    <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror" id="nama_pemesan" placeholder="Masukan Nama Anda" name="nama_pemesan" value="{{ old('nama_pemesan') }}">
    @error('nama_pemesan')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="nama_barang">Nama Barang</label>
    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" placeholder="Masukan Nama barang" name="nama_barang" value="{{ old('nama_barang') }}"">
    @error('nama_barang')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="harga_barang">Harga</label>
    <input type="text" class="form-control @error('harga_barang') is-invalid @enderror" id="harga_barang" placeholder="Masukan Harga" name="harga_barang" value="{{ old('harga_barang') }}">
    @error('harga_barang')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="jumlah_barang">Jumlah Barang</label>
    <input type="text" class="form-control @error('jumlah_barang') is-invalid @enderror" id="jumlah_barang" placeholder="Masukan Jumlah Pesanan" name="jumlah_barang" value="{{ old('jumlah_barang') }}">
    @error('jumlah_barang')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>
  <button type="submit" class="btn btn-primary">Submit Pesanan</button>
</form>
</div>
</div></div> 

@endsection