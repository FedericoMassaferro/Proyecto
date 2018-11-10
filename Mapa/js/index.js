var data = [
    {
      name: 'Wingu',
      latLng: [-34.591754, -58.437289],
      id: '2342fc7'
    },
    {
      name: 'Fundacion SI',
      latLng: [-34.580334, -58.436037],
      id: 'djf3892'
    },
    {
      name: 'Karen',
      latLng: [41.011, 28.986],
      id: '2837hf3'
    }
];
var map = L.map('map', {
  center: [[40.775,-73.972]],
  scrollWheelZoom: false,
  inertia: true,
  inertiaDeceleration: 2000
});
map.setView([40.775,-73.972], 15);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://mapbox.com">Mapbox</a>',
    maxZoom: 15,
    id: 'superpikar.n28afi10',
    accessToken: 'pk.eyJ1Ijoic3VwZXJwaWthciIsImEiOiI0MGE3NGQ2OWNkMzkyMzFlMzE4OWU5Yjk0ZmYzMGMwOCJ9.3bGFHjoSXB8yVA3KeQoOIw'
}).addTo(map);

$('#locate-position').on('click', function(){
  map.locate({setView: true, maxZoom: 15});
});

function onLocationFound(e) {
    var radius = e.accuracy / 2;
    L.marker(e.latlng).addTo(map)
        .on('click', function(){
          confirm("are you sure?");
        });
        //.bindPopup("You are within " + radius + " meters from this point").openPopup();
    L.circle(e.latlng, radius).addTo(map);
}

map.on('locationfound', onLocationFound);

function onLocationError(e) {
    alert(e.message);
}
map.on('locationerror', onLocationError);
var markers = {};

// Loop through the data
for (var i = 0; i < data.length; i++) {
  var person = data[i];

  // Create and save a reference to each marker
  markers[person.id] = L.marker(person.latLng, {
    //icon: ...,
    //draggable: ...,
    title: person.name,
    alt: person.id,
    //zIndexOffset:	0,
    //opacity: 1,
    riseOnHover: true
    //riseOffset: 250
  }).addTo(map);
}


// Add click event to markers to demo the use of ID hack
$('.leaflet-marker-icon').on('click', function(e) {
   // Use the event to find the clicked element
   var el = $(e.srcElement || e.target),
       id = el.attr('alt');

    alert('Here is the markers ID: ' + id + '. Use it as you wish. Hit ok and watch the map.');

    // One way you could use the id
    map.panTo( markers[id].getLatLng() );
});



// Add click event to button to go the other way
$('.container button').on('click', function(e) {
  // I hardcoded this but you could obviously fetch your id dynamically
  var id = '2837hf3',
      marker = markers[id],
      latLng = marker.getLatLng();

  // Do something cool with that marker or it's coordinates
  map.panTo(latLng);
});
