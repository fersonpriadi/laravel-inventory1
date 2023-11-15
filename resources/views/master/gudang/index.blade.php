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
  @php
  $i = 1;
  @endphp
  @foreach ($barang as $b)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{$b -> kode_barang}}</td>
        <td>{{$b -> kode_gudang}}</td>
        <td>{{$b -> area}}</td>
        <td>{{$b -> tempat}}</td>
        <td>
            <a href="{{route('delete-item-gudang', ['id' => $b->id])}}" class="btn" 
            onclick="return confirm('Apakah anda yakin ingin menghapus : {{$b -> kode_gudang}} ?')">
            <i class="fa fa-solid fa-trash btn btn-primary "></i>
            </a>
        </td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection