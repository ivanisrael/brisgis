@extends('layouts.app')

@section('main-content')


      <section class="content-header">
          <h1>
             Barangay Hinaplanon 
          </h1>      
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="col-xs-6 row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-6">   
                      <h3 class="box-title">Household Information</h3>
                    </div>                
                </div><!-- /.box-header -->
			        <!-- form start -->
			        <form role="form">
			          <div class="box-body">
			            <div class="col-xs-12 form-group">
			              <div class="col-xs-6">
			              <label for="exampleInputEmail1">Longitude</label>
			              <input type="text" class="form-control" id="inputLongitude" placeholder="Longitude">
			              </div>
			              <div class="col-xs-6">			              
			              <label for="exampleInputPassword1">Latitude</label>
			              <input type="text" class="form-control" id="inputLatitude" placeholder="Latitude">
			              </div>
			            </div>
			            <div class="col-xs-12 form-group">
			              <div class="col-md-6">
			              <label for="exampleInputEmail1">Longitude</label>
			              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Longitude">
			              </div>
			              <div class="col-md-6">			              
			              <label for="exampleInputPassword1">Latitude</label>
			              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Latitude">
			              </div>
			            </div>
			          </div><!-- /.box-body -->

			        </form>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">   
                      <h3 class="box-title">List of Households</h3>
                    </div>                
                </div><!-- /.box-header -->
                <div class="box-body">
			        <!-- form start -->
			        <form role="form">
			          <div class="box-body">
			            <div class="form-group">
			              <label for="exampleInputEmail1">Email address</label>
			              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
			            </div>
			            <div class="form-group">
			              <label for="exampleInputPassword1">Password</label>
			              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			            </div>
			          </div><!-- /.box-body -->

			        </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->


          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">   
                      <h3 class="box-title">List of Households</h3>
                    </div>                
                </div><!-- /.box-header -->
                <div class="box-body">
			        <!-- form start -->
			        <form role="form">
			          <div class="box-body">
			            <div class="form-group">
			              <label for="exampleInputEmail1">Email address</label>
			              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
			            </div>
			            <div class="form-group">
			              <label for="exampleInputPassword1">Password</label>
			              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			            </div>
			          </div><!-- /.box-body -->

			          <div class="box-footer">
			            <button type="submit" class="btn btn-primary pull-right">Submit</button>
			          </div>
			        </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

@endsection