@extends('layouts.app')

@section('htmlheader_title')
	Users
@endsection

@section('main-content')

              <!-- About Me Box -->
          <div class="col-md-12">
            <div class="col-md-3">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Iligan City</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <p><strong><i class="fa fa-map-marker margin-r-5"></i> Information</strong></p>
                  <p class="text-muted"><strong>Region: </strong> X</p>
                  <p class="text-muted"><strong>Province: </strong>Lanao del Norte</p>
                  <p class="text-muted"><strong>Zip Code: </strong>9200</p>                

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

        <div class="col-md-9">       
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <div class="col-md-9">
                  <h3 class="box-title"><strong> List of Baragnay </strong></h3>
                  </div>
                  <div class="col-md-3">
                  <button type="button" class="btn btn-primary">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                  <strong>Add Barangay</strong>
                  </button>
                  </div>                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
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

                    @for ($i = 1; $i <= 5; $i++)
                      <tr>
                        <td>{{ $i }}</td>
                        <td><a href="#">Barangay {{ $i }}</a></td>
                        <td>14</td>
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
                        <th>No. of Purok</th>
                        <th>Total Area</th>
                        <th><center>Delete</center></th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div>
      </div>
@endsection
