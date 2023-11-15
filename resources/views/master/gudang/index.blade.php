@extends('master/all')

@section('master-konten-gudang')

<div class="row" style="margin-top: 6px;">
  <div class="col-12 text-end">
    <a class="tambah-gudang" href="{{route('tambah-data-gudang')}}">
    <i class="fa fa-solid fa-plus btn btn-primary "></i>
    </a>
  </div>
</div>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">kode barang</th>
      <th scope="col">Kode Gudang</th>
      <th scope="col">Area</th>
      <th style="width: 20%;" scope="col">Tempat</th>
      <th scope="col">Choice</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
        <td>TGO-KLG</td>
        <td>GDG-001</td>
        <td>Jakarta Barat</td>
        <td>Gudang 1</td>
        <td>
            <a href="" class="btn">
            <i class="fa fa-solid fa-plus btn btn-primary "></i>
            </a>
        </td>
    </tr>
  </tbody>
</table>

@endsection