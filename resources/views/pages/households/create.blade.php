@extends('layouts.app')

@section('main-content')


      <section class="content-header">
          <h1>
             Household Information
          </h1>      
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
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
			          	<label for="exampleInputEmail1">Geographical Information</label>
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
			              <div class="col-xs-4">
			              <label for="exampleInputEmail1">Household Identifier</label>
			              <input type="text" class="form-control" id="inputLongitude" placeholder="Household Identifier">
			              </div>
			              <div class="col-xs-4">			              
			              <label for="exampleInputPassword1">Year Constructed</label>
			              <input type="text" class="form-control" id="inputLatitude" placeholder="Year Constructed">
			              </div>
			              <div class="col-xs-4">			              
			              <label for="exampleInputPassword1">Net Value</label>
			              <input type="text" class="form-control" id="inputLatitude" placeholder="Net Value">
			              </div>
			            </div>

			            <div class="col-xs-12 form-group">
			              <div class="col-xs-4">
			              <label for="exampleInputEmail1">Usage</label>
			              <input type="text" class="form-control" id="inputLongitude" placeholder="Usage">
			              </div>
			              <div class="col-xs-4">			              
			              <label for="exampleInputPassword1">Structure</label>
			              <input type="text" class="form-control" id="inputLatitude" placeholder="Structure">
			              </div>
			              <div class="col-xs-4">			              
			              <label for="exampleInputPassword1">Estimated Area (sq.m)</label>
			              <input type="text" class="form-control" id="inputLatitude" placeholder="Estimated Area">
			              </div>
			       		</div>

			            <div class="col-xs-12 form-group">
			              <div class="col-xs-6">
			              <label for="exampleInputEmail1">Number of Storeys</label>
			              <input type="text" class="form-control" id="inputLongitude" placeholder="Number of Storeys">
			              </div>
			              <div class="col-xs-6">			              
			              <label for="exampleInputPassword1">Type of Holding</label>
			              <input type="text" class="form-control" id="inputLatitude" placeholder="Type of Holding">
			              </div>
			            </div>


			            <div class="col-xs-12 form-group">
			              <div class="col-xs-4">
			              <label for="exampleInputEmail1">If Flooded</label>
			              <select class="form-control" id="ifflooded">
                                <option>Yes</option>
                                <option>No</option>
	                      </select>                          
			              </div>
			              <div class="col-xs-4">			              
			              <label for="exampleInputPassword1">When?</label>
			              <input type="text" class="form-control" id="inputLatitude" placeholder="">
			              </div>
			              <div class="col-xs-4">			              
			              <label for="exampleInputPassword1">Estimated Flood Height</label>
			              <input type="text" class="form-control" id="inputLatitude" placeholder="Estimated Flood Height">
			              </div>
			       		</div>
			       		<div class="col-xs-12 form-group row">
			       			<div class="col-xs-12">
				       			<div class="col-xs-4 col-xs-off-set-2">
					       		  	<label for="exampleInputPassword1">Estimated Height of 1st Floor from Ground</label>
					       		</div>
		                       	<div class="col-xs-6">
		                       		<div class="col-xs-4">	                     
		                          		<input type="text" class="form-control" id="inputLatitude" placeholder="Height Estimated">
		                          	</div>
			                   	</div>
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