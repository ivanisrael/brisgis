@extends('layouts.app')

@include('pages.households.add_modal')

@section('main-content')
  <section class="content-header">
          <h1>
             Barangay Hinaplanon 
          </h1>      
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">   
                      <h3 class="box-title">List of Households</h3>
                    </div>
                    <div class="col-xs-0">
                      <a class="btn btn-primary btn-sm pull-right" href="{{route('households.createUI')}}"> 
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                          Add Household
                      </a>
                    </div>                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                       <tr>
                          <th>ID</th>
                          <th>Household Name</th>
                          <th>usage</th>
                          <th>Structure</th>
                          <th>Area</th>
                          <th>Purok Name</th>
                          <th><center>Edit</center></th>
                          <th><center>Delete</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><a href="{{route('households.household_details.household_detailUI')}}">Hernaez Family</a></td>
                        <td>Residential</td>
                        <td>wood</td>
                        <td>40</td>
                        <td>1A</td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#edit-household" >
                                <span class="glyphicon glyphicon-edit text-info" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#delete-household" >
                                <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                      </tr>                               
                      @include('pages.households.delete_modal')
                      @include('pages.households.edit_modal')
                    </tbody>
                    <tfoot>
                      <tr>
                         <th>ID</th>
                          <th>Household Name</th>
                          <th>usage</th>
                          <th>Structure</th>
                          <th>Area</th>
                          <th>Purok Name</th>
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
            "ordering": true,
            "info": true,
            "autoWidth": false
          });
      });
    </script>
@endsection