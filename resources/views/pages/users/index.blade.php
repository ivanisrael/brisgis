@extends('layouts.app')

@section('htmlheader_title')
	Users
@endsection

@section('main-content')

        <!-- Main content -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <div class="col-md-10">
                  <h3 class="box-title"><strong> List of Users
                             {!! $user or 'No user T.T'  !!} </strong></h3>
                  </div>
                  <div class="col-md-2">
                  <button type="button" class="btn btn-primary">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                  <strong>Add User</strong>
                  </button>
              	  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      	<th>No.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>E-mail</th>
                        <th>Barangay</th>
                        <th>Capability</th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                      </tr>
                    </thead>
                    <tbody>

                    @for ($i = 1; $i <= 10; $i++)
                      <tr>
                      	<td> {{ $i }} </td>
                        <td>Sam Paul {{ $i }}</td>
                        <td>sample{{ $i }}</td>
                        <td>sampaul{{ $i }}@sample.com</td>
                        <td>Hinaplanon</td>
                        <td>Admin</td>
                        <td>
                        	<center>
                        		<button type="button" class="btn btn-link">
                        			<span class="glyphicon glyphicon-edit text-black" aria-hidden="true"></span>
                        		</button>
                        	</center>
                        </td>
                        <td>
                        	<center>
                        		<button type="button" class="btn btn-link">
                        			<span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                        		</button>
                        	</center>
                        </td>
                      </tr>
                     @endfor

                    </tbody>
                    <tfoot>
                      <tr>
                      	<th>No.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>E-mail</th>
                        <th>Barangay</th>
                        <th>Capability</th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

@endsection
