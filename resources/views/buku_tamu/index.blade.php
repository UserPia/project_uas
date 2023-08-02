@extends('layout1.main2')
@section('content')

<h4><b>Data Master</b></h4>
<br>
<a href="{{ asset('buku_tamu/tambah')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>Nama</td>
    <td><b>alamat</td>
    <td><b>nomor_hp</td>
    <td><b>keterangan</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($buku_tamu as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->no }}</td>
    <td>{{ $rows->nama }}</td>
    <td>{{ $rows->alamat }}</td>
    <td>{{ $rows->nomor_hp }}</td>
    <td>{{ $rows->keterangan }}</td>
    <td>
        <a href="{{ asset('buku_tamu/edit/'.$rows->no ) }}">Edit</a>
        <a href="{{ asset('buku_tamu/delete/'.$rows->no ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection