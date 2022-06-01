<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Drayton</title>
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
    <h1>Drayton</h1>
    <div class="row">
      <div class="column">
  <p>Jump to:
  <ul>
    <li><a href="/people/Drayton.php#JohnDrayton">Sir John Drayton</a></li>
    <li><a href="/people/Drayton.php#WilliamDrayton">Sir William Drayton</a></li></ul></p>
  <h4>Futher reading on the Arundel family</h4>
  <p>J.W. Sherborne, "Indentured Retinues and English Expeditions to France, 1369-1380," <i>English Historical Review</i> 79, no. 313 (1964): 718-746.</p>
</div>
<div class="column">
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
    L.marker([51.683181629926416, -1.2127198637672658], {icon: castleIcon}).bindPopup('<strong>Location: Nuneham Manor</strong>').addTo(map);
    L.marker([52.12027053565773, -0.49714784138783447], {icon: castleIcon}).bindPopup('<strong>Location: Kempston Brucebury Manor</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
<h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><a href="https://babel.hathitrust.org/cgi/pt?id=mdp.39015009337612&view=1up&seq=3&skin=2021"><i>Calendar of Patent Rolls</i>, Richard II Vol. 2, 1381-1385</a></h5>
<ul>
  <li>p. 9 (28 June 1385)</li>
</ul>
<h5><a href="https://babel.hathitrust.org/cgi/pt?id=mdp.39015009141402&view=1up&seq=5&skin=2021"><i>Calendar of Patent Rolls</i>, Richard II Vol. 3, 1385-1389</a></h5>
<ul>
  <li>pp. 279-80 (2 February 1387)</li>
  <li>pp. 339-40 (18 July 1387)</li>
</ul>
<h5><a href="https://babel.hathitrust.org/cgi/pt?id=mdp.39015008966072&view=1up&seq=9&skin=2021"><i>Calendar of Patent Rolls</i>, Richard II Vol. 5, 1391-1396</a></h5>
<ul>
  <li>pp. 88-92 (1 March 1392)</li>
  <li>p. 220 (21 February 1393)</li>
  <li>p. 262 (21 February 1393)</li>
  <li>p. 473 (7 August 1394)</li>
  <li>pp. 486-7 (9 August 1394)</li>
  <li>. 554 (3 May 1395)</li>
</ul>
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
  <h2><a id="JohnDrayton">Sir John Drayton</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument15.html">Instrument 15</a></li>
  </ul>
  <h4>About</h4>
<p>
  <h4>Location</h4>
  <p><a href="/places/Nuneham.php">Nuneham Manor</a></p>
  <h4>Further Reading</h4>
    <p>L.S. Woodger, <a href="https://www.historyofparliamentonline.org/volume/1386-1421/member/drayton-sir-john-1417">"Sir John Drayton,"</a> <i>History of Parliament</i>
  <br/>
  <h2><a id="WilliamDrayton">Sir William Drayton</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument15.html">Instrument 15</a></li>
  </ul>
  <h4>About</h4>
  <h4>Location</h4>
  <p><a href="/places/Kempston.php">Kempston Brucebury Manor</a></p>
  <h4>Further Reading</h4>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
