@extends('master/all')

@section('master-konten-kategory')

<div class="row" style="margin-top: 6px;">
  <div class="col-12 text-end">
    <a href="{{route('master-kategory-tambah')}}">
    <i class="fa fa-solid fa-plus btn btn-primary"></i>
    </a>
  </div>
</div>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">kode barang</th>
      <th scope="col">kode kategory</th>
      <th scope="col">Jenis Barang</th>
      <th style="width: 30%;" scope="col">Kemasan Barang</th>
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
      <th>{{$b -> kode_barang}}</th>
      <td>{{$b -> kode}}</td>
      <td>{{$b -> jenis_barang}}</td>
      <td>{{$b -> kemasang_barang}}</td>
      <td>
          <a href="{{route('master-kategory-hapus', ['id' => $b->id]) }}" 
          class="btn btn-danger rounded-circle"
          onclick="return confirm('Apakah anda yakin ingin menghapus : {{$b -> kode}} ?')"> 
          <i class="fa-solid fa-trash"></i></a>

          <a href="{{route('master-kategory-detail', ['id' => $b->id]) }}" 
          class="btn btn-success rounded-circle"> 
          <i class="fa-solid fa-eye"></i></a>

          <a href="{{route('master-kategory-edit', ['id' => $b->id]) }}" 
          class="btn btn-warning rounded-circle"> 
          <i class="fa-solid fa-pencil"></i></a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection