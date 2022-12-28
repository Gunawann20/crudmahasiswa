<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = DB::table('mahasiswas')->get();

        return view('mahasiswa')->with('mahasiswas',$mahasiswas);
    }
    public function tambah(Request $request){
        DB::table('mahasiswas')->insert([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'NIM' => $request->NIM,
            'Tanggal_lahir' => $request->Tanggal_lahir,
            'Jurusan' => $request->Jurusan,
            'Alamat'=>$request->Alamat
        ]);
        return redirect('/');
    }
    public function edit($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('editmahasiswa')->with('mahasiswa',$mahasiswa);
    }
    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->nama_mahasiswa = $request->nama_mahasiswa;
        $mahasiswa->NIM = $request->NIM;
        $mahasiswa->Tanggal_lahir = $request->Tanggal_lahir;
        $mahasiswa->Jurusan = $request->Jurusan;
        $mahasiswa->Alamat = $request->Alamat;
        $mahasiswa->save();

        return redirect('/');
    }
    public function delete($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect('/');
    }
}
