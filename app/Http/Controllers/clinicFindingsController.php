<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clinicFindings;
use App\patients;
use App\treatment;
use App\management;
use GuzzleHttp\RequestOptions as GRequest;
use GuzzleHttp\Client;
use App\Http\Resources\clinicFindingsResource;
use ClinicFindings as GlobalClinicFindings;
use Illuminate\Support\Facades\Http;

class clinicFindingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
         $this->authenticated_instance = new AuthenticatedController; 
     }

    public function getAllClinicFindings(){
        $allclinicFindings=clinicFindings::get();
        return response()->json();
    } 
    public function createClinicFindings(Request $request)
    {
        $request->merge(['symptoms' => implode(',', (array) $request->get('symptoms'))]);
        // return $request->get('symptoms');
        //send the json to the Api so i can get prediction percentage
        $response = Http::post('http://127.0.0.1:5000/api/index/1', [
            'symptoms' => [$request->get('symptoms')],
        ]);
        $findings = clinicFindings::create($request->all());
        $max_id = clinicFindings::where('patient_id', $findings->patient_id)->get()->MAX('id');

        clinicFindings::where('id',$max_id)->update(array(
            'diagnosis' => $response->body()
        ));
        $patient_id = patients::where('id', $findings->patient_id)->value('id');
        return redirect('/get-patient-diagnosis/'.$patient_id);
    }
    public function returnDiagnosisForm($patient_id){
        $patient = patients::where('id', $patient_id)->first();
        $treatment = treatment::get();
        //max id
        $max_id     = clinicFindings::where('patient_id', $patient_id)->get()->MAX('id');
        $diagnosis  = clinicFindings::where('patient_id', $patient_id)->where('id',$max_id)->value('diagnosis');
        $percentage  = clinicFindings::where('patient_id', $patient_id)->where('id',$max_id)->value('percentage');
        $management = management::get();
        return view('admin_forms.DiagnosisForm',compact('patient', 'treatment', 'management','diagnosis','percentage'));
    }
    
    protected function getCreateClinicFindingsForm(){
        $patients = patients::get();
        return view('admin_forms.clinic_findings_form', compact('patients'));
    }
    protected function getEditClinicFindingsForm(){
        $edit_clinicFindings = clinicFindings::where('id',$id)->get();
        return view('admin_form.edit_clinic_findings_form', compact('edit_clinicFindings','patient_name'));
    }

    protected function validateClinicFindings()
    {
        if(empty(request()->patient_id)){
            return redirect()->back()->withErrors("Please select the patient name");
        }else{    
            return $this->createClinicFindings();
            }
    }
    protected function getClinicFindings(){
        return clinicFindingsResource::collection(clinicFindings::all());
    }
    protected function changeClinicFindings($id){
        clinicFindings::where('id',$id)->update(array(
            'symptoms'                => request()->symptoms
            ));
            return redirect()->back()->with('message', "Your changes were made successfully");
    }
    protected function deleteClinicFindings($id){
        clinicFindings::where('id',$id)->delete();
        return redirect()->back()->with('message', "Your changes were made successfully");
    }
}
