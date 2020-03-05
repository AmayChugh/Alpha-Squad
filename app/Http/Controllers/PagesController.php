<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use DB;

class PagesController extends Controller
{
    // public function show($id)
    // {
    //     $item = AwaitedUser::find($id);
    //     $legal= $item->legal_doc_id;
    //     $role=$item->type_of_role;
    //     $doc = LegalDoc::where('legal_doc_id','=',$legal)->get();
    //     $role_name = Role::where('role_id','=',$role)->get();   
    //     // return $legal_id;
    //     $item->legal_doc_id=$doc[0]['doc_description'];
    //     $item->type_of_role=$role_name[0]['role_description'];
         
    //      return view('posts.show')->with('item',$item);
    // }

    public function profile($id){
        $data= Doctor::find($id);
        return view('pages.profile')->with('data',$data);
    }

    public function dashboard(){
        $data= Patient::where('d_id','=','D001')->paginate(6);
        return view('pages.dashboard')->with('data',$data);
    }
}