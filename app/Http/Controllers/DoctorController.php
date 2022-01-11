<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function list(){
        $doctors=Doctor::all();
        return view('allDoctors',['doctors'=>$doctors]);
    }
}


