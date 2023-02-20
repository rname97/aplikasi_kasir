<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = Karyawan::all();
        return view('karyawan', ['karyawan' => $karyawan]);
    }
    
}
