jQuery(function($) {
  // Asynchronously Load the map API
  var script = document.createElement('script');
  script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
  document.body.appendChild(script);
});

// function initialize() {
//   jQuery.getJSON("http://livinglifewithgutz.dev/article-json", function(data)

//   {
//     console.log(data)
//     var data_length = data.length;

//     var map;
//     var bounds = new google.maps.LatLngBounds();
//     var mapOptions = {
//       mapTypeId: 'roadmap',
//       disableDefaultUI: true,
//       panControl: false,
//       zoomControl: false,
//       scaleControl: false
//     };

//     //map Style

//     var styles = [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}];

//     // Display a map on the page
//     map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
//     map.setTilt(45);

//     // Multiple Markers
//     var markers = [];
//     var infoWindowContent = [];

//     for(var x=0;x<data_length;x++){
//       var img_src = data[x].field_image;
//       var category = data[x].category;
//       markers.push([category, data[x].field_latitude, data[x].field_longtitude]);
//       infoWindowContent.push(['<div class="info_content"><center><img src="'+field_image+'"></center><h5>'+data[x].title.toUpperCase()+'</h5><p class="address"><b>'+data[x].address.toUpperCase()+'</b></p><p>'+data[x].body+'</p><p class="readmore"><a href="'+data[x].view_node+'">read more</a></p></div>']);
//     }

//     // Display multiple markers on a map
//     var infoWindow = new google.maps.InfoWindow(), marker, i;

//     // Loop through our array of markers & place each one on the map
//     var category_img = "http://livinglifewithgutz.dev/sites/default/files/pin.png";
//     for( i = 0; i < markers.length; i++ ) {
//     	var pin = markers[i][0];
//         var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
//         bounds.extend(position);
//         marker = new google.maps.Marker({
//             position: position,
//             map: map,
//             title: markers[i][0],
//             icon: category_img
//         });

//         // Allow each marker to have an info window
//         google.maps.event.addListener(marker, 'click', (function(marker, i) {
//             return function() {
//                 infoWindow.setContent(infoWindowContent[i][0]);
//                 infoWindow.open(map, marker);
//             }
//         })(marker, i));

//         // Automatically center the map fitting all markers on the screen
//         map.fitBounds(bounds);
//     }

//     // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
//     var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
//         this.setZoom(7);
//         google.maps.event.removeListener(boundsListener);
//     });

//   });
// }