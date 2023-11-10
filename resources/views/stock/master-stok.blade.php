@extends('stock/all-conten')

@section('konten-master-stok')

<h4 style="text-align: center; margin-bottom:3rem;">Data Stok Barang</h4>
<a class="btn btn-primary" style="margin-left : 2rem;" href="{{route('form-stock-barang')}}"> 
<i class="fa-solid fa-plus"></i>
</a>

<a class="btn btn-warning" style="margin-left : 2rem;" href="{{route('stok-keluar')}}"> 
<i class="fa-solid fa-plus"></i>
</a>

<table class="table table-hover" style="margin: 2rem;">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">KODE</th>
      <th scope="col">STOK MASUK</th>
      <th scope="col">STOK KELUAR</th>
      <th scope="col">STOK SISA</th>
      <th scope="col">STOK MINIMAL</th>
      <th scope="col">DIBUAT KAPAN</th>
    </tr>
  </thead>
  <tbody>

  @php 
  $i = 1;
  @endphp

  @foreach ($barang as $b)
    <tr>
      <th style="padding-bottom : 3rem;">{{$i++}}</th>
      <td>{{$b -> kode}}</td>
      <td>{{$b -> stok_masuk}}</td>
      <td>{{$b -> stok_keluar}}</td>
      <td>{{$b -> stok_sisa}}</td>
      <td>{{$b -> stok_minimal}}</td>
      <td>{{$b -> dibuat_kapan}}</td>
    </tr>
@endforeach
  </tbody>
</table>


@endsection