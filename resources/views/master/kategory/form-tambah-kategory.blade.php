@extends('master/all')

@section('master-konten-kategory')


<h3 style="text-align: center; background-color : gold; padding: 5px 0; border-radius:10px; margin-top:13px;">Form tambah kategory</h3>
<form  action="{{route('master-kategory-simpan')}}" method="post"  class="row g-3">
@csrf
<div class="mb-3 w-25">
  <label for="for_kode_barang" class="form-label">Kode Barang</label>
  <input type="text" class="form-control" id="for_kode_barang" name="for_kode_barang" value="{{old('for_kode_barang')}}" placeholder="input kode barang" >
  @if ($errors->has('for_kode_barang'))
      <div class="badge text-bg-danger">{{$errors->first('for_kode_barang')}}</div>
  @endif
</div>
<div class="mb-3 w-25">
  <label for="for_kode" class="form-label">Kode Kategory</label>
  <input type="text" class="form-control" id="for_kode" name="for_kode_kategory" value="{{old('for_kode')}}" placeholder="input kode" >
  @if ($errors->has('for_kode_kategory'))
      <div class="badge text-bg-danger">{{$errors->first('for_kode_kategory')}}</div>
  @endif
</div>
<div class="mb-3 w-50">
  <label for="for_jenis_kategory" class="form-label">Jenis Barang</label>
  <input type="text" class="form-control" id="for_jenis_kategory" name="for_jenis_kategory" value="{{old('for_kode')}}" placeholder="input nama">
  @if ($errors->has('for_nama'))
      <div class="badge text-bg-danger">{{$errors->first('for_nama')}}</div>
  @endif
</div>
<div class="mb-3">
  <label for="for_kemasan" class="form-label">Kemasan Barang</label>
  <textarea class="form-control" id="for_kemasan" name="for_kemasan" rows="3" placeholder="Input Keterangan Barang">{{old('for_kemasan')}}</textarea>
  @if ($errors->has('for_kemasan'))
      <div class="badge text-bg-danger">{{$errors->first('for_kemasan')}}</div>
  @endif
</div>
<button type="submit" class="btn btn-warning" style="width: auto;">
    <i class="fa fa-solid fa-save"><span style="font-family: 'Times New Roman', Times, serif; margin-left : 10px;">Simpan</span></i>
</button>
</form>


@endsection


