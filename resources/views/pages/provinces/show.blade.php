@extends('layouts.app')

@section('main-content')
<!-- Page Content -->
<div class="row">

	<div class="col-lg-6">
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h2>
	          {{$province->name}}
	      <a href="{{route('users.create')}}" class="btn btn-primary" role="button" style="float: right;">
	        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
	          Add Municipality
	      </a>
	      </h2>
	    </div>
	    <div class="panel-body">
	      <div class="table-responsive">
	        <table class="table table-bordered tablse-hover table-striped">
	          <thead>
	            <tr>
	              <th>No</th>
	              <th>Name</th>
	              <th>Edit</th>
	              <th><center>Delete</center></th>
	            </tr>
	          </thead>
	          <tbody>

	          @for ($i = 1; $i <= 5; $i++)
	            <tr>
	              <td>{{ $i }}</td>
	              <td>Municipality {{ $i }}</td>
	              <td>
	                <center>
	                  <a href="#" data-toggle="modal" data-target="#">
	                    <span class="glyphicon glyphicon-edit text-black" aria-hidden="true"></span>
	                  </a>
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
	              <th>No</th>
	              <th>Name</th>
	              <th>Edit</th>
	              <th><center>Delete</center></th>
	            </tr>
	          </tfoot>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>

</div>
<!-- /.row -->
@endsection