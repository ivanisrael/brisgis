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
			       <div class="box-body">
			          <form class="form-horizontal" role="form">
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
				              <div class="col-xs-3">
					              <label for="exampleInputEmail1">If Flooded</label>
					              <select class="form-control" id="ifflooded">
		                                <option>Yes</option>
		                                <option>No</option>
			                      </select>                          
				              </div>
					          <div class="col-xs-2">			              
					              <label for="exampleInputPassword1">When?</label>
					              <input type="text" class="form-control" id="inputLatitude" placeholder="">
					          </div>
				              <div class="col-xs-3">			              
					              <label for="exampleInputPassword1">Estimated Flood Height</label>
					              <input type="text" class="form-control" id="inputLatitude" placeholder="Estimated Flood Height">
				              </div>
				              <div class="col-xs-4">	
				       	   		<label for="exampleInputPassword1">Estimated Height of 1st Floor from Ground</label>
				       	   		<input type="text" class="form-control" id="inputLatitude" placeholder="Estimated Flood Height"> 
				       	   	  </div>
				       	    </div>

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
                      <h3 class="box-title">Household Head Information</h3>
                    </div>                
                </div><!-- /.box-header -->
                <div class="box-body">
                	<form class="form-horizontal" role="form">
			           <div class="col-xs-12 form-group">
			              <div class="col-xs-4">
				              <label for="exampleInputEmail1">First Name</label>
				              <input type="text" class="form-control" id="inputLongitude" placeholder="First Name">
			              </div>
			              <div class="col-xs-4">			              
				              <label for="exampleInputPassword1">Last Name</label>
				              <input type="text" class="form-control" id="inputLatitude" placeholder="Last Name">
			              </div>
			              <div class="col-xs-4">			              
				              <label for="exampleInputPassword1">Middle Name</label>
				              <input type="text" class="form-control" id="inputLatitude" placeholder="Middle Name">
			              </div>
			           </div>

			           <div class="col-xs-12 form-group">
			              <div class="col-xs-3">
				              <label for="exampleInputEmail1">Birthdate</label>
				              <input type="text" class="form-control" id="inputLongitude" placeholder="yy-mm-dd">
			              </div>
			              <div class="col-xs-3">			              
				              <label for="exampleInputPassword1">Gender (Male/Female)</label>
				              <input type="text" class="form-control" id="inputLongitude" placeholder="Gender">
			              </div>
			              <div class="col-xs-3">			              
				              <label for="exampleInputPassword1">Occupation Category</label>
				              <input type="text" class="form-control" id="inputLongitude" placeholder="Occupation Category">
			              </div>
			              <div class="col-xs-3">			              
				              <label for="exampleInputPassword1">Specific Occupation</label>
				              <input type="text" class="form-control" id="inputLongitude" placeholder="Specific Occupation">
			              </div>
			           </div>

			           <div class="col-xs-12 form-group">
			              <div class="col-xs-4">
				              <label for="exampleInputEmail1">Educational Attainment</label>
				              <input type="text" class="form-control" id="inputLongitude" placeholder="Educational Attainment">
			              </div>
			              <div class="col-xs-4">			              
				              <label for="exampleInputPassword1">Contact Number</label>
				              <input type="text" class="form-control" id="inputLongitude" placeholder="Contact Number">
			              </div>
			              <div class="col-xs-2">			              
				              <label for="exampleInputPassword1">Registered Voter?</label>
				              <select class="form-control" id="registere">
	                                <option>Yes</option>
	                                <option>No</option>
		                      </select>
			              </div>
			              <div class="col-xs-2">			              
				              <label for="exampleInputPassword1">Disabled?</label>
				              <select class="form-control" id="Disabled">
	                                <option>Yes</option>
	                                <option>No</option>
		                      </select>
			              </div>
			           </div>
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
                      <h3 class="box-title">Socioeconomic Information</h3>
                    </div>                
                </div><!-- /.box-header -->
                <div class="box-body">
	                 <form class="form-horizontal" role="form">
					        <div class="form-group">
		      					<label class="col-sm-2 control-label">Monthly Income</label>
							      <div class="col-sm-3">
							        <input class="form-control" id="focusedInput" type="text" value="Monthly Income">
							      </div>
		    				</div>
		    				<div class="form-group">
		      					<label class="col-sm-3 control-label">Alternative Sources of Livelihood</label>
								    <div class="col-sm-2">
								        <select class="form-control" id="Alternative">
			                               <option>Yes</option>
			                               <option>No</option>
				                     	</select>
								    </div>
								<label class="col-sm-2 control-label"> if yes, specify </label>
								<div class="col-sm-2">
							        <input class="form-control" id="focusedInput" type="text" value="Please specify...">
							    </div>
		    			  </div>
		    			  <div class="form-group">
		      					<label class="col-sm-3 control-label">4 p's Beneficiary? </label>
								    <div class="col-sm-2">
								        <select class="form-control" id="4p">
			                               <option>Yes</option>
			                               <option>No</option>
				                     	</select>
								    </div>
						  </div>
						  <div class="form-group">        
      							<div class="col-sm-offset-3 col-sm-9">
        							<button type="submit" class="btn btn-primary btn-md pull-right">Submit</button>
      							</div>
    					  </div>

	    			</form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

@endsection