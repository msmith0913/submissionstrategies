<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Mowbray</title>
  <link rel="stylesheet" href="https://submissionstrategies.com/css/r2.css">
  <link rel="stylesheet" href="https://submissionstrategies.com/css/r2.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <link rel="stylesheet" href="https://submissionstrategies.com/css/L.Control.Layers.Tree.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OverlappingMarkerSpiderfier-Leaflet/0.2.6/oms.min.js"></script>
  <style>
    #map {
      position: relative;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      width: 300px;
      height: 300px;
    }
    .column {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
  </style>
</head>
<body>
  <header>
    <?php include "../header.html" ?>
</header>
    <h1>Mowbray</h1>
    <p>Jump to:
    <ul>
      <li><a target="_self" href="/people/Mowbray.php#ThomasMowbray">Thomas Mowbray</a></li>
  <div style="margin: auto; align: center;" id = "map"></div>
  <script>
    var map = L.map('map', {
      center: [54.20419420887825, -4.557068809702086],
      zoom: 5
    });

    L.tileLayer('https://api.maptiler.com/maps/topo/{z}/{x}/{y}.png?key=4CI3hvSGGwgJXODif6KH', {attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
    }).addTo(map);
    var castleIcon = L.icon({
      iconUrl: 'https://submissionstrategies.com/media/castleicon.png',
      iconSize: [],
      popupAnchor: [-3, -76],
    });
    var churchIcon = L.icon({
      iconUrl: 'https://submissionstrategies.com/media/churchicon.png',
      iconSize: [17, 17],
      popupAnchor: [-3, -76],
    });
    L.marker([53.52635679996112, -0.8166546393819635], {icon: castleIcon}).bindPopup('<strong>Location: Epworth Castle</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
  <h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
</div>
<script>
function sourceexpand() {
var x = document.getElementById("source");
if (x.style.display === "none") {
  x.style.display = "block";
} else {
  x.style.display = "none";
}
}
</script>
  <hr>
  <h2 id="RichardMedford">Richard Medford, Bishop of Chichester</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument1.php">Instrument 1</a></li>
    <li><a href="/instruments/Instrument2.php">Instrument 2</a></li>
    <li><a href="/instruments/Instrument8.php">Instrument 8</a></li>
    <li><a href="/instruments/Instrument9.php">Instrument 9</a></li>
    <li><a href="/instruments/Instrument10.php">Instrument 10</a></li>
    <li><a href="/instruments/Instrument15.php">Instrument 15</a></li>
    <li><a href="/instruments/Instrument17.php">Instrument 17</a></li>
    <li><a href="/instruments/Instrument18.php">Instrument 18</a></li>
    <li><a href="/instruments/Instrument33.php">Instrument 33</a></li>
    <li><a href="/instruments/Instrument37.php">Instrument 37</a></li>
    <li><a href="/instruments/Instrument38.php">Instrument 38</a></li>
  </ul>
  <h4>About</h4>
    <p>Thomas Mowbray, first Duke of Norfolk, started out his career as a close confidante of Richard II. Despite their relationship souring (as many of Richard's relationships did), Mowbray remained active in the court.</p>
  <h4>Location</h4>
  <p><a href="/places/EpworthCastle.php">Epworth Castle</a></p>
  <h4>Further Reading</h4>
  <p>C. Given-Wilson, "Mowbray, Thomas, first duke of Norfolk" in <i>Oxford Dictionary of National Biography</i>.</p>
      <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
