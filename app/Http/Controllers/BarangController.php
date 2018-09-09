<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function get()
    {
      $data = DB::table('tb_barang')
                ->get();
      //dd($data);
      return view('barang')->with([
                                  //datas - ada 's' menandakan data yg diambil lebih dari 1
                                  'datas' => $data
                                ]);
    }

    public function insert(Request $request)
    {
      $NamaBarang = $request->NamaBarang;
      $Stok = $request->Stok;
      $Harga = $request->Harga;
      //dd($Jumlah);

      DB::table('tb_barang')->insert(
        [
          'nama_barang'=>$NamaBarang,
          'stok'=>$Stok,
          'harga'=>$Harga
        ]
      );
      return redirect()->back();
    }

    public function edit($id)
    {
      $data = DB::table('tb_barang as a')
                ->where('a.no','=',$id)
                ->first();
      //dd($data);
      return view('edit')->with([
        'data' => $data
      ]);
    }

    public function act_edit(Request $request)
    {

      $id = $request->id;
      $NamaBarang = $request->NamaBarang;
      $Stok = $request->Stok;
      $Harga = $request->Harga;

      DB::table('tb_barang as a')
        ->where('a.no','=',$id)
        ->update([
          'nama_barang' => $NamaBarang,
          'stok' => $Stok,
          'harga' => $Harga
        ]);
      return redirect('/barang');
    }

    public function delete($id)
    {
      //dd($id);
      DB::table('tb_barang')
          ->where('no','=',$id)
          ->delete();
      return redirect('/barang');
    }
}
