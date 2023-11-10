@extends('master/all')

@section('master-konten-barang')


<div class="row" style="margin-top : 6px;">
  <div class="col-12 text-end">
    <a href="{{route('master-barang-tambah')}}">
    <i class="fa fa-solid fa-plus btn btn-primary"></i>
    </a>
  </div>
</div>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">kode</th>
      <th scope="col">Nama</th>
      <th style="width: 30%;" scope="col">Deskripsi</th>
      <th scope="col">Choice</th>
     
    </tr>
  </thead>
  <tbody>

  @php
    $i = 1;
  @endphp
@foreach ($barang as $b)
    <tr>
      <th>{{$i++}}</th>
      <td>{{$b -> kode_barang}}</td>
      <td>{{$b -> nama}}</td>
      <td>{{$b -> deskripsi}}</td>
      <td>
          <a href="{{route('master-barang-hapus', ['id' => $b->id]) }}" 
          class="btn btn-danger rounded-circle"
          onclick="return confirm('Apakah anda yakin ingin menghapus : {{$b -> kode}} ?')"> 
          <i class="fa-solid fa-trash"></i></a>

          <a href="{{route('master-barang-detail', ['id' => $b->id]) }}" 
          class="btn btn-success rounded-circle"> 
          <i class="fa-solid fa-eye"></i></a>

          <a href="{{route('master-barang-edit', ['id' => $b->id]) }}" 
          class="btn btn-warning rounded-circle"> 
          <i class="fa-solid fa-pencil"></i></a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection