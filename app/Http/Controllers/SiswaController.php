<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $cari = Request()->cari;
        if ($cari == null) {
            $siswas = Siswa::get();
        } else {
            $siswas = Siswa::where("nama", "like", "%" . $cari . "%")->get();
        }
        // $siswas = Siswa::where('umur', '<', 14)->get();
        return view("siswa",['siswas' => $siswas]);
    }

    public function detail($id){
        $siswa = siswa::find( $id);
        return view("detail", ['siswa' => $siswa]);
    }

    public function tambahData(){
        return view('tambah');
    }
    public function simpanData(Request $req){
       $data = $req->validate([
        'nama'=>'required',
        'umur'=>'required',
        'ttl'=>'required',
        'alamat'=>'required'
       ],[
        'nama.required'=>'nama wajib di isi',
        'umur.required'=>'umur wajib di isi',
        'ttl.required'=>'Tanggal Lahir wajib di isi',
        'alamat.required'=>'alamat wajib di isi',
       ]);

       Siswa::insert($data);
       return redirect('siswa');
    }   

    public function hapusData($id){
        Siswa::where('id',$id)->delete();
        return redirect('/siswa');
    }
    public function tampilanEdit($id){
        $siswa = Siswa::find($id);
        return view( "edit", compact(var_name: "siswa"));
    }
    public function editData($id, Request $req){
        $data = $req->validate([
            'nama' => 'required',
            'umur' => 'required',
            'ttl' => 'required',
            'alamat' => 'required'
        ], [
            'nama.required' => 'nama wajib di isi',
            'umur.required' => 'umur wajib di isi',
            'ttl.required' => 'Tanggal Lahir wajib di isi',
            'alamat.required' => 'alamat wajib di isi',
        ]);

        Siswa::where('id', $id)->update($data);
        return redirect('siswa');
    }
}
