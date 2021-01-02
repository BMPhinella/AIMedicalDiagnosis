
@if(request()->route()->getName() == 'Patients Details')
<div class="panel ">

@include('admin_layouts.message')
    <div class="panel-heading">
        <h4 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h4>
        <div class="card-body text-right">
            <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#patientModal">
                Add Patient
            </button>
        </div>
    </div><!-- panel-heading -->
    </br>
    <div class="info-box">
        <div class="table-responsive">
            <table id="basicPatientsTable" class="table table-striped table-bordered responsive dataTable no-footer" data-name="cool-table">
                 
                <thead >
                    <tr>
                        <th>No</th>
                        <th>Name (s)</th>
                        <th>Age </th>
                        <th>Gender</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                @foreach($patients as $id=>$patient) 
                    <tr>
                        <td>{{ $id +1}}</td>
                        <td>{{$patient->first_name}} {{$patient->last_name}} {{$patient->other_name}}</td>   
                        <td>{{$patient->age}}</td> 
                        <td>{{$patient->gender}}</td>
                        <td>{{$patient->phone_number}}</td>
                        <td>{{$patient->address}}</td>
                        <td>
                        @can('change_patient')
                        <a href="/get-edit-patients-form/{{$patient->id}}">Edit</a>
                        @endcan
                        @can('delete_patient')
                        <a class="text-danger pl-4" href="/delete-patient/{{$patient->id}}">Delete </a>
                        @endcan
                       
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div> 
            </div> 
           
    </div> 
    @endif 





@if(request()->route()->getName() == 'Appointments Details')
<div class="panel-heading">
    <h4 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h4>
    <div class="card-body text-right">
        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#appointmentModal">
            Add Appointment
        </button>
    </div>
</div><!-- panel-heading -->
        
        <table id="basicTable1" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Patient </th>
                    <th>Medical Practitioner</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($appointments as $id=>$appointments)
                <tr>
                    <td>{{ $id +1}}</td>
                    <td>{{$appointments->patient_id}}</td>   
                    <td>{{$appointments->medical_practitioner_id}}</td>  
                    <td>{{$appointments->appointment_date}}</td>  
                    <td>{{$appointments->appointment_time}}</td>   
                    <td>{{$appointments->status}}</td> 
                    <td>
                    @can('delete_appointments')
                    <a class="text-danger" href="/delete-appointments/{{$appointments->id}}">Delete</a>
                    @endcan
                    @can('change_appointmets')
                    <a href="/get-edit-appointments-form/{{$appointments->id}}">Edit</a>
                    @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endif 




@if(request()->route()->getName() == 'Visits Details')
<div class="panel-heading">
    <h4 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h4>
    <div class="card-body text-right">
        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#visitModal">
            Add Visit
        </button>
    </div>
</div><!-- panel-heading -->
        
        <table id="VisitsTable" class="table table-striped table-bordered">
            <thead class="">
                <tr>
                    <th>No</th>    
                    <th>Patient </th>
                    <th>Visit Date</th>
                    <th>Next visit </th>
                    <th>Visit Category</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            @foreach($visits as $id=>$visits)
                <tr>
                    <td>{{ $id +1}}</td>
                    <td>{{$visits->patient_name}}</td>   
                    <td>{{$visits->visit_date}}</td>
                    <td>{{$visits->next_visit}}</td>   
                    <td>{{$visits->visit_category}}</td> 
                    <td>
                    @can('delete_visits')
                    <a class="text-danger" href="/delete-visits/{{$visits->id}}">Delete </a>
                    @endcan
                    @can('change_visits')
                    <a href="/get-edit-visits-form/{{$visits->id}}">Edit</a>
                    @endcan
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    @endif 




    @if(request()->route()->getName() == 'Medical Practitioners Details')
<div class="panel-heading">
    <h4 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h4>
    <div class="card-body text-right">
        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#MPModal">
            Add Medical Practitioner
        </button>
    </div>
</div><!-- panel-heading -->
        
        <table id="MPractioners" class="table table-striped table-bordered">
            <thead class="">
                <tr>
                    <th>No</th>    
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
            @foreach($users as $id=>$users)
                <tr>
                    <td>{{ $id +1}}</td>
                    <td>{{$users->name}}</td>  
                    <td>{{$users->email}}</td>
                    
                </tr>
                @endforeach 
            </tbody>
        </table>
    @endif 





 
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="cdn.datatables.net/plug-ins/725b2a2115b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
        <script src="cdn.datatables.net/responsive/1.0.1/js/dataTables.responsive.js"></script>
        <script src="{{asset('js/select2.min.js')}}"></script>

        <script src="{{asset('js/custom.js')}}"></script>


     

        <script>
             
             jQuery(document).ready(function(){

                $.noConflict();
                var columns = [0,1,2,3,4,5];
                var table = $("#basicPatientsTable");
                //table.dataTable();
                var title = "List of registered patients";
                smartTable(table, title, columns);

            
             
                var columns1 = [0,1,2,3,4,5];
                var table1 = $("#basicTable1");
                var title1 = "List of registered appointments";
                smartTable(table1, title1, columns1);

                
           
                var columns2 = [0,1,2,3,4];
                var table2  = $("#VisitsTable");
                var title2 = "List of registered visits";
                smartTable(table2, title2, columns2);

                
              
                var columns3 = [0,1,2,3,4,5];
                var table3 = $("#MPractioners");
                var title3 = "List of registered medical practitioners";
                smartTable(table3, title3, columns3);
                

                jQuery('#basicTable').DataTable({
                    responsive: true
                });
                
                var shTable = jQuery('#shTable').DataTable({
                    "fnDrawCallback": function(oSettings) {
                        jQuery('#shTable_paginate ul').addClass('pagination-active-dark');
                    },
                    responsive: true
                });
                
                // Show/Hide Columns Dropdown
                jQuery('#shCol').click(function(event){
                    event.stopPropagation();
                });
                
                jQuery('#shCol input').on('click', function() {

                    // Get the column API object
                    var column = shTable.column($(this).val());
 
                    // Toggle the visibility
                    if ($(this).is(':checked'))
                        column.visible(true);
                    else
                        column.visible(false);
                });
                
                var exRowTable = jQuery('#exRowTable').DataTable({
                    responsive: true,
                    "fnDrawCallback": function(oSettings) {
                        jQuery('#exRowTable_paginate ul').addClass('pagination-active-success');
                    },
                    "ajax": "ajax/objects.txt",
                    "columns": [
                        {
                            "class":          'details-control',
                            "orderable":      false,
                            "data":           null,
                            "defaultContent": ''
                        },
                        { "data": "name" },
                        { "data": "position" },
                        { "data": "office" },
                        { "data": "salary" }
                    ],
                    "order": [[1, 'asc']] 
                });
                
                // Add event listener for opening and closing details
                jQuery('#exRowTable tbody').on('click', 'td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = exRowTable.row( tr );
             
                    if ( row.child.isShown() ) {
                        // This row is already open - close it
                        row.child.hide();
                        tr.removeClass('shown');
                    }
                    else {
                        // Open this row
                        row.child( format(row.data()) ).show();
                        tr.addClass('shown');
                    }
                });
               
                
                // DataTables Length to Select2
                jQuery('div.dataTables_length select').removeClass('form-control input-sm');
                jQuery('div.dataTables_length select').css({width: '60px'});
                jQuery('div.dataTables_length select').select2({
                    minimumResultsForSearch: -1
                });
    
            });
            
            function format (d) {
                // `d` is the original data object for the row
                return '<table class="table table-bordered nomargin">'+
                    '<tr>'+
                        '<td>Full name:</td>'+
                        '<td>'+d.name+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Extension number:</td>'+
                        '<td>'+d.extn+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Extra info:</td>'+
                        '<td>And any further details here (images etc)...</td>'+
                    '</tr>'+
                '</table>';
            }
        </script>


