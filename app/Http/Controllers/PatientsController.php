<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{
  
    public function show(){
        $patients = DB::table('patients')->select('id', 'name', 'mobile')->get();
        return $patients;

    }
    public function preview($id){
        $patients =  DB::table('patients')->select('name', 'mobile')->where('id', '=', $id)->get();

        return $patients;
    }
     public function insert(Request $request){
      
         $doctor_id = $request->doctor_id;
         $mobile = $request->mobile;
         $name = $request->name;
         $date_of_birth = $request->date_of_birth;
         $picture = $request->picture;
         $is_special_case = $request->is_special_case;
      
        DB::table('patients')->insert(
    ['doctor_id'=>$doctor_id ,'mobile' => $mobile,'name' => $name,'date_of_birth' => $date_of_birth,'picture'=>$picture,'is_special_case'=>$is_special_case ]
);
         
         
     
   }

    
    
    
}

