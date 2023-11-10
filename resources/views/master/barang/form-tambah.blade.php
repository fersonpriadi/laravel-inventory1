@extends('master/all')

@section('master-konten')


<h3 style="text-align: center; background-color : gold; padding: 5px 0; border-radius:10px; margin-top:13px;">Form tambah</h3>
<form  action="{{route('master-barang-simpan')}}" method="post"  class="row g-3">
@csrf
<div class="mb-3 w-25">
  <label for="for_kode" class="form-label">Kode</label>
  <input type="text" class="form-control" id="for_kode" name="for_kode" value="{{old('for_kode')}}" placeholder="input kode" autofocus>
  @if ($errors->has('for_kode'))
      <div class="badge text-bg-danger">{{$errors->first('for_kode')}}</div>
  @endif
</div>
<div class="mb-3 w-50">
  <label for="for_nama" class="form-label">Nama</label>
  <input type="text" class="form-control" id="for_nama" name="for_nama" value="{{old('for_nama')}}" placeholder="input nama">
  @if ($errors->has('for_nama'))
      <div class="badge text-bg-danger">{{$errors->first('for_nama')}}</div>
  @endif
</div>
<div class="mb-3">
  <label for="for_deskripsi" class="form-label">Deskripsi</label>
  <textarea class="form-control" id="for_deskripsi" name="for_deskripsi" rows="3" placeholder="Input Keterangan Barang">{{old('for_deskripsi')}}</textarea>
  @if ($errors->has('for_deskripsi'))
      <div class="badge text-bg-danger">{{$errors->first('for_deskripsi')}}</div>
  @endif
</div>
<button type="submit" class="btn btn-warning" style="width: auto;">
    <i class="fa fa-solid fa-save"><span style="font-family: 'Times New Roman', Times, serif; margin-left : 10px;">Simpan</span></i>
</button>
</form>


@endsection


