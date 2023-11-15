@extends('template/index')

@section('konten')

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link {{(Request::segment(2) == 'barang') ? 'active' : '' }}" href="{{route('master-barang')}}">Barang</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{(Request::segment(2) == 'kategory') ? 'active' : '' }}" href="{{route('master-kategory')}}">Kategori</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{(Request::segment(2) == 'gudang') ? 'active' : '' }} " href="{{route('master-gudang')}}">Gudang</a>
  </li>
</ul>
<div class="tab-content">
  @yield('master-konten-barang')
</div>

<div class="tab-content">
  @yield('master-konten')
</div>

<div class="tab-content ">
  @yield('master-konten-kategory')
</div>

<div class="tab-content">
  @yield('master-konten-edit-kategory')
</div>

<div class="tab-content">
  @yield('konten-show')
</div>

<div class="tab-content ">
  @yield('konten-show-kategory')
</div>

<div class="tab-content ">
  @yield('master-konten-gudang')
</div>

<div class="tab-content ">
  @yield('master-tambah-gudang')
</div>

<div class="tab-content">
  @yield('konten-form-stock')
</div>



@endsection