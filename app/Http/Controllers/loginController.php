<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use DB;

class loginController extends BaseController
{
    public function login(request $req)
    {
    $username=$req->input('username');
    $password=$req->input('password');
    $checkpatientLogin = DB :: table('patient')->where(['p_name'=>$username,'password'=>$password])->get();
    $checkdoctorLogin = DB :: table('doctor')->where(['d_name'=>$username,'password'=>$password])->get();
    $checkadminLogin = DB :: table('admin')->where(['a_name'=>$username,'password'=>$password])->get();
    return $checkdoctorLogin;
    return $checkdoctorLogin[0]['d_id'];

    if(count($checkpatientLogin) > 0)
    {
        return view('pdetails');
    }
    elseif(count($checkdoctorLogin) > 0)
    {
        $data->d_id=$checkdoctorLogin[0]['d_id'];
        return view('pages.dashboard')->with('data',$data);
    }
    elseif(count($checkdoctorLogin) > 0)
    {
        echo "Admin Login";
    }
    else
    {
        echo "Login Failed";
    }
    }
}
