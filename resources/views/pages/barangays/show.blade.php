@extends('layouts.app')

@include('pages.barangays.puroks.add_modal')
@include('pages.barangays.edit_modal')
@include('pages.barangays.delete_modal')

@section('main-content')
  <section class="content-header">
          <h1>
              <a href="{{ route('barangays.indexUI') }}">
                  <span class="fa fa-reply"></span>
              </a> Barangay
          </h1>       
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
          	<div class="col-md-4">
            		<div class="box">
                		<div class="box-header">
                  			<div class="col-xs-9">   
                            <h3 class="box-title">Hinaplanon</h3>
                        </div>
                        <div class="col-xs-3">
                            <h3 class="box-title">ID: 1</h3>
                        </div>
                		 </div>

                     <div class="box-body">
                        <div class="form-group row">
                          <div class="col-md-2 col-md-offset-6">
                              <a data-toggle="modal" data-target="#edit-barangay" class="btn btn-primary btn-xs ">
                                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 
                                  Edit
                              </a>
                          </div>                   
                          <div class="col-md-1" style="margin-left: 2px;">
                              <a data-toggle="modal" data-target="#delete-barangay" class="btn btn-danger btn-xs ">
                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
                                  Delete
                              </a>
                          </div>
                        </div>
                     </div>
                   	 <div class="box-body">
                     			 <div class="form-group row">
                       				 <label class="col-md-3 control-label">Province</label>
                           			<div class="col-md-9">
                                      <input type="text" class="form-control" name="name" value="Lanao del Norte" required disabled>
                                </div>

                     		     </div>

                     		     <div class="form-group row">
                         			 <label class="col-md-3 control-label">Municipality</label>                            		
                               		<div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="Iligan City" required disabled>
                                  </div>                         			
                      			 </div>
                  		</div>


                      <div class="box-body">
                           <div class="form-group row">
                               <label class="col-md-5 control-label">Flood Hazards</label>
                                <div class="col-md-7">
                                     <a href="#" class="btn btn-primary btn-sm">
                                          <span class="glyphicon glyphicon-open"></span>
                                          Import File
                                    </a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7 col-md-offset-5">
                                      <a href="#" class="btn btn-primary btn-sm">
                                          <span class="glyphicon glyphicon-saved"></span>
                                          Submit
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                               <label class="col-md-5 control-label">Flood Hazards</label>
                                <div class="col-md-7">
                                     <a href="#" class="btn btn-primary btn-sm">
                                          <span class="glyphicon glyphicon-open"></span>
                                          Import File
                                    </a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7 col-md-offset-5">
                                      <a href="#" class="btn btn-primary btn-sm">
                                          <span class="glyphicon glyphicon-saved"></span>
                                          Submit
                                    </a>
                                </div>
                            </div>                        
                      </div>

           			 </div>
    		    </div>	

            <!--Flood Maps-->
            <div class="col-xs-8">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">   
                      <h3 class="box-title">Flood Maps</h3>
                    </div>                     
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                     <thead>
                       <tr>
                          <th>ID</th>
                          <th>Level</th>
                          <th><center>Return Period</center></th>
                          <th><center>Delete</center></th>
                          <th><center>Preview</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>1</td>
                        <td><center>25</center></td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#delete-flood" >
                                <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#preview-flood" >
                                <span class="glyphicon glyphicon-map-marker text-success" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                      </tr>                               
                    @include('pages.barangays.floodmaps.delete_modal')
                    @include('pages.barangays.floodmaps.preview_modal')
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Level</th>
                        <th><center>Return Period</center></th>
                        <th><center>Delete</center></th>
                        <th><center>Preview</center></th>
                      </tr>
                   </tfoot>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-body">
                  <div class="form-group row">
                           <label class="col-md-3 col-md-offset-4 control-label">View by Return Period:</label>
                              <div class="col-md-2">
                                   <select class="form-control" id="">
                                     <option>25</option>
                                   </select>                          
                              </div>
                              <div class="col-md-3">
                                      <a href="#" class="btn btn-primary btn-sm">
                                          <span class="glyphicon glyphicon-eye-open"></span>
                                          Submit
                                    </a>
                              </div>
                         </div>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!--Purok-->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">   
                      <h3 class="box-title">Purok</h3>
                    </div>
                    <div class="col-xs-0">
                      <a data-toggle="modal" data-target="#add-purok" class="btn btn-primary btn-sm pull-right">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                          Add Purok
                      </a>
                    </div>                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                       <tr>
                          <th>ID</th>
                          <th>Purok</th>
                          <th>Description</th>
                          <th>President</th>
                          <th>Population</th>
                          <th><center>Edit</center></th>
                          <th><center>Delete</center></th>
                          <th><center>Preview</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>1A</td>
                        <td>Safest purok</td>
                        <td>Duterte</td>
                        <td>100000</td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#edit-purok" >
                                <span class="glyphicon glyphicon-edit text-info" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#delete-purok" >
                                <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#preview-purok" >
                                <span class="glyphicon glyphicon-map-marker text-success" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                      </tr>
                     @include('pages.barangays.puroks.preview_modal')
                     @include('pages.barangays.puroks.delete_modal')
                     @include('pages.barangays.puroks.edit_modal')
                    <tfoot>
                      <tr>
                        <th>ID</th>
                          <th>Purok</th>
                          <th>Description</th>
                          <th>President</th>
                          <th>Population</th>
                          <th><center>Edit</center></th>
                          <th><center>Delete</center></th>
                          <th><center>Preview</center></th>
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
        $('#example2').DataTable();
      });
    </script>
@endsection