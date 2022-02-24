<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;

class penghasilan extends Controller
{
    public function index()
    {
        $data['result'] = karyawan::all();
        return view('index')->with($data);
    }
}
