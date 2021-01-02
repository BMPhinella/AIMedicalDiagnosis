<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicalPractitioners;
use App\User;
use Spatie\Permission\Models\Role;
use App\Http\Resources\medicalPractitionersResource;

class medicalPractitionersController extends Controller
{
    public function __construct(){
        //$this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }

    protected function getCreateMedicalPractitionersForm(){
        $roles = Role::pluck('name')->toArray();
        $users = User::get();
        //dd($roles);
        return view('admin_forms.medicalPractitionersForm', compact('roles')); 
    }
    protected function getEditMedicalPractitionersForm($id){
        $users = User::get();
        $edit_ = User::where('id',$id)->get();
        return view('admin_forms.medical_practitioner_edit_form', compact('users','roles')); 
    }

    private function createMedicalPractitioners(){
        $user = User::create([
            'name' => request()->name,
            'email' => request()->email,
            'contact' => request()->phone_No,
            'password'=>bcrypt(request()->password)
        ]);
        //dd($user);
        $user->assignRole(request()->role);
        return redirect()->back()->with('message',"New medical practitioner has been created successfuly");
    }

    protected function validateMedicalPractitioners(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors("Please enter your name");
        }elseif(empty(request()->password)){
            return redirect()->back()->withErrors("Please enter your password");
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors("Please enter your email");
        }elseif(empty(request()->phone_No)){
            return redirect()->back()->withErrors("Please enter your contact");
        }else{    
            return $this->createMedicalPractitioners();
        }
    }
    protected function getMedicalPractitioners(){
        $medicalPractitioners= medicalPractitionersResource::collection(medicalPractitioners::all());
        $users = User::get();
        $roles = Role::pluck('name')->toArray();
        return view('admin_forms.get_medical_practitioners',compact('users'));
    }
    protected function changeMedicalPractitioners($id){
        if(empty(request()->name)){
            return redirect()->back()->withErrors("Please enter your name");
        }elseif(empty(request()->password)){
            return redirect()->back()->withErrors("Please enter your password");
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors("Please enter your email");
        }elseif(empty(request()->phone_No)){
            return redirect()->back()->withErrors("Please enter your contact");
        }
        
        medicalPractitioners::find($id)->update(array(
            'name'          => request()->name,
            'password'      => request()->password,
            'email'         => request()->email,
            'role'          => request()->role,
            'phone_No'      => request()->phone_No,
        ));
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    protected function deleteMedicalPractitioners($id){
        users::find($id)->delete();
        return redirect()->back()->with('message', "The details have been deleted ");
    }
}
