@extends('layouts.app')

@include('pages.provinces.municipalities.add_modal')

@section('main-content')
  <section class="content-header">
          <h1>
              <a href="{{ route('provinces.indexUI') }}">
                  <span class="fa fa-reply"></span>
              </a> Lanao Del Norte
          </h1>          
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">   
                      <h3 class="box-title">List of Municipalities</h3>
                    </div>
                    <div class="col-xs-0">
                      <a data-toggle="modal" data-target="#add-municipality" class="btn btn-primary btn-sm pull-right">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                          Add Municipalities
                      </a>
                    </div>
                      
                   
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                       <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th><center>Edit</center></th>
                          <th><center>Delete</center></th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Iligan City</td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#edit-municipality" >
                                <span class="glyphicon glyphicon-edit text-info" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#delete-municipality" >
                                <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                      </tr> 

                      @include('pages.provinces.municipalities.delete_modal') 
                      @include('pages.provinces.municipalities.edit_modal')  

                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
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