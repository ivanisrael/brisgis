@extends('layouts.app')

@include('pages.households.household_details.families.add_modal')
<!-- @include('pages.households.household_details.delete_modal') -->

@section('main-content')
  <section class="content-header">
          <h1>
            Household Details
          </h1>      
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
          	<div class="col-md-4">
        		<div class="box">
            		<div class="box-header">
            			  <div class="col-xs-10">   
                      		<h3 class="box-title">Household Information:</h3>
                    </div>
            		</div>
               			<div class="box-body">
                       <div class="form-group row">
                             <div class="col-xs-10 col-xs-offset-2">  
                                  <div class="btn-group">
                                       <a data-toggle="modal" data-target="#edit-detail" class="btn btn-primary btn-sm">
                                          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 
                                          Edit
                                       </a>
                                       <a data-toggle="modal" data-target="#delete-detail" class="btn btn-danger btn-sm">
                                          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
                                          Delete
                                       </a>
                                       <a data-toggle="modal" data-target="#map-detail" class="btn btn-success btn-sm">
                                          <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 
                                          Map
                                       </a>
                                  </div> 
                             </div>    
                        </div>
                 			  <div class="form-group row">
                     				    <label class="col-md-5">Household Name:</label>
                                <div class="col-md-6"><u>Hernaez Family</u></div>
                 		    </div>
                        <div class="form-group row">
                                <label class="col-md-5">Year Constructed:</label>
                                <div class="col-md-6"><u>1990-12-12</u></div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Usage:</label>
                                <div class="col-md-6"><u>Residential</u></div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Net Value:</label>
                                <div class="col-md-6"><u>10000</u></div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Structure:</label>
                                <div class="col-md-6"><u>wood</u></div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Area:</label>
                                <div class="col-md-6"><u>40</u></div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">No. of Stories:</label>
                                <div class="col-md-6"><u>0</u></div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Holding:</label>
                                <div class="col-md-6"><u>owned</u></div>
                        </div>
                        <div class="box-header">
                            <div class="col-xs-8">   
                               <h3 class="box-title">Flood Information:</h3>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Flooded:</label>
                                <div class="col-md-6"><u>Yes</u></div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Date Flooded:</label>
                                <div class="col-md-6"><u>2011-12-12</u></div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Flood Height:</label>
                                <div class="col-md-6"><u>8 ft.</u></div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Building Height:</label>
                                <div class="col-md-6"><u>200m</u></div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Date Entry:</label>
                                <div class="col-md-6"><u>2007-12-12</u></div>
                        </div>
                        <div class="box-header">
                            <div class="col-xs-10">   
                               <h3 class="box-title">Household Head Info:</h3>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Name:</label>
                                <div class="col-md-6"><u>Ivan</u></div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-5">Contact Number:</label>
                                <div class="col-md-6"><u>09313131345</u></div>
                        </div>
                 		   
              			</div>
       			 </div>
    		</div>	


            <div class="col-xs-8">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">   
                      <h3 class="box-title">List of Families</h3>
                    </div>
                    <div class="col-xs-0">
                      <a data-toggle="modal" data-target="#add-family" style="float: right;" class="btn btn-primary btn-sm">
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
                              <a href="#" data-toggle="modal" data-target="#edit-family" >
                                <span class="glyphicon glyphicon-edit text-info" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#delete-family" >
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