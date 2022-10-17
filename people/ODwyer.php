
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: O'Dwyer</title>
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
    <h1>O'Dwyer</h1>
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
    L.marker([52.5547648658257, -8.029001639898715], {icon: castleIcon}).bindPopup('<strong>Location: Dundrum Castle</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
<h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><strong>1369</strong> | <a href="">CELT: Annals of the Four Masters 1369.11</a></h5>
<p>A great defeat was given by Brian O'Brien, Lord of Thomond, to the English of Munster. Garrett, Earl of Desmond, and many of the chiefs of the English, were taken prisoners by him, and the remainder cut off with indescribable slaughter. Limerick was burned on this occasion by the Thomonians and the Clann-Culein, upon which the inhabitants of the town capitulated with O'Brien. Sheeda Cam Mac Namara, son of the daughter of O'Dwyre, assumed the wardenship of the town; but the English who were in the town acted treacherously towards him, and killed him. This was a lamentable treatment of the son of a chieftain.</p>
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
  <h2>Thomas O'Dwyer</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument33.php">Instrument 33</a></li>
  </ul>
  <h4>About</h4>
<p>Thomas O'Dwyer was lord of Kilnamanagh in Tipperary.</p>
  <h4>Location</h4>
  <p><a href="/places/Dundrum.php">Dundrum Castle</a></p>
  <h4>Further Reading</h4>
  <p><strong>Curtis's biographical note: </strong>O’Dwyer or O’Duibhidhr, Thomas, see p. 196. O’Dwyer’s country was the present barony of Kilnamanagh in County Tipperary.</p>
  <p>John Morrissey, "Cultural geographies of the contact zone: Gaels, Galls and overlapping territories in late medieval Ireland," <i>Social & Cultural Geography</i> 6, no. 4 (2005): 551-566.</p>
  <p>John Morrissey, "Contours of colonialism: Gaelic Ireland and the early colonial subject," <i>Irish Geography</i> 37, no. 1 (2004): 88-102.</p>
<br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
