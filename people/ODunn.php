<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: O'Dunn</title>
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
    <h1>O'Dunn</h1>
    <p>Jump to:
    <ul>
      <li><a target="_self" href="/people/ODunn.php#Unknown">[] O'Dowd</a></li>
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
    L.marker([53.19734368382633, -7.395264768246803], {icon: castleIcon}).bindPopup('<strong>Location: Castlebrack</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
  <h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
  <h5><strong>1376</strong> | <a href="">CELT: Annals of the Four Masters 1376.5</a></h5>
  <p>Bebinn, daughter of Donnell O'Dunne, and wife of O'Dempsy, died.</p>
  <h5><strong>1379</strong> | <a href="">CELT: Annals of the Four Masters 1379.5</a></h5>
  <p>David O'Dunne, Chief of Hy-Regan, was slain by the son of Carroll O'Dunne.</p>
  <h5><strong>1381</strong> | <a href="">CELT: Annals of the Four Masters 1381.10</a></h5>
  <p>O'Dunne was slain by the people of Fircall, as he was committing a depredation upon them.</p>
  <h5><strong>1427</strong> | <a href="">CELT: Annals of the Four Masters 1427.2</a></h5>
  <p>Rory O'Dunne, Chief of Hy-Regan, died.</p>
  <h5><strong>1448</strong> | <a href="">CELT: Annals of the Four Masters 1448.9</a></h5>
  <p>Niall O'Molloy was slain by the Hy-Regan O'Dunnes.</p>
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
  <h2 id="Unknown">[] O'Dunn</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument15.php">Instrument 15</a></li>
  </ul>
  <h4>About</h4>
    <p>O'Dunn, lord of Hy-Regan, was an underlord of O'Conor Faly.</p>
  <h4>Location</h4>
  <p><a href="/places/Castlebrack.php">Castlebrack</a></p>
  <h4>Further Reading</h4>
  <p>Caimin O'Brien, site record for LA001-004006-, <i>Archaeological Survey of Ireland</i></p>
<p>L.H. Croasdaile, <a href="http://www.rosenallis.org/history/history_croasdaile.htm">A History of Rosenalis"</a> (1959)</p>
      <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
