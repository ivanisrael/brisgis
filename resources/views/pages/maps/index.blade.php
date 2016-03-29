@extends('layouts.app')
<head>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

@section('main-content')
<div class="row">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">Map Options</div>
                <div class="panel-body">
                	<select>
                	  <option>-- Province --</option>
					  <option>Lanao del Norte</option>
					  <option>Lanao del Sur</option>	  
					</select>
					<br></br>
                	<select>
                	  <option value="municipal">-- Municipal/City --</option>
					  <option value="iligan">Iligan Citeeeeeey</option>
					  <option value="cagayan">Cagayan De Oro City</option>
					  <option value="manila">Manila City</option>
					  <option value="dapitan">Dapitan City</option>
					</select>
					<br></br>
             
					<select>
					  <option value="municipal">-- Barangay --</option>
					  <option value="luinab">Luinab</option>
					  <option value="san_miguel">San Miguel</option>
					  <option value="Hinaplanon">Hinaplanon</option>
					  <option value="santiago">Santiago</option>
					</select>


					<br></br>
      				<button onclick="toggleHeatmap()">Toggle Heatmap</button>
      				<br></br>
      				<button onclick="toggleBoundary()">Toggle Boundary</button>
      				<br></br>
      				<button onclick="toggleFloodHazard()">Toggle Flood Hazard</button>

      				<br></br>
                	<select>
                	  <option value="returnrate">-- Return Rate --</option>
					  <option value="iligan">25 years</option>
					  <option value="cagayan">50 years</option>
					  <option value="cagayan">100 years</option>	  	  
					</select>
					<br></br>


      				<br></br>
    			</div>
        </div>
    </div>

     <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                <div id="googleMap" style="width:100%;height:85%;"></div>
            </div>
        </div>
    </div>
</div>


@endsection
