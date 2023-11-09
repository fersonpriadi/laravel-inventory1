@extends('stock/all-conten')

@section('master-history-delete')
<h3 style="text-align: center;">History Delete</h3>
    <table class="table table-hover" style="margin: 2rem;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">kode</th>
      <th scope="col">Nama</th>
      <th style="width: 30%;" scope="col">Deskripsi</th>
      <th scope="col">Restore</th>
     
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
          <a href="{{route('update-item', ['id' => $b->id]) }}" 
          class="btn btn-success rounded-circle"
          onclick="return confirm('Apakah anda yakin restore : {{$b -> kode_barang}} ?')"> 
          <i class="fa-solid fa-trash-can-arrow-up"></i></a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection