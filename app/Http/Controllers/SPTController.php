<?php

namespace App\Http\Controllers;
use App\Models\RekamSPT;

class SPTController extends Controller
{
    public function tambah()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('tambah',$data);
    } 

    public function daftarbuktisetor()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'daftarbuktisetor' => $tambah->json() ?? []

        ];
        return view('sptmasa',$data);
    } 

    public function proses_tambah_buktisetor(Request $request){
        // dd($request->all());
        
            $response = Http::post('http://localhost:8000/api/tambah_buktisetor/',$request->all());
            // dd($response->json());
            return redirect("sptmasa")->withSuccess('sukses');
        }

    public function daftarbuktisetor()
    {
        $daftarbuktisetor= Http::get('http://localhost:8000/api/rekam_spt/');
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'daftarbuktisetor' => $rekam_spt->json() ?? []

        ];
        return view('sptmasa',$data);
    }

     public function hapus_buktisetor($id){
        $response = Http::get('http://localhost:8000/api/buktisetordelete/'.$id);
        
        return redirect("sptmasa")->withSuccess('berhasil dihapus');
    } 
}