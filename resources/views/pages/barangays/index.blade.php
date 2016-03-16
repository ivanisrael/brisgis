@extends('layouts.app')

@section('htmlheader_title')
	Barangays
@endsection

@include('pages.barangays.add_modal')

@section('main-content')
      <!-- Content Header -->
      <div class="col-lg-12">
          <h1 class="page-header">
              List of Barangays
          <a data-toggle="modal" data-target="#add-barangay" style="float: right;" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
              Add Barangay
          </a>
          </h1>
      </div>
      <!-- End Content Header -->

      <!-- Content Header -->
      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>No. of Purok</th>
                  <th>Total Area</th>
                  <th><center>Delete</center></th>
                </tr>
              </thead>
              <tbody>

              @foreach($barangays as $barangay)
                <tr>
                  <td>{{$barangay->id}}</td>
                  <td><a href="{{route('barangays.show', $barangay->id)}}"> {{$barangay->name}} </a></td>
                  <td>$$ 14 $$</td>
                  <td>{{$barangay->area}}</td>
                  <td>
                  	<center>
                      <a href="#" data-toggle="modal" data-target="#{{$barangay->id}}delete-barangay" >
                  			<span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                  		</a>
                  	</center>
                  </td>
                </tr>

              @include('pages.barangays.delete_modal')

               @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>No. of Purok</th>
                  <th>Total Area</th>
                  <th><center>Delete</center></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <!-- Content Header -->

@endsection
