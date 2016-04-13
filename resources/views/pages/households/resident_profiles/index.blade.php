@extends('layouts.app')

@include('pages.households.health_infos.add_modal')

@section('main-content')
  <section class="content-header">
          <h1>
            <a href="{{route('households.family_profiles.family_profileUI')}}">
                  <span class="fa fa-reply"></span>
              </a> Resident Profile
          </h1>      
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
          	<div class="col-md-6">
        		<div class="box">
                    <div class="box-header">
                        <div class="col-xs-10">   
                              <h3 class="box-title">Miku's Profile</h3>
                        </div>
                    </div>
               			<div class="box-body">
                       <div class="form-group row">
                             <div class="col-xs-6 col-xs-offset-6"> 
                                  <a data-toggle="modal" data-target="#edit-resprofile" class="btn btn-primary btn-xs">
                                      <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 
                                      Edit
                                  </a>
                                  <a data-toggle="modal" data-target="#delete-resprofile" class="btn btn-danger btn-xs">
                                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
                                      Delete
                                  </a>
                             </div>
                            @include('pages.households.resident_profiles.edit_modal')
                            @include('pages.households.resident_profiles.delete_modal')

                        </div>
                 			        <div class="form-group row">
                                <label class="col-md-6">ID:</label>
                                <div class="col-md-6">1</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">Last Name:</label>
                                <div class="col-md-6">Hernaez</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">First Name:</label>
                                <div class="col-md-6">Miku</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">Middle Name:</label>
                                <div class="col-md-6">Masanting</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">Birthdate:</label>
                                <div class="col-md-6">1996-1-20</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">Age:</label>
                                <div class="col-md-6">20</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">Civil Status:</label>
                                <div class="col-md-6">Married</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">Relationship to Head:</label>
                                <div class="col-md-6">Sugar Mommy</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">Education</label>
                                <div class="col-md-6">Ph.D</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">Occupation Category:</label>
                                <div class="col-md-6">Programmer</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">Specific Occupation:</label>
                                <div class="col-md-6">Permanent</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">Voter:</label>
                                <div class="col-md-6">Yes</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-6">Disabled:</label>
                                <div class="col-md-6">No</div>
                        </div>  

                 		   
              			</div>
       			 </div>
    		</div>	


            <div class="col-xs-6">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-6">   
                      <h3 class="box-title">Health Information</h3>
                    </div>
                    <div class="col-xs-0">
                      <a data-toggle="modal" data-target="#add-health" style="float: right;" class="btn btn-primary btn-sm">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                          Add 
                      </a>
                    </div>                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                       <tr>
                          <th>ID</th>
                          <th>Diseases</th>
                          <th>Year</th>
                          <th><center>Edit</center></th>
                          <th><center>Delete</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dengue</td>
                        <td>2004</td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#edit-health" >
                                <span class="glyphicon glyphicon-edit text-info" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#delete-health" >
                                <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                      </tr>                               
                    @include ('pages.households.health_infos.edit_modal')
                    @include ('pages.households.health_infos.delete_modal')
                    <tfoot>
                      <tr>
                          <th>ID</th>
                          <th>Diseases</th>
                          <th>Year</th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                      </tr>
                   </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@endsection

@section('page-script')
    <!-- DataTables -->
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
@endsection