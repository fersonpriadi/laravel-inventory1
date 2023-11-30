@extends('account/index')

@section('konten-role')


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
      <th scope="col">Nama Role / Peran</th>
      <th scope="col">Choice</th>
     
    </tr>
  </thead>
  <tbody>

  @php
    $i = 1;
  @endphp
@foreach ($role as $r)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$r -> kode}}</td>
      <td>{{$r -> nama}}</td> 
      <td>
          <a href="" 
          class="btn btn-danger rounded-circle"
          onclick=""> 
          <i class="fa-solid fa-trash"></i></a>

          <a href="" 
          class="btn btn-success rounded-circle"> 
          <i class="fa-solid fa-eye"></i></a>

          <a href="" 
          class="btn btn-warning rounded-circle"> 
          <i class="fa-solid fa-pencil"></i></a>
      </td>
    </tr>
@endforeach

  </tbody>
</table>

@endsection