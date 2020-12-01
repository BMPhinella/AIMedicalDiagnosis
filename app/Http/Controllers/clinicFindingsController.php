<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clinicFindings;
use App\Http\Resources\clinicFindingsResource;

class clinicFindingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
         $this->authenticated_instance = new AuthenticatedController; 
     }

    public function getAllClinicFindings(){
        $allclinicFindings=clinicFindings::get();
        return response()->json(allclinicFindings);
    } 
    private function createClinicFindings()
    {
        return clinicFindings::create($this->validateClinicFindings());
    }
    protected function getCreateClinicFindingsForm(){
        return view('admin_forms.clinic_findings_form');
    }
    protected function getEditClinicFindingsForm(){
        $edit_clinicFindings = clinicFindings::where('id',$id)->get();
        return view('admin_form.edit_clinic_findings_form', compact('edit_clinicFindings'));
    }

    protected function validateClinicFindings()
    {
        $clinicFindings                           = new clinicFindings;
        $clinicFindings->Hands                    = request()->Hands;
        $clinicFindings->Skin                     = request()->Skin;
        $clinicFindings->Neck                     = request()->Neck;
        $clinicFindings->Head                     =request()->Head;
        $clinicFindings->eyes                     =request()->eyes;
        $clinicFindings->Insulin_injection_sites  =request()->Insulin_injection_sites;
        $clinicFindings->Legs                     =request()->Legs;
        $clinicFindings->Feet                     =request()->Feet;
        $clinicFindings->Symptoms                 =request()->Symptoms;
        $clinicFindings->Observations             =request()->Observations;
        $clinicFindings->created_by               = $this->authenticated_instance->getAuthenticatedUser();
        $clinicFindings->save();
        return redirect()->back()->with('message',"New patient clinic findings successfully created");
    }
    protected function getClinicFindings(){
        return clinicFindingsResource::collection(clinicFindings::all());
    }
    protected function changeClinicFindings($id){
        clinicFindings::where('id',$id)->update(array(
            'Hands'                   => request()->Hands,
            'Skin'                    => request()->Skin,
            'Neck'                    => request()->Neck,
            'Head'                    => request()->Head,
            'eyes'                    => request()->eyes,
            'Insulin_injection_sites' => request()->Insulin_injection_sites,
            'Legs'                    => request()->Legs,
            'Feet'                    => request()->Feet,
            'Symptoms'                => request()->Symptoms,
            'Observations'            => request()->Observations,
            ));
            return redirect()->back()->with('message', "Your changes were made successfully");
    }
    protected function deleteClinicFindings($id){
        clinicFindings::where('id',$id)->delete();
        return redirect()->back()->with('message', "Your changes were made successfully");
    }
}