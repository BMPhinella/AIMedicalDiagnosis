<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\diseasesResource;
use App\diseases;

class diseasesController extends Controller
{
    public function __construct(){
        //$this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }
    public function getAllDiseases(){
        $alldiseases=diseases::get();
        return $alldiseases;
    }
    private function createDiseases(){
        $diseases                    = new diseases;
        $diseases->name              = request()->name;
        $diseases->created_by        = $this->authenticated_instance->getAuthenticatedUser();
        $diseases->save();
    }
    protected function validateDiseases()
        {
            if(empty(request()->name)){
                    return redirect()->back()->withErrors("Please enter your disease name ");
                }else{    
                    return $this->createDiseases();
            }
    }
    protected function getDiseases(){
        $diseases= diseasesResource::collection(diseases::all());
        return view('admin_pages.diseasesForm',compact('diseases'));
    }
    protected function changeDiseases($id){
        diseases::find($id)->update(array(
        'name'     => request()->name,
        ));
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    protected function deleteDisease($id){
        diseases::find($id)->delete();
        return redirect()->back();
    }
}
