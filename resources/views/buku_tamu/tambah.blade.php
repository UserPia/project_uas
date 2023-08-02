@extends('layout1.main2')
@section('content')


<h4><b>Tambah buku_tamu</b></h4>
<br>
<form action="{{ asset('buku_tamu/tambah_proses') }}" method="POST">
@csrf

<div class="mb-3 row">
    <label for="no" class="col-sm-2 col-form-label">Nama buku_tamu</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="no" name="no">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">nama</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama" name="nama">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
</div>
<div class="mb-3 row">
    <label for="nomor_hp" class="col-sm-2 col-form-label">nomor_hp</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nomor_hp" name="nomor_hp">
    </div>
</div>
<div class="mb-3 row">
    <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="keterangan" name="keterangan">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection