@extends('master/all')

@section('master-konten')


<h3 style="text-align: center;">Form tambah</h3>
<form  action="{{route ('master-barang-simpan')}}" method=""  class="row g-3">
<div class="mb-3 w-25">
  <label for="for_kode" class="form-label">Kode</label>
  <input type="text" class="form-control" id="for_kode" placeholder="input kode">
</div>
<div class="mb-3 w-50">
  <label for="for_nama" class="form-label">Nama</label>
  <input type="email" class="form-control" id="for_nama" placeholder="input nama">
</div>
<div class="mb-3">
  <label for="for_deskripsi" class="form-label">Deskripsi</label>
  <textarea class="form-control" id="for_deskripsi" rows="3" placeholder="Input Keterangan Barang"></textarea>
</div>
<button type="submit" class="btn btn-warning" style="width: 15%;">
    <i class="fa fa-solid fa-save">Simpan</i>
</button>
</form>


@endsection


