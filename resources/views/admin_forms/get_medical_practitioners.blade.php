@extends('admin_layouts.main')
@section('page_css')
<link href="{{asset('css/select2.css')}}" rel="stylesheet" />
<link href="{{asset('css/style.datatables.css')}}" rel="stylesheet">
<link href="{{asset('cdn.datatables.net/responsive/1.0.1/css/dataTables.responsive.css')}}" rel="stylesheet">
@endsection
@section('main_content')
@include('admin_layouts.datatables')
<div class="modal fade" id="MPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="panel-heading col-md-10 panel">
                    <h5 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h5>
                </div><!-- panel-heading --> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 panel">
                    <form method="get" action ="/create-medicalPractitioners">
                <div class="form-group" >
                    <label class="col-sm-4 control-label">Name:<span class="asterisk">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" title="Field is required!" />
                    </div>
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="col-sm-4 control-label">Password:<span class="asterisk">*</span></label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" title="Field is required!"/>
                    </div>
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="col-sm-4 control-label">Role:</label>
                    <div class="col-sm-8">
                    <select name="role" class="form-control" required>
                        <option value="">Select role</option>
                            @foreach($users as $role)
                            <option value="{{$role}}">{{$role}}</option>
                            @endforeach
                        </select>
                    </div>
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="col-sm-4 control-label">Email:<span class="asterisk">*</span></label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" title="Field is required!" required/>
                    </div>
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="col-sm-4 control-label">Contact:<span class="asterisk">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="phone_No" class="form-control" title="Field is required!" required/>
                    </div>
                </div><!-- form-group -->

                   
            
                        
                    </div>
                </div><!-- tab-pane -->
            </div>
            <div class="modal-footer">
                <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-primary mr5">Submit</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                            </div>
                        </div>
                    </div><!-- panel-footer -->
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('page_js')

@endsection