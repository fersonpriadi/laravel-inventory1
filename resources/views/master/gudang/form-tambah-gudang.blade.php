@extends('master/all')

@section('master-tambah-gudang')


<h3 style="text-align: center; background-color : gold; padding: 5px 0; border-radius:10px; margin-top:13px;">Data Gudang</h3>
<form  action="{{route('tambah-data-gudang')}} " method="post"  class="row g-3">
@csrf
<div class="mb-3 w-25">
  <label for="for_kode_barang" class="form-label">Kode Barang</label>
  <input type="text" class="form-control" id="for_kode_barang" name="for_kode_barang" value="{{old('for_kode_barang')}}" placeholder="input kode barang" >
  @if ($errors->has('for_kode_barang'))
      <div class="badge text-bg-danger">{{$errors->first('for_kode_barang')}}</div>
  @endif
</div>
<div class="mb-3 w-25">
  <label for="for_kode" class="form-label">Kode Gudang</label>
  <input type="text" class="form-control" id="for_kode" name="for_kode_gudang" value="{{old('for_kode')}}" placeholder="input kode gudang" >
  @if ($errors->has('for_kode_gudang'))
      <div class="badge text-bg-danger">{{$errors->first('for_kode_kategory')}}</div>
  @endif
</div>
<div class="mb-3 w-50">
  <label for="for_area" class="form-label">Area</label>
  <input type="text" class="form-control" id="for_area" name="for_area" value="{{old('for_area')}}" placeholder="input nama area">
  @if ($errors->has('for_area'))
      <div class="badge text-bg-danger">{{$errors->first('for_area')}}</div>
  @endif
</div>
<div class="mb-3">
  <label for="for_tempat" class="form-label">Tempat</label>
  <input type="text" class="form-control" id="for_jenis_kategory"  
  style="width : 49%;"
  name="for_tempat" value="{{old('for_kode')}}" placeholder="input tempat gudang">
  @if ($errors->has('for_tempat'))
      <div class="badge text-bg-danger">{{$errors->first('for_tempat')}}</div>
  @endif
</div>
<button type="submit" class="btn btn-warning" style="width: auto;">
    <i class="fa fa-solid fa-save"><span style="font-family: 'Times New Roman', Times, serif; margin-left : 10px;">Simpan</span></i>
</button>
</form>


@endsection


