

var icon = L.Icon.extend({
    options: {
        shadowUrl: '/assets/img/shadow.png',
        shadowSize:   [50, 64],
        iconSize:     [25, 41],
        iconAnchor:   [12, 40],
    }
});
var youicon = new icon({iconUrl: '/assets/img/you.png'});
var atm = new icon({iconUrl: '/assets/img/atm.png'});
var markers = L.markerClusterGroup();
var dogemap = L.map('dogemap');
if(getCookie("burntbiscuit") == "L"){
L.tileLayer('http://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    maxZoom: 20,
    tileSize: 512,
    zoomOffset: -1,
    
}).addTo(dogemap);
}else if(getCookie("burntbiscuit") == "D"){
    L.tileLayer('http://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 20,
        tileSize: 512,
        zoomOffset: -1,
        
    }).addTo(dogemap);
}


dogemap.locate({setView: true, maxZoom: 16});


function onLocationFound(e) {
    var radius = e.accuracy;

    markers.addLayer(L.marker(e.latlng,{
        icon: youicon
    }).addTo(dogemap)
        .bindPopup("You are within " + radius + " meters from this point look around you might find some place that accept dogecoin near you."));

   

}

dogemap.on('locationfound', onLocationFound);



function developer(){
    console.log("-----------------------------------");
    console.log("-----------------------------------");
        console.log("-----------------------------------");
        console.log("-----------------------------------");
        console.log("-----------------------------------");
        console.log("-----------------------------------");
        console.log("-----------------------------------");
        console.log("-----------------------------------");
        console.log("-----------------------------------");
        console.log("-----------------------------------");
    
    console.log("developer: @bluethefoxyt on twitter");
}

//markers for all your hell

$.get( "api/",{ function: "listalllocations"}, function( data ) {

    
    var obj = JSON.parse(data);
    if(obj == null) return console.log("Obj is null check serverside API code");
    obj.forEach(el => {
        document.getElementById("loader").style.display = "block";
        if(el.name == "CEX"){
markers.addLayer(L.marker([el.lat, el.long],el.name).bindPopup(`
<img src="https://uk.webuy.com/images/logos/CeX_Logo_Rich_black_CMYK-01.png" width="30px" />
<p style="color: lime;">VERIFIED</p>
<p>ID: ${el.ID}</p>
<p>Name: ${el.name}</p>
<p>Address: ${el.address}</p>
<a class="n-o dogetext" href="http://${el.website}">Click here to access their website</a>
<p>Description: ${el.description}</p>
<a href="report?id=${el.ID}">REPORT AS BEING FAKE</a>
`));

}else if(el.name == "Csoftware"){

    markers.addLayer(L.marker([el.lat, el.long],el.name).bindPopup(`
<img src="https://csoftware.cf/assets/img/logo.png" width="30px" />
<p style="color: lime;">VERIFIED</p>
<p>ID: ${el.ID}</p>
<p>Name: ${el.name}</p>
<p>Address: ${el.address}</p>
<a class="n-o dogetext" href="http://${el.website}">Click here to access their website</a>
<p>Description: ${el.description}</p>
<a href="report?id=${el.ID}">REPORT AS BEING FAKE</a>
`));

}else if(el.description.includes("ATM")){

    markers.addLayer(L.marker([el.lat, el.long],{icon:atm},el.name).bindPopup(`
<img src="/assets/img/atm.png" width="30px" />
<p>A crypto ATM is a place where you can buy and sell dogecoin or other cryptocurrency's with a public machine.</p>
<p>ID: ${el.ID}</p>
<p>Name: ${el.name}</p>
<p>Address: ${el.address}</p>
<a class="n-o dogetext" href="http://${el.website}">Click here to access their website</a>
<p>Description: ${el.description}</p>
<a href="report?id=${el.ID}">REPORT AS BEING FAKE</a>
`));

}else{
    markers.addLayer(L.marker([el.lat, el.long],el.name).bindPopup(`
    <p>ID: ${el.ID}</p>
    <p>Name: ${el.name}</p>
    <p>Address: ${el.address}</p>
    <a class="n-o" href="http://${el.website}">Click here to access their website</a>
    <p>Description: ${el.description}</p>
    <a href="report?id=${el.ID}">REPORT AS BEING FAKE</a>
    `));
}
});
document.getElementById("loader").style.display = "none";
});


dogemap.addLayer(markers);
var follow = false;
function locate() {
    if(follow == true){
    dogemap.locate({setView: true, maxZoom: 16});
    }
  }

  // call locate every 3 seconds... forever
  setInterval(locate, 3000);

//L.marker([51.505, -0.09],{title: "example"}).addTo(dogemap).bindPopup("Im a weird thing."); Example for devs.