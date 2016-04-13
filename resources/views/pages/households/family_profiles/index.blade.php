@extends('layouts.app')

@include('pages.households.residents.add_modal')
@section('main-content')
  <section class="content-header">
          <h1>
            <a href="{{ route('households.household_details.household_detailUI') }}">
                  <span class="fa fa-reply"></span>
              </a> Family Profile
          </h1>      
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
          	<div class="col-md-3">
        		<div class="box">
            		<div class="box-header">
            			  <div class="col-xs-10">   
                      		<h3 class="box-title">Hernaez Family</h3>
                    </div>
            		</div>
               			<div class="box-body">
                       <div class="form-group row">
                             <div class="col-xs-7 col-xs-offset-5">  
                                  <a data-toggle="modal" data-target="#edit-profile" class="btn btn-primary btn-xs">
                                      <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 
                                      Edit
                                  </a>
                                  <a data-toggle="modal" data-target="#delete-profile" class="btn btn-danger btn-xs">
                                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
                                      Delete
                                  </a>
                              
                             </div>
                             @include('pages.households.family_profiles.edit_modal')
                             @include('pages.households.family_profiles.delete_modal')

                        </div>
                 			  <div class="form-group row">
                     				    <label class="col-md-5">Monthly Income</label>
                                <div class="col-md-6">10000</div>
                 		    </div>
                        <div class="form-group row">
                                <label class="col-md-5">Livelihood</label>
                                <div class="col-md-6">Programmer</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Other Livelihood</label>
                                <div class="col-md-6">Cookery</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">4p's Beneficiary</label>
                                <div class="col-md-6">Yes</div>
                        </div>

                 		   
              			</div>
       			 </div>
    		</div>	


            <div class="col-md-9">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">   
                      <h3 class="box-title">List of Residents</h3>
                    </div>
                    <div class="col-xs-0">
                      <a data-toggle="modal" data-target="#add-resident" style="float: right;" class="btn btn-primary btn-sm">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                          Add Resident
                      </a>
                    </div>                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped table-condensed">
                     <thead>
                       <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Gender</th>
                          <th>Birthdate</th>
                          <th>Age</th>
                          <th>Civil Status</th>
                          <th>Relationship to Head</th>
                          <th><center>Edit</center></th>
                          <th><center>Delete</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><a href="{{route('households.resident_profiles.resident_profileUI')}}">Miku Hernaez</a></td>
                        <td>Female</td>
                        <td>1996-1-20</td>
                        <td>20</td>
                        <td>Married</td>
                        <td>Sugar Mommy</td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#edit-resident" >
                                <span class="glyphicon glyphicon-edit text-info" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#delete-resident" >
                                <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                      </tr>                               
                      @include('pages.households.residents.edit_modal')
                      @include('pages.households.residents.delete_modal')
                    </tbody>
                    <tfoot>
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Gender</th>
                          <th>Birthdate</th>
                          <th>Age</th>
                          <th>Civil Status</th>
                          <th>Relationship to Head</th>
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
        $("#example1").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false

        });
      });
    </script>
@endsection