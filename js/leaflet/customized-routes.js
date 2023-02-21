var map = L.map("map").setView([53.76, 27.74], 6);

let activeLng = TranslateGetCode();
googleStreets = L.tileLayer(
  "http://{s}.google.com/vt/lyrs=m" + "&hl=" + activeLng + "&x={x}&y={y}&z={z}",
  {
    maxZoom: 20,
    subdomains: ["mt0", "mt1", "mt2", "mt3"],
  }
);
googleStreets.addTo(map);
L.geoJson(belarusData).addTo(map);

var myIcon = L.icon({
  iconUrl: "images/marker.png",
  iconSize: [25, 25],
});

let select = document.getElementById("select");
let arrayRoute = [];
let marker = [];
let popup = [];
let routingControl = [];
let arrPoints = [];
let routesHtml = document.getElementsByClassName("route1");

window.onload = () => {
  checkRoute();
};

select.onchange = () => {
  checkRoute();
};


let p = document.createElement("p");
function checkRoute() {
  clearRoutes();
  switch (select.value) {
    case "route1":
      arrayRoute = [];
      arrayRoute[0] = [53.445, 26.4729];
      arrayRoute[1] = [53.2164, 26.6916];
      arrayRoute[2] = [54.2449, 26.0204];
      arrayRoute[3] = [53.881, 25.3029];
      arrayRoute[4] = [52.4157, 31.0165];

      routesHtml = document.getElementsByClassName("route1");
      p.innerText =
        "Mir Castle - Nesvizh Castle - Golshany Castle - Lida Castle - Rumyantsev-Paskevich Palace";
      break;
    case "route2":
      arrayRoute = [];
      arrayRoute[0] = [53.915941651688904, 27.537552329735895];
      arrayRoute[1] = [53.93187, 27.691079];
      arrayRoute[2] = [54.060098600195296, 27.73946529152398];
      arrayRoute[3] = [53.59685, 27.685313];
      arrayRoute[4] = [55.20037537760974, 30.190506611637964];

      routesHtml = document.getElementsByClassName("route2");
      p.innerText =
        "Great Patriotic War Museum in Minsk - The museum of Stones in Minsk -The  Museum of the Belarusian Art - Mark Chagall Museum in Vitebsk - Museum complex of ancient crafts and technologies «Dududki»";
      break;
    case "route3": //need edit
      arrayRoute = [];
      arrayRoute[0] = [52.0627, 27.736];
      arrayRoute[1] = [52.111, 28.1542];
      arrayRoute[2] = [52.1102, 26.0833];
      arrayRoute[3] = [52.3145, 25.6145];
      arrayRoute[4] = [52.56986872384893, 23.804028647785778];

      routesHtml = document.getElementsByClassName("route3"); 
      p.innerText =
      "Turov - Lyaskovichi - Pinsk - Motol - Brest - Belovezhskaya Pushcha";

      break;
    case "route4":
      arrayRoute = [];
      arrayRoute[0] = [53.90912310308541, 27.575110599999995];
      arrayRoute[1] = [54.019103709280934, 27.89821386943425];
      arrayRoute[2] = [54.334740705887164, 27.94413212285914];
      arrayRoute[3] = [52.083037109849634, 23.657796007952275];
      arrayRoute[4] = [54.05842224049552, 27.301979579026032];

      routesHtml = document.getElementsByClassName("route4");
      p.innerText =
      "Minsk Victory Square - The Mound of Glory - Khatyn Memorial - Brest Fortress - Stalin Line Complex - Stalin Line Complex";
      break;
    case "route5":
      arrayRoute = [];
      arrayRoute[0] = [54.7484, 28.31277];
      arrayRoute[1] = [55.64532, 27.01683];
      arrayRoute[2] = [52.56945, 23.80303];
      arrayRoute[3] = [54.92577, 26.6918];
      arrayRoute[4] = [52.13942, 26.88925];

      routesHtml = document.getElementsByClassName("route5");
      p.innerText =
      "The Berezinsky Biosphere Reserve – The National Park 'Braslav Lakes' – The National Park Belovezhskaya Pushcha - The National Park 'Narochansky'- The National Park 'Pripyatsky'";
      break;
    case "route6":
      arrayRoute = [];
      arrayRoute[0] = [55.63955, 27.0277];
      arrayRoute[1] = [55.68811, 27.18517];
      arrayRoute[2] = [55.79144, 27.44746];
      arrayRoute[3] = [55.7219, 27.56473];
      arrayRoute[4] = [55.6254, 27.35201];
      arrayRoute[5] = [55.62297, 27.63563];

      routesHtml = document.getElementsByClassName("route6");
      p.innerText =
      "Braslav - Slabodka - Druya - Idolta - Camping Mereya - Miory";
      break;
    default:
      break;
  }

  p.classList.add("route");
  p.classList.add("text");
  select.parentNode.after(p);
  arrPoints = [];
  for (let i = 0; i < arrayRoute.length; i++) {
    arrPoints.push(L.latLng(arrayRoute[i]));
  }
  setRoute();
}

function setRoute() {
  for (let i = 0; i < arrayRoute.length; i++) {
    marker[i] = L.marker(arrayRoute[i], {
      icon: myIcon,
      draggable: false,
    });

    popup[i] = marker[i].bindPopup(routesHtml[i].innerHTML);
    popup[i].addTo(map);
  }

  let control2 = L.Routing.control({
    createMarker: function () {
      return null;
    },
    waypoints: arrPoints,
    fitSelectedRoutes: false,
    draggableWaypoints: false,
    routeWhileDragging: false,
  }).addTo(map);
  routingControl.push(control2);
}

function clearRoutes() {
  for (i = 0; i < marker.length; i++) {
    map.removeLayer(marker[i]);
  }

  for (let i = 0; i < routingControl.length; i++) {
    map.removeControl(routingControl[i]);
  }
  routingControl = [];
}
