@extends('layouts.main')

@section('content')
<div class="container-fluid">
	
	<h3> Map </h3>
<div id="map" style="width: 2000px;height: 1000px;"></div>
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1SFOGwCUZWnB89IbEk1iKrsfbxtG9KWs&callback=initMap&language=en"
type="text/javascript"></script>
<script>
	
 function initMap() {
		var array=new Array();
 		var jArray = <?php echo json_encode($addressArray); ?>;
    	for(var i=0; i<jArray.length; i++){
    		array.push(jArray[i]);
    	}
    	var arrayTitle=new Array();
 		jArray = <?php echo json_encode($titleArray); ?>;
    	for(var i=0; i<jArray.length; i++){
    		arrayTitle.push(jArray[i]);
    	}

    	var arrayDate=new Array();
 		jArray = <?php echo json_encode($dateArray); ?>;
		for(var i=0; i<jArray.length; i++){
    		arrayDate.push(jArray[i]);
    	}

    	
 		var map = new google.maps.Map(document.getElementById("map"),{
 			center: {lat: -34.397, lng: 150.644},
 			zoom: 8
 			});
			//parse address
			var geocoder = new google.maps.Geocoder();
			var bounds = map.getBounds();
			var baseIcon = "/images/www2/icons/map_track_marker.png"
			function createMarker(point, index, address) {
				
				var marker = new google.maps.Marker({
					map: map,
					position: point
				});	

				var infowindow = new google.maps.InfoWindow({content: address +' Event Title:'+arrayTitle[index]+ ' Start Date:'+arrayDate[index] }); 
				infowindow.open(map, marker); 
				google.maps.event.addListener(marker, "click", function(){
    				infowindow.open(map,marker);
				});


				return marker;
			}
			function GetPoint(address,index){
			
				codeAddress(address,index);
			}
			function codeAddress(address,index) {
				geocoder.geocode( { 'address' : address }, function( results, status ) {
					if( status == google.maps.GeocoderStatus.OK ) {
            				
            			map.setCenter( results[0].geometry.location );
            			
            			marker=createMarker(results[0].geometry.location, index, address);
            			createMarker(results[0].geometry.location, index, address).setMap(map);
            			marker.setMap(map);

            			//console.log('testing'+address+'location'+results[0].geometry.location);
            			if(map==null){
            				//console.log('testing'+marker);}
            			}} else {
            				alert( 'Geocode was not successful for the following reason: ' + status );
            			}
            		});
			}


			for(var s=0;s<array.length;s++){
				GetPoint(array[s],s);
			}

		}
		
	</script>
	@stop
