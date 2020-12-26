<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientsClinicFindings;
use App\Http\Resources\patientsClinicFindingsResource;
use DB;

class patientsClinicFindingsController extends Controller
{
    public function __construct(){
       // $this->middleware('auth'); 
    }
    
    public function createpatientsClinicFindings(){
        return patientsClinicFindings::create($this->validatePatientsClinicFindings());
    }

    /**
     * This function gets the patients clinical findings
     */
    protected function getClinicalFindings($patient_id){
        //get the most recent sysmptoms fort this user, from the max id
        //max id
        $findings = [];
        $max_id = DB::table('ClinicFindings')->where('patient_id',$patient_id)->get()->max('id');
        $patient_findings = DB::table('ClinicFindings')->where('patient_id',$patient_id)->where('id',$max_id)
        ->select('symptoms')
        ->get();
        foreach($patient_findings as $find){
            array_push($findings,$find->symptoms);
        }
        return $findings;
        
    }

    protected function validatePatientsClinicFindings(){
        return request()->validate([
            'patient_id'=>'required',
            'clinic_findings_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getPatientsClinicFindings(){
            $patientsClinicFindings= patientsClinicFindingsResource::collection(patientsClinicFindings::all());
            //return view('admin_pages.template',compact('patientsClinicFindings'));
        }
        public function changePatientsClinicFindings($id){
            patientsClinicFindings::find($id)->update();
            return redirect()->back()->with('msg', "Your changes were made successfully");
        }
        public function removePatientsClinicFindings($id){
            patientsClinicFindings::find($id)->delete();
            return redirect()->back();
        }
}
