<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $role_id = DB::table('role_user')->where('user_id', '=', Auth::user()->id)->value('role_id');
        $user = User::where('id', Auth::user()->id)->get();
     
        // if the user is general user 
        if ($role_id == 3) {
            
            return view('userDashboard');
        }
        // if the user is doctor 
        elseif ($role_id == 2) {
            return view('DoctorDashboard');
        }
        // if the user is admin 
        elseif ($role_id == 1) {
           
            return view('adminDashboard', );
        }
        // otherwise unknown user 
        else {
            return redirect()->route('/');
        }
    }
}
