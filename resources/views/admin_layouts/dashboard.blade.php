@extends('admin_layouts.main')
@section('page_css')
<link rel="stylesheet" href="{{asset('Admin/mdb/css/mdb.min.css')}}">
@endsection
@section('main_content')
<!-- BEGINNING OF CARDS -->
<div class="row row-stat">
    <div class="col-md-4">
        <div class="panel panel-success-alt noborder">
            <div class="panel-heading noborder">
                <div class="panel-btns">
                    <a href="#" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                </div><!-- panel-btns -->
                <div class="panel-icon"><i class="fa fa-users"></i></div>
                <div class="media-body">
                    <h5 class="md-title nomargin">Total Number Of Patients</h5>
                    <h1 class="mt5">{{$count_patients}}</h1>
                </div><!-- media-body -->
                <hr>
                <div class="clearfix mt20">
                    
                </div>
                
            </div><!-- panel-body -->
        </div><!-- panel -->
    </div><!-- col-md-4 -->
    
    <div class="col-md-4">
        <div class="panel panel-primary noborder">
            <div class="panel-heading noborder">
                <div class="panel-btns">
                    <a href="#" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                </div><!-- panel-btns -->
                <div class="panel-icon"><i class="fa fa-users"></i></div>
                <div class="media-body">
                    <h5 class="md-title nomargin">Total Visits</h5>
                    <h1 class="mt5">{{ $count_visits }}</h1>
                </div><!-- media-body -->
                <hr>
                <div class="clearfix mt20">
                    
                </div>
                
            </div><!-- panel-body -->
        </div><!-- panel -->
    </div><!-- col-md-4 -->
    
    <div class="col-md-4">
        <div class="panel panel-dark noborder">
            <div class="panel-heading noborder">
                <div class="panel-btns">
                    <a href="#" class="panel-close tooltips" data-toggle="tooltip" data-placement="left" title="Close Panel"><i class="fa fa-times"></i></a>
                </div><!-- panel-btns -->
                <div class="panel-icon"><i class="fa fa-pencil"></i></div>
                <div class="media-body">
                    <h5 class="md-title nomargin">Total Appointments</h5>
                    <h1 class="mt5">{{ $count_visits }}</h1>
                </div><!-- media-body -->
                <hr>
                <div class="clearfix mt20">
                    
                </div>
                
            </div><!-- panel-body -->
        </div><!-- panel -->
    </div><!-- col-md-4 -->
</div>
<!-- END OF CARDS -->

<!-- BEGINNING OF GRAPHS-->
<div class="row">
        <div class="col-md-6 mb30">
            <h5 class="lg-title mb10">Bar Chart</h5>
            <p class="mb15">This chart represents the total number of patients registered monthly</p>
            <div id="" class="flotGraph">
            <canvas id="lineChart" class="card"></canvas>
            </div>
        </div><!-- col-md-6 -->
        <div class="col-md-6 mb30">
            <h5 class="lg-title mb10">Pie Chart</h5>
            <p class="mb15">Number of patients according to gender </p>
            <canvas id="pieChart" class="card"></canvas>
        </div><!-- col-md-6 -->
    </div><!-- row -->
</div>
<!-- END OF GRAPHS -->
@endsection
@section('page_js')
<script type="text/javascript" src="{{asset('Admin/mdb/js/mdb.min.js')}}"></script>
<script>
//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July","Aug","Sept","Oct","Nov","Dec"],
datasets: [{
label: "Count of patients per month",
data: {!! $count_patients_per_month !!},
backgroundColor: [
'rgba(105, 0, 132, .2)',
],
borderColor: [
'rgba(200, 99, 132, .7)',
],
borderWidth: 2
},
]
},
options: {
responsive: true
}
});
//pie
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
type: 'pie',
data: {
labels: ["Girls", "Boys"],
datasets: [{
data: [300, 50],
backgroundColor: ["#F7464A", "#46BFBD"],
hoverBackgroundColor: ["#FF5A5E", "#5AD3D1"]
}]
},
options: {
responsive: true
}
});
</script>
@endsection
