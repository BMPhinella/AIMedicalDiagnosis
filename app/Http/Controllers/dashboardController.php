<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visits;
use App\patients;
use App\appointments;
use DB;
use Carbon\Carbon;

class dashboardController extends Controller
{
    public function getDashboard(){
        $count_patients_per_month = $this->getGraphs();
        $count_patients = patients::count();
        $count_visits = visits::count();
        $count_appointments = appointments::count();
        return view('admin_layouts.dashboard',compact('count_patients','count_visits','count_appointments','count_patients_per_month'));
    }
    public function getGraphs(){
        $months= [1,2,3,4,5,6,7,8,9,10,11,12];
        $number_of_patients_per_month=[];
        for($i=0;$i<=count($months);$i++){
            if($i < 12){
                array_push($number_of_patients_per_month,patients::whereMonth('created_at',$months[$i])->count());
            }
        }
        // return json_encode($months);
        return json_encode($number_of_patients_per_month);
    }
    public function getPieChart(){
        $data=patients::select('age','first_name')->get();
        return response()->json($data);
    }
}
