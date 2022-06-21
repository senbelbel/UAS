<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mhs;

class MhsController extends Controller
{
    public function mhs()
    {
        $mhs = Mhs::orderBy('id','DESC')->paginate(10);
        return view('mhs', ['mhs' => $mhs]);
    }
    
    public function search(Request $request)
    {
        $cari = $request->cari;
        $mhs = Mhs::where('nama','like', '%'.$cari.'%')->orWhere('nim','like', '%'.$cari.'%')->paginate();
        return view('mhs', ['mhs'=> $mhs], ['cek'=> 'mhs']);
    }

    public function editmhs($id)
    {
        $mhs = Mhs::find($id);
        return view('editmhs', ['mhs' => $mhs]);
    }

    public function formulirmhs()
    {
        return view('formulirmhs');
    }

    public function simpanmhs(Request $request){
        $bid_minat = implode(",", $request->get('bid_minat'));
        Mhs::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bid_minat' => $bid_minat
        ]);
        return redirect('/mhs');
    }

    public function updatemhs($id)
    {
        $bid_minat = implode(',', $request-> bid_minat);
        $mhs = Mhs::find($id);
        $mhs ->nim = $request->nim;
        $mhs ->nama = $request->nama;
        $mhs ->gender = $request->gender;
        $mhs ->jurusan = $request->jurusan;
        $mhs ->bid_minat = $request->bid_minat;
        $mhs->save();
        return view('/mhs')->with('alterupdate', 'Berhasil diubah');
    }

    public function hapusmhs($id)
    {
        $mhs = Mhs::find($id);
        $mhs->delete();
        return view('/mhs')->with('alterdelete', 'Berhasil dihapus');
    }
}
