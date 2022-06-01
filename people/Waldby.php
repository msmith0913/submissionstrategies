
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Waldby</title>
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
    <h1>Waldby</h1>
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
    L.marker([53.34345533225444, -6.27106020218046], {icon: churchIcon}).bindPopup('<strong>Location: Christchurch Cathedral</strong>').addTo(map);
    L.marker([53.336998652, -6.269498922], {icon: churchIcon}).bindPopup('<strong>Location: St. Patrick&apos;s Cathedral</strong>').addTo(map);
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
  <h2>Robert Waldby, Archbishop of Dublin</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument3.html">Instrument 3</a></li>
    <li><a href="/instruments/Instrument4.html">Instrument 4</a></li>
    <li><a href="/instruments/Instrument11.html">Instrument 11</a></li>
    <li><a href="/instruments/Instrument12.html">Instrument 12</a></li>
    <li><a href="/instruments/Instrument13.html">Instrument 13</a></li>
    <li><a href="/instruments/Instrument17.html">Instrument 17</a></li>
    <li><a href="/instruments/Instrument19.html">Instrument 19</a></li>
    <li><a href="/instruments/Instrument20.html">Instrument 20</a></li>
    <li><a href="/instruments/Instrument30.html">Instrument 30</a></li>
    <li><a href="/instruments/Instrument35.html">Instrument 35</a></li>
  </ul>
  <h4>About</h4>
    <p>Robert Waldby was Archbishop of Dublin from 1390 to 1395. However, he spent nearly his entire tenure (with the exception of the months he accompanied Richard II) away from Ireland.</p>
  <h4>Location</h4>
  <p><a href="/places/ChristChurchCath.php">Christchurch Cathedral</a></p>
  <p><a href="/places/StPatrickCathDub.php">St. Patrick's Cathedral</a></p>
  <h4>Further Reading</h4>
  <p>David Beresford, <a href="https://www.dib.ie/biography/waldby-robert-a8839">"Waldby, Robert,"</a> <i>Dictionary of Irish Biography</i>.</p>
  <p>Richard G. Davies, "Richard II and the Church," in Anthony Goodman and James L. Gillespie, eds., <i>Richard II: The Art of Kingship</i> (Oxford: Clarendon Press, 1999): 93-106.</p>
  <p>R.N. Swanson, <a href="https://doi.org/10.1093/ref:odnb/28432">"Waldby, Robert,"</a> in <i>Oxford Dictionary of National Biography</i></p>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
