@extends('layouts.app')

@section('main-content')
<!-- Page Content -->
<div class="row">
	<div class="col-lg-12">

    <!-- Title -->
        <h1>Barangay {{$barangay->name}}
		    <button type="submit" href="#" data-toggle="modal" data-target="#delete-book" style="float: right; margin-left: 5px; margin-bottom: 10px;" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash "></i> Delete</button>
			<button type="submit" href="#" data-toggle="modal" data-target="#edit-book" style="float: right; margin-bottom: 10px;" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit "></i> Edit</button>
		</h1>			
        <hr>

        <!-- Date/Time -->
        <p><span class="glyphicon glyphicon-time"></span> Some Information</p>

        <hr>

        <!-- Blog Search Well -->
        <div class="well">
            <h3>List of Purok
	            <a href="{{route('barangays.create')}}" class="btn btn-primary" role="button" style="float: right;">
	            	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
	              		Add Purok
	          	</a>
          	</h3>
          	<hr>
	        <div class="row">
	            <div class="col-lg-12">
	                <div class="table-responsive">
	                  <table class="table table-bordered table-hover table-striped">
	                    <thead>
	                      <tr>
	                        <th>No</th>
	                        <th>Name</th>
	                        <th>Purok</th>
	                        <th>Year Constructed</th>
	                        <th>Usage</th>
	                        <th>Total Area</th>
	                        <th><center>Delete</center></th>
	                      </tr>
	                    </thead>
	                    <tbody>

	                    @for ($i = 1; $i <= 5; $i++)
	                      <tr>
	                        <td>{{ $i }}</td>
	                        <td><a href="#">Household {{ $i }}</a></td>
	                        <td>Gumamela</td>
	                        <td>1/13/1995</td>
	                        <td>Residential</td>
	                        <td>{{ $i }}23 m^2</td>
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
	                        <th>Purok</th>
	                        <th>Year Constructed</th>
	                        <th>Usage</th>
	                        <th>Total Area</th>
	                        <th><center>Delete</center></th>
	                      </tr>
	                    </tfoot>
	                  </table>
	                </div>
	            </div>
	        </div>
        </div>  
	</div>
</div>
<!-- /.row -->
@endsection