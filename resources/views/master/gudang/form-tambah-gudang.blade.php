@extends('master/all')

@section('master-tambah-gudang')

<div class="gudang-tambah" style="box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 padding:15px; margin-top : 15px;">
<h3 style="text-align: center; background-color : gold; padding: 5px 0; border-radius:10px; margin-top:13px;">Data Gudang</h3>
<form  action="{{route('simpan-data-gudang')}} " method="post"  class="row g-3">
@csrf
<div class="">
            <label class="form-label h5">Kode Barang</label>
            <select class="form-select" name="form_barang_to_gudang" style="width: auto;">
                <option selected>Pilih barang</option>
                @foreach ($barang as $b)
                    <option value="{{ $b->kode_barang }}">{{ $b->kode_barang }} | {{ $b->nama }}</option>
                @endforeach
            </select>
        </div>
<div class="mb-3 w-25">
  <label for="for_kode_to_gudang" class="form-label">Kode Gudang</label>
  <input type="text" class="form-control" id="for_kode_to_gudang" name="for_kode_gudang" value="{{old('for_kode_gudang')}}" placeholder="input kode gudang" >
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
  name="for_tempat" value="{{old('for_tempat')}}" placeholder="input tempat gudang">
  @if ($errors->has('for_tempat'))
      <div class="badge text-bg-danger">{{$errors->first('for_tempat')}}</div>
  @endif
</div>
<button type="submit" class="btn btn-warning" style="width: auto;
    margin-left:15px; margin-bottom:10px; ">
    <i class="fa fa-solid fa-save"><span style="font-family: 'Times New Roman', Times, serif; 
    margin-left : 10px; ">Simpan</span></i>
</button>
</form>
</div>


@endsection


