@extends('master/all')

@section('master-konten')


<div class="row">
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
      <th style="width: 30%;" scope="col">Kategory</th>
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
      <td>{{$b -> kode}}</td>
      <td>{{$b -> nama}}</td>
      <td>{{$b -> deskripsi}}</td>
      <td>
          <a href="{{route('master-barang-hapus', ['id' => $b->id]) }}" 
          class="btn btn-danger"
          onclick="return confirm('Apakah anda yakin ingin menghapus : {{$b -> kode}} ?')"> 
          <i class="fa-solid fa-trash"></i></a>
          <!-- <a href="{{route('master-barang-hapus', ['id' => $b->id]) }}" class="btn btn-danger"> <i class="fa-solid fa-circle-info"></i></a> -->
      </td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection