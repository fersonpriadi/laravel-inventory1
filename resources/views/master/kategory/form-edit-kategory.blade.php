@extends('master/all')

@section('master-konten')


<h3 style="text-align: center; background-color : gold; padding: 5px 0; border-radius:10px; margin-top:15px; margin-bottom:15px;">Edit Kategory</h3>
<form  action="{{route('master-kategory-update', ['id' => $barang[0]->id])}}" method="post"  class="row g-3">
@csrf
<div class="mb-3 w-25">
  <label for="for_kode_kategory" class="form-label">Kode Kategory</label>
  <input type="text" class="form-control" id="for_kode" name="for_kode_kategory" value="{{old('for_kode',$barang[0]->kode_kategory)}}" placeholder="input kode" disabled>
  @if ($errors->has('for_kode_kategory'))
      <div class="badge text-bg-danger">{{$errors->first('for_kode_kategory')}}</div>
  @endif
</div>
<div class="mb-3 w-25">
  <label for="for_kode_barang" class="form-label">Kode Barang</label>
  <input type="text" class="form-control" id="for_kode_barang" name="for_kode_barang" value="{{old('for_kode_barang',$barang[0]->kode_barang)}}" placeholder="Input kode barang">
  @if ($errors->has('for_kode_barang'))
      <div class="badge text-bg-danger">{{$errors->first('for_kode_barang')}}</div>
  @endif
</div>
<div class="mb-3 w-50">
  <label for="for_jenis_barang" class="form-label">jenis barang</label>
  <input type="text" class="form-control" id="for_jenis_barang" name="for_jenis_barang" value="{{old('for_jenis_barang', $barang[0]->jenis_barang)}}" placeholder="Jenis barang">
  @if ($errors->has('for_jenis_barang'))
      <div class="badge text-bg-danger">{{$errors->first('for_jenis_barang')}}</div>
  @endif
</div>
<div class="mb-3">
  <label for="for_kemasan" class="form-label">kemasan</label>
  <input class="form-control" id="for_kemasan" name="for_kemasan" rows="3" placeholder="Input kemasang barang" style="width: 24%;" 
  value="{{old('for_kemasan', $barang[0]->kemasang_barang)}}"></input>
  @if ($errors->has('for_kemasan'))
      <div class="badge text-bg-danger">{{$errors->first('for_kemasan')}}</div>
  @endif
</div>
<button type="submit" class="btn btn-warning" style="width: auto;">
    <i class="fa fa-solid fa-save"><span style="font-family: 'Times New Roman', Times, serif; margin-left : 10px;">Update</span></i>
</button>
</form>


@endsection


