@extends('master/all')

@section('konten-show')

<h3 style="margin-bottom : 30px;">Show Data Details</h3>
@if(isset($barang[0]))
@php
        $tanggal_dibuat = new DateTime($barang [0]-> dibuat_kapan);
        $dibuat = $tanggal_dibuat->format('D, d M Y');

        $tanggal_diperbarui = new DateTime($barang [0]-> diperbarui_kapan);
        $diperbarui = $tanggal_diperbarui->format('D, d M Y');

@endphp

<div class="card" style=" box-shadow :  6px 4px 1px grey; width: 50%; text-align:center; justify-content:center;">
  <div class="card-body">
    <h5 class="card-title">{{$barang[0]-> kode_barang}}</h5>
    <h6 class="nama">{{$barang [0]-> nama}}</h6>
    <h6 class="card-text">{{ $barang[0]-> deskripsi}}</h6>
    <span class="card-text">Dibuat Kapan : {{$dibuat}} | {{ $barang [0]-> dibuat_nama}}</span> <br>
    <span class="card-text">Terakhir Diperbarui  : {{ $diperbarui }} | {{ $barang [0]-> diperbarui_nama}}</span> <br>
  </div>
</div>

@else
<h6>tidak ada barang</h6>

@endif

@endsection