<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{
  
    //get all patients for all doctors
    public function index(){
        $patients = DB::table('patients')->select('id', 'name', 'mobile')->get();
        return $patients;
    }
    
    //get a specific patient by his/her ID
    public function show($id){
        $patient =  DB::table('patients')->select('name', 'mobile')->where('id', '=', $id)->get();
        return $patient;
    }
    
    //add new patient
    public function store(Request $request){
      
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
    
    //Deleting patients
    
    public function delete($id)
    {
        DB::table('patients')->where('id', '=', $id)->delete();
       
    }
    //Updating patients
      public function update(Request $request)
        
        { DB::table('patients')
             ->where('id', $request->id)
            ->update(['name' => $request->name, 'mobile' => $request->mobile]);
           }
    
    
    
}

