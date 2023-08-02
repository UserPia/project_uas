<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku_tamu_model;

class buku_tamuController extends Controller
{
    public function index (){
       // return ("Testing buku_tamu");
       $mybuku_tamu = new buku_tamu_model();
        $buku_tamu = $mybuku_tamu->tampil();
        
        $data = array('buku_tamu' => $buku_tamu);
        return view('buku_tamu/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('buku_tamu/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('buku_tamu')
         ->insert([
             'no' => $request->no,
             'nama'  =>  $request->nama,
             'alamat'  =>  $request->alamat,
             'nomor_hp'  =>  $request->nomor_hp,
             'keterangan'  =>  $request->keterangan,
             
         ]);
         return redirect('buku_tamu');
     }
     public function edit_yosi($id){
        // return ('Testing');
        $views_master_yosi = \DB::table('buku_tamu')->where('no', $no)->first();
        //dd($views_master);
        $data = array('buku_tamu => $buku_tamu);
        return view('buku_tamu/edit', $id);
    }

    public function edit_proses_yosi(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('buku_tamu')->where('no',$request->no)
        ->update([
            'nama' => $request->nama,
            'alamat'  =>  $request->alamat,
            'nomor_hp'  =>  $request->nomor_hp,
            'keterangan'  =>  $request->keterangan,
             ]);
        return redirect('views_master_yosi');
    }

    public function delete_yosi ($no){
        $query = \DB::table('buku_tamu')->where('no',$no)->delete();
        return redirect('views_master_yosi');
    }
}
