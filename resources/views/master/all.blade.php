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
<div class="tab-content p-4">
  @yield('master-konten-barang')
</div>

<div class="tab-content p-2">
  @yield('master-konten')
</div>

<div class="tab-content p-2">
  @yield('master-konten-kategory')
</div>

<div class="tab-content p-2">
  @yield('master-konten-edit-kategory')
</div>

<div class="tab-content p-4">
  @yield('konten-show')
</div>

<div class="tab-content p-4">
  @yield('konten-show-kategory')
</div>

@endsection