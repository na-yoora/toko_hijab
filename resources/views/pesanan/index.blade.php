@extends('layout')

@section('title', 'form')
@section('content')

<style type="text/css">

body {
    background: url(gambar/bgd.jpg) no-repeat fixed;
   background-size: 100% 100%;

}
</style>

<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Pemesanan</h1>
<a href="/pesanan/create" class="btn btn-primary" my-3> + Buat Pesanan</a>
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<table class="table">
  <thead>
    <tr class="table-secondary">
      <th scope="col">#</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $pesanan as $p)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $p->nama_pemesan }}</td>
      <td>{{ $p->nama_barang }}</td>
      <td>{{ $p->harga_barang }}</td>
      <td>{{ $p->jumlah_barang }}</td>
      <td><a href="{{ $p->id }}/edit" class="btn btn-success">Edit</a>
          <form action="{{ $p->id }}" method="post" class="d-inline">
          @method('delete')
          @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
          </form>
    </td>

    </tr>
   @endforeach
  </tbody>
</table>
</div>
</div></div> 

@endsection