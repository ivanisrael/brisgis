@extends('layouts.app')
<head>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(8.253777778,124.2654444),
    zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("Map"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

@section('main-content')

<section class="content-header">
          <h1>
            Maps
          </h1>      
</section>
<section class="content">
 <div class="row">
               <div class="col-md-4">
                     <div class="box">
                        <div class="box-header">
                        	<div class="col-xs-4">   
                     			 <h3 class="box-title">Map Options</h3>
                  			</div>
                        </div>
                             <div class="box-body">

                                 <div class="form-group row">
                                    <label class="col-md-4 control-label">Province</label>
                                    <div class="col-md-7">
                                        <select class="form-control" id="province1">
                                       			<option>Lanao del Norte</option>
                                        </select>                          
                                    </div>
                                 </div>
                                  <div class="form-group row">
                                    <label class="col-md-4 control-label">Municipality</label>
                                    <div class="col-md-7">
                                       <select class="form-control" id="mun1">
                                           <option>Iligan City</option>
                                        </select>                         
                                    </div>
                                 </div>
                                  <div class="form-group row">
                                    <label class="col-md-4 control-label">Barangay</label>
                                    <div class="col-md-7">
                                        <select class="form-control" id="barangay1">
                                            <option>Hinaplanon</option> 
                                        </select>                        
                                    </div>
                                 </div>
                                 <div class="row">
                                      <div class="col-sm-4 col-sm-offset-8">
                                              <button  onclick="enable()" type="button" class="btn btn-primary" btn-sm>GO</button>
                                      </div>
                                 </div>
                             </div>
                    </div>

                     <div class="box">
                         <div class="box-header">
                        	<div class="col-xs-4">   
                     			 <h3 class="box-title">Flood Maps</h3>
                  			</div>
                         </div>
                             <div class="box-body">                      
                                    <div class="form-group row">
                                      <label class="col-md-4 control-label">Return Period</label>
                                          <div class="col-md-7">
                                              <select class="form-control" id="return1" disabled>
                                                 <option>25</option>
                                              </select>                          
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-4 control-label">Highlight Resident</label>
                                          <div class="col-md-7">
                                              <select class="form-control" id="highlight1" disabled>
                                              		<option>Level 1</option>
                                              </select>                          
                                          </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4">
                                                <button  id="go2" type="button" class="btn btn-primary" btn-sm disabled>GO</button>
                                        </div>
                                 </div>

                            </div>
                     </div>
            

                </div>

                <div class="col-md-8">
                     <div class="box">
                         <div class="box-header">
                        	<div class="col-xs-4">   
                     			 <h3 class="box-title">Map</h3>
                  			</div>
                         </div>
                             <div class="panel-body">                      
                                 <div id="Map"  style="width:100%;height:85%;"></div>
                                    
                            </div>
                     </div>
                </div>                
         </div>
   </section>

           <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Households</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>purok_id</th>
                        <th>name</th>
                        <th>year constructed</th>
                        <th>net_value</th>
                        <th>household_usage</th>
                        <th>structure</th>
                        <th>area</th>
                        <th>longitude</th>
                        <th>latitude</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Ariel_Household</td>
                        <td>1990-12-12</td>
                        <td>100000</td>
                        <td>Residential</td>
                        <td>wood_masonry</td>
                        <td>40</td>
                        <td>124.2654444</td>
                        <td>8.253777778</td>
                      </tr>

                    </tbody>
                    <tfoot>
                      <tr>
                        <th>id</th>
                        <th>purok_id</th>
                        <th>name</th>
                        <th>year constructed</th>
                        <th>net_value</th>
                        <th>household_usage</th>
                        <th>structure</th>
                        <th>area</th>
                        <th>longitude</th>
                        <th>latitude</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </div>
      </section>

@endsection