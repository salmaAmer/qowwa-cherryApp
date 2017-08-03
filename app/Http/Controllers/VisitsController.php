<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitsController extends Controller
{
    //insert a new visit
   public function store(Request $request){
      
         $patient_id = $request->patient_id;
         $title= $request->title;
         $symptoms = $request->symptoms;
         $diagnosis = $request->diagnosis;
         $treatment = $request->treatment;
         $notes = $request->notes;
         $visit_date = $request->visit_date;
         
        DB::table('visits')->insert(
        ['patient_id'=>$patient_id ,'title' => $title,'symptoms' => $symptoms,'diagnosis' => $diagnosis,'treatment'=>$treatment,'notes'=>$notes,'visit_date'=>$visit_date ]
        );
   }
    //deleting visits
     public function delete($id)
    {
        DB::table('visits')->where('id', '=', $id)->delete();
       
    }
    //updating visits
    public function update(Request $request)
        
        { DB::table('visits')
             ->where('id', $request->id)
            ->update(['patient_id' => $request->patient_id, 'title' => $request->title]);
           }
    
    
}
