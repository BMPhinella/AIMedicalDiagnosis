@extends('admin_layouts.main')
@section('page_css')
<link href="{{asset('css/style.default.css" rel="stylesheet')}}">
<link href="{{asset('css/jquery.tagsinput.css" rel="stylesheet')}}" />
<link href="{{asset('css/toggles.css" rel="stylesheet')}}" />
<link href="{{asset('css/bootstrap-timepicker.min.css" rel="stylesheet')}}" />
<link href="{{asset('css/select2.css" rel="stylesheet')}}" />
<link href="{{asset('css/colorpicker.css" rel="stylesheet')}}" />
<link href="{{asset('css/dropzone.css" rel="stylesheet')}}" />
@endsection
@section('main_content')

@include('admin_layouts.message')
<div class="panel-heading col-md-10 panel">
    <h5 style="text-align: center; color:black;" class="panel-title">PATIENT PROGNOSIS</h5>
</div><!-- panel-heading -->    
                        
<div class="row">
    <div class="col-md-10 panel">
        <div class="card">
        <!-- BASIC WIZARD -->

                <table style="width:100%; font-size:16px; color:black; ">
                    <tr>
                        <td style="padding: 15px;text-align: left; size:30px;">Patient</td>
                        <td style="padding: 15px;text-align: left; size:30px;">{{$patient->name}}</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;text-align: left;">Age</td>
                        <td style="padding: 15px;text-align: left;">{{$patient->age}}</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;text-align: left;">Diagnosis</td>
                        <td style="padding: 15px;text-align: left;">{{$diagnosis}}</td>
                    </tr>

                </table>
                <footer>
                    <div>
                        <h5 class="col-sm-4 control-label" style=" color: blue">THANK YOU FOR USING DR.JEBT</h5>
                    </div>
                </footer>    
        </div> 
    </div> 
</div><!-- tab-pane -->
@endsection

@section('page_js')

<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui-1.10.3.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('vendors/bootstrap3-typeahead.min.js') }}"></script>
<script src="{{asset('js/modernizr.min.js')}}"></script>
<script src="{{asset('js/pace.min.js')}}"></script>
<script src="{{asset('js/retina.min.js')}}"></script>
<script src="{{asset('js/jquery.cookies.js')}}"></script>

<script src="{{asset('js/jquery.autogrow-textarea.js')}}"></script>
<script src="{{asset('js/jquery.mousewheel.js')}}"></script>
<script src="{{asset('js/jquery.tagsinput.min.js')}}"></script>
<script src="{{asset('js/toggles.min.js')}}"></script>
<script src="{{asset('js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('js/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/colorpicker.js')}}"></script>
<script src="{{asset('js/dropzone.min.js')}}"></script>

<script src="{{asset('js/custom.js')}}"></script>
<script>
    $(document).ready(function() {

        $("#patientName").typeahead({
            source:function(query,result){
                $.ajax({
                url:"{{ Route('patient.search') }}",
                method:'get',
                data:{
                    query:query,
                },
                dataType:'json',
                success: function(data){
                    result($.map(data, function(item){
                    return item;
                    }));
                },
                error:function(data){
                    console.log('am not getting anything');
                },
                });
            }
            });
        

        // Tags Input
        jQuery('#tags').tagsInput({width:'auto'});
            
        // Textarea Autogrow
        jQuery('#autoResizeTA').autogrow();
        
        // Spinner
        var spinner = jQuery('#spinner').spinner();
        spinner.spinner('value', 0);
        
        // Form Toggles
        jQuery('.toggle').toggles({on: true});
   
</script>
@endsection














