import "https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js";


mapboxgl.accessToken = 'pk.eyJ1IjoiYmFwdS16IiwiYSI6ImNrZWptZmdoZDB2eGcyeW5wbjZ2eXk4bzYifQ.Rouq_LxVNDJLyEQ0-hr6Zw';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  zoom: 1.5,
  center: [0, 20],

});

var layerList = document.getElementById('menu');
var inputs = layerList.getElementsByTagName('input');
 
function switchLayer(layer) {
var layerId = layer.target.id;
map.setStyle('mapbox://styles/mapbox/' + layerId);
}
 
for (var i = 0; i < inputs.length; i++) {
inputs[i].onclick = switchLayer;
}

/*fetch("/data.json")
  .then(response => response.json())
  .then(data => {
    const { places, reports } = data;

    reports
      .filter(report => !report.hide)
      .foreach(report => {
        const { infected, placeId } = report;
        const currentPlace = places.find(place => place.id === placeId);
        console.log(infected, currentPlace);
      })
  });
*/
/*fetch('databas.json')
        .then(response => response.json())
        .then(datastar => {console.log(datastar.data)
          // Do something with your da)

        });*/
// As with JSON, use the Fetch API & ES6
fetch('data2.json')
  .then(response => response.json())
  .then(og => {
    console.log(og.data)
    og.data.forEach(element => {

      var ogname = element.name;
      var long = element.longitude;
      var lat = element.latitude;


      fetch('databas.json')
        .then(response => response.json())
        .then(datastar => {
          // Do something with your data
          datastar.data.forEach(element2 => {
            if (element2.name == ogname) {
              if (element2.confirmed >= 5000000)
                var cooler = "rgb(0,0,0)";
              else if (element2.confirmed >= 1000000 && element2.confirmed <= 5000000)
                var cooler = "rgb(255,0,0)";
              else if (element2.confirmed >= 300000 && element2.confirmed <= 1000000)
                var cooler = "rgb(255,140,0)";
              else if (element2.confirmed >= 50000 && element2.confirmed <= 300000)
                var cooler = "rgb(255,255,0)";
              else if(element2.confirmed >=10000 && element2.confirmed <= 50000)
              var cooler = "rgb(0,255,0)";
              else 
              var cooler = "rgb(211,211,211)";
              new mapboxgl.Marker({
                draggable: false,
                color: cooler,
              }).setLngLat([long, lat])
                .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
                .setHTML('<h3>' + ogname + '</h3>'+'<h4>' + "Confirmed" + '</h4>'+'<h4>' + element2.confirmed + '</h4>'+ '<h5>'+ "Recovered" + '</h5>'+ '<h5>'+ element2.recovered + '</h5>'+'<h6>'+ "Deaths" + '</h6>'+'<h6>'+ element2.deaths + '</h6>'))
                .addTo(map);

                

            }

          })

        });

    })
  });





const mapbox_token = "pk.eyJ1IjoiYmFwdS16IiwiYSI6ImNrZWptZmdoZDB2eGcyeW5wbjZ2eXk4bzYifQ.Rouq_LxVNDJLyEQ0-hr6Zw";


