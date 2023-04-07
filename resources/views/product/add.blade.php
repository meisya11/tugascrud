@extends('app')

@section('content')
<form action="{{url('/api/product')}}"method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Deskripsi Produk</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="product_description">
    </div>
    <select class="form-select" aria-label="Default select example">
        <option selected>Pilih Kategori</option>
        @foreach ($categories as $item)
        <option value="1">{{$item->name}}</option>
        @endforeach
      </select>
    <button type="submit" class="btn btn-primary mt-4">Tambah</button>
  </form>
