@extends('layouts.app')
<head>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(8.253777778,124.2654444),
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("map"),mapProp);
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
               <div class="col-md-3">
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
                                           <option>Lanao del norte</option> 
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
                                      <div class="col-sm-4 col-sm-offset-8">
                                          <button  onclick="enable()" type="button" class="btn btn-primary btn-sm>">GO</button>
                                      </div>
                                       
                             </div>
                    </div>

                     <div class="box">
                             <div class="box-body">                      
                                    <div class="form-group row">
                                      <label class="col-md-3 control-label">Toggle</label>
                                          <div class="btn-group">
                                            <button onclick="toggleHeatmap()" type="button" class="btn btn-primary btn-xs" disabled>Heatmap</button>
                                            <button onclick="toggleBoundary()" type="button" class="btn btn-primary btn-xs" disabled>Boundary</button>
                                          </div>   
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-4 control-label">Structure</label>
                                          <div class="col-md-7">
                                              <select class="form-control" id="structure1" disabled>
                                                  <option>wood_masonry</option>  
                                              </select> 
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-4 control-label">Usage</label>
                                          <div class="col-md-7">
                                              <select class="form-control" id="usage1" disabled>
                                                 <option>Residential</option>
                                              </select> 
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-4 control-label">Family Income</label>
                                          <div class="col-md-7">
                                              <select class="form-control" id="family1" disabled>
                                                  <option>20000</option>
                                              </select> 
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-4 control-label">Education Level</label>
                                          <div class="col-md-7">
                                              <select class="form-control" id="education1" disabled>
                                              <option>HighSchool</option>
                                              <option>College</option>    
                                              </select> 
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-4 control-label">Occupation</label>
                                          <div class="col-md-7">
                                              <select class="form-control" id="occupation1" disabled>
                                              <option>Teacher</option>
                                              <option>Engineer</option>    
                                              </select> 
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-4 control-label">Gender</label>
                                          <div class="col-md-7">
                                              <select class="form-control" id="gender1" disabled>
                                              <option>Male</option>
                                              <option>Female</option>    
                                              </select> 
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-4 control-label">Age</label>
                                          <div class="col-md-7">
                                              <select class="form-control" id="age1" disabled>
                                              <option>27</option>
                                              <option>28</option>    
                                              </select> 
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-4 control-label">Civil Status</label>
                                          <div class="col-md-7">
                                              <select class="form-control" id="civil1" disabled>
                                              <option>Single</option>
                                              <option>Married</option>    
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

                <div class="col-md-9">
                     <div class="box">
                         <div class="box-header">
                            <div class="col-xs-4">   
                                <h3 class="box-title">Map</h3>
                            </div>
                        </div>
                             <div class="map-body">                      
                                 <div id="map"  style="width:100%;height:110%;"></div>
                                    
                            </div>
                     </div>
                </div>                
         </div>
</section>

@endsection
