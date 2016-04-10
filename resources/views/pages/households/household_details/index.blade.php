@extends('layouts.app')

@include('pages.households.household_details.families.add_modal')

@section('main-content')
  <section class="content-header">
          <h1>
            Household Details
          </h1>      
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
          	<div class="col-md-3">
        		<div class="box">
            		<div class="box-header">
            			<div class="col-xs-3">   
                      		<h3 class="box-title">Household Info</h3>
                        </div>
            		</div>
               			<div class="box-body">
                 			 <div class="form-group row">
                   				 <label class="col-md-4 control-label">Province</label>
                   				 <br>
                       				<div class="col-md-12">
	                      				  <select class="form-control" id="barangay1" style"">
                                     <option >Province</option>
                                     <option disabled>────────────────────</option>
	                           				 <option>Lanao del Norte</option>
	                           			 </select>                          
                        			</div>
                 		     </div>
                 		     <div class="form-group row">
                     			 <label class="col-md-4 control-label">Municipality</label>
                     			 <br>
                        			<div class="col-md-12">
                           				 <select class="form-control" id="municipality1">
                                     <option>Municipality</option>
                                     <option disabled>────────────────────</option>
				                             <option>Iligan City</option>
                           				 </select>                          
                        			</div>
                  			 </div>
                  			 <div class="col-md-0">
                     			 <a data-toggle="modal" data-target="" class="btn btn-primary btn-sm pull-right">
                        	     <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 
                          			Show
                     			 </a>
                   			 </div>
              			</div>
       			 </div>
    		</div>	


            <div class="col-xs-9">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">   
                      <h3 class="box-title">List of Families</h3>
                    </div>
                    <div class="col-xs-0">
                      <a data-toggle="modal" data-target="#add-detail" style="float: right;" class="btn btn-primary btn-sm">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                          Add Family
                      </a>
                    </div>                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                       <tr>
                          <th>ID</th>
                          <th>Family Identifier</th>
                          <th>Monthly Income</th>
                          <th>4ps</th>
                          <th><center>Edit</center></th>
                          <th><center>Delete</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><a href="#">Hernaez Family</a></td>
                        <td>20000s</td>
                        <td>4ps</td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#edit-detail" >
                                <span class="glyphicon glyphicon-edit text-info" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#delete-detail" >
                                <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                      </tr>                               
                    @include('pages.households.household_details.families.delete_modal')
                    @include('pages.households.household_details.families.edit_modal')
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Family Identifier</th>
                        <th>Monthly Income</th>
                        <th>4ps</th>
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