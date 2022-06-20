<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::paginate(30);
        return view('sufee.mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function formulirmahasiswa()
    {
        return view('sufee.formulirmahasiswa');
    }

    public function simpanmahasiswa(Request $request){
        $bidang_minat = implode(",", $request->get('bidang_minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $bidang_minat
        ]);
        return redirect ("/mahasiswa")->with('success', 'Data Mahasiswa sudah tersimpan!');;
}

    public function editmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view ('sufee.editmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function updatemahasiswa($id, Request $request)
    {
        $bidang_minat = implode(',', $request->bidang_minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> nim = $request->nim;
        $mahasiswa -> nama = $request->nama;
        $mahasiswa -> gender = $request->gender;
        $mahasiswa -> jurusan = $request->jurusan;
        $mahasiswa -> bidang_minat = $bidang_minat;
        $mahasiswa->save();
        return redirect ("/mahasiswa")->with('success', 'Data Mahasiswa Berhasil Diubah!');
    }

    public function hapusmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Dihapus!');
        }
}
