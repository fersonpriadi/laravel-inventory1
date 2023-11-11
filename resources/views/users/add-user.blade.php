@extends ('users/template-start')

@section ('konten-add-user')

<center>
<form class="form-add-user-new" action="{{route('proses-simpan-user')}}" method="post">
    @csrf
    <h3 class="title-add-user" style="margin-bottom:15px;">Tambah User</h3>
  <div class="mb-3">
    <label for="for_nama_user" class="form-label mb-4">Nama</label>
    <input type="text" class="form-control" name="for_nama_user" id="for_nama_user" placeholder="input nama" style="width: 25rem;">
  </div>
  <div class="mb-3">
    <label for="for_email_user" class="form-label mb-4">Email address</label>
    <input type="email" class="form-control" name="for_email_user" id="for_email_user" placeholder="input email" style="width: 25rem;">
  </div>
  <div class="mb-3">
    <label for="for_status_user" class="form-label mb-4">Status</label>
    <input type="text" class="form-control" name="for_status_user" id="for_status_user" placeholder="Input status user " style="width: 25rem;">
  </div>
  <div class="mb-3">
    <label for="for_password" class="form-label mb-4">Password</label>
    <input type="password" class="form-control" id="for_password" placeholder="input password" style="width: 25rem;">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</center>

@endsection