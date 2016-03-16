@extends('layouts.app')

@section('htmlheader_title')
	Users
@endsection

@section('main-content')


      <div class="col-lg-12">
          <h1 class="page-header">
              List of Users
          <a href="{{route('users.create')}}" class="btn btn-primary" role="button" style="float: right;">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
              Add User
          </a>
          </h1>
      </div>
 
<!-- Table Content -->
  <div class="row">
      <div class="col-lg-12">
          <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
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

                @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>$$$Temp$$$</td>
                    <td>{{$user->capability}}</td>
                    <td>
                      <center>
                        <button type="button" class="btn btn-link">
                          <span class="glyphicon glyphicon-edit text-black" aria-hidden="true"></span>
                        </button>
                      </center>
                    </td>
                    <td>
                      <center>
                        <a href="#" data-toggle="modal" data-target="#{{$user->id}}delete-user" >
                          <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                        </a>
                      </center>
                    </td>
                  </tr>

                  @include('pages.users.delete_modal')

                @endforeach

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
          </div>
      </div>
  </div>
  <!-- /.row -->

@endsection