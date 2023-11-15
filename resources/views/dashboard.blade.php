@extends('template/index')

@section('konten')
<h1 style="font-size: 3rem; text-align:center; font-family:fantasy">Management
<span style="color: gold; font-size:70px; border-bottom:4px solid black;">Inventory</span></h1>
<div class="konten-image" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

    <div class="konten-dashboard" style="margin-top :3rem; text-align:center; padding:2rem; 
    gap:10px; display:flex; justify-content:center; 
    flex-direction:row; width:auto; background-color:beige; background-size: 50px;">
        <div class="col-sm-6 dashboard-list">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Master Data</h5>
                    <p class="card-text">Management menu master data inventory</p>
                    <a href="{{route('master-barang')}}" class="btn btn-primary "><i class="fas fa-database p-2"></i>Menu</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 dashboard-list">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Master Stock</h5>
                <p class="card-text">Management master stock inventory</p>
                <a href="{{route('master-stok')}}" class="btn btn-primary"><i class="fa-solid fa-box p-2"></i>Menu</a>
            </div>
            </div>
        </div>
    </div>

</div>
@endsection