@extends('template/index')

@section('konten-account')

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link {{(Request::segment(2) == 'barang') ? 'active' : '' }}" 
    href="{{url('/master-barang')}}"> <i class="fa-solid fa-user-group"></i>
    Role Managemant</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{(Request::segment(2) == 'kategory') ? 'active' : '' }}" 
    href="{{url('/master-kategory')}}"> <i class="fa-solid fa-user-group"></i>
    User Managemant</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{(Request::segment(2) == 'gudang') ? 'active' : '' }} " 
    href="{{url('/master-gudang')}}"> <i class="fa-solid fa-user-check"></i>
    Menu Permission</a>
  </li>
</ul>
<div class="tab-content">
  @yield('master-konten-barang')
</div>




@endsection