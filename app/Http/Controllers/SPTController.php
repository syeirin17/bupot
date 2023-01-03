<?php

namespace App\Http\Controllers;
use App\Models\RekamSPT;

class SPTController extends Controller
{
    

    public function rekambuktisetor()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('tambah',$data);
    } 

    public function proses_tambah_buktisetor( $request){
        // dd($request->all());
        
            $response = Http::post('http://localhost:8000/api/tambah_buktisetor/',$request->all());
            // dd($response->json());
            return redirect("sptmasa")->withSuccess('sukses');
        }

    public function sptmasa()
    {
        $data = [
            'daftarbuktisetor' => RekamSPT::get()
        ];
        return view('sptmasa',$data);
    }

    public function hapus_buktisetor($id){
        $response = Http::get('http://localhost:8000/api/hapus_buktisetor/'.$id);
        
        return redirect("sptmasa")->withSuccess('berhasil dihapus');
    } 

}