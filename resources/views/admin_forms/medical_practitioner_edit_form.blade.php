@extends('admin_layouts.main')
@section('page_css')
@endsection
@section('main_content')
@include('admin_layouts.message')
<div class="panel-heading col-md-10">
    <h5 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h5>
</div><!-- panel-heading -->    

<div class="row">
    <div class="col-md-10 panel">
        <div class="card">
            <form method="get" action ="/create-medicalPractitioners">
                <div class="form-group" >
                @foreach($users as $users)
                    <label class="col-sm-4 control-label">Name:<span class="asterisk">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="name" value="{{$users->name}}" class="form-control" title="Field is required!" />
                    </div>
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="col-sm-4 control-label">Password:<span class="asterisk">*</span></label>
                    <div class="col-sm-8">
                        <input type="password" value="{{$users->password}}" name="password" class="form-control" title="Field is required!"/>
                    </div>
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="col-sm-4 control-label">Role:</label>
                    <div class="col-sm-8">
                        <select name="role" class="form-control" value="{{$users->role}}" required>
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
                        <input type="email" name="email" class="form-control" title="Field is required!" value="{{$users->email}}" required/>
                    </div>
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="col-sm-4 control-label">Contact:<span class="asterisk">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="phone_No" class="form-control" title="Field is required!" value="{{$users->phone_No}}" required/>
                    </div>
                </div><!-- form-group -->
                @endforeach
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary mr5">Submit</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>
                    </div>
                </div><!-- panel-footer -->         
            </form> 
        </div> 
    </div>
</div>
@endsection
@section('page_js')
@endsection