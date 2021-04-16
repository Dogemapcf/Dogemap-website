

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

    L.tileLayer('http://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 20,
        tileSize: 512,
        zoomOffset: -1,
        
    }).addTo(dogemap);



dogemap.locate({setView: true, maxZoom: 16});

var umark;

function onLocationFound(e) {
    var radius = e.accuracy;
    if(umark == null){
    umark = L.marker(e.latlng,{
        icon: youicon
    }).addTo(dogemap)
        .bindPopup("You are within " + radius + " meters from this point look around you might find some place that accept dogecoin near you.");
        dogemap.addLayer(umark);
}else{
    dogemap.addLayer(umark);
}

   

}

dogemap.on('locationfound', onLocationFound);



function developer(){
    console.log("developer: @bluethefoxyt on twitter");
}

//markers for all your hell

$.get( "api/",{ function: "listalllocations"}, function( data ) {

    
    var obj = JSON.parse(data);
    if(obj == null) return console.log("Obj is null check serverside API code");
    obj.forEach(el => {
        document.getElementById("loader").style.display = "block";


        switch(el.name){
            //CEX lol marker
            case "CEX":
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
            break;
            //Csoftware marker
            case "Csoftware":

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

            break;
            
            //the default location marker.
            default:
            switch(el.description){
                case "ATM":
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
                break;
            default:
    markers.addLayer(L.marker([el.lat, el.long],el.name).bindPopup(`
    <p>ID: ${el.ID}</p>
    <p>Name: ${el.name}</p>
    <p>Address: ${el.address}</p>
    <a class="n-o" href="http://${el.website}">Click here to access their website</a>
    <p>Description: ${el.description}</p>
    <a href="report?id=${el.ID}">REPORT AS BEING FAKE</a>
    `));
    break;
            }
            break;
        }







});
document.getElementById("loader").style.display = "none";
});


dogemap.addLayer(markers);
var follow = false;
function locate() {
    if(follow == true){
    dogemap.removeLayer(umark);
    dogemap.locate({setView: true, maxZoom: 16});
    }
  }

  // call locate every 3 seconds... forever
  setInterval(locate, 5000);

//L.marker([51.505, -0.09],{title: "example"}).addTo(dogemap).bindPopup("Im a weird thing."); Example for devs.



var button = new L.Control.Button('follow');
button.addTo(dogemap);
button.on('click', function () {
    switch(follow){
        case true:
        follow = false;
        break;
        case false:
        follow = true;
        break;
    }
});