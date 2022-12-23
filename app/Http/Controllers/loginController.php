<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Treasure;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('pengaturan',$data);
    }
}