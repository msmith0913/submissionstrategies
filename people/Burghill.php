<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Burghill</title>
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
    <h1>Burghill</h1>
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
    L.marker([51.49963332126371, -0.1257338312908437], {icon: churchIcon}).bindPopup('<strong>Location: St. Stephen&apos;s Chapel</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
<h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><a href="https://babel.hathitrust.org/cgi/pt?id=mdp.39015008966072&view=1up&seq=9&skin=2021"><i>Calendar of Patent Rolls</i>, Richard II Vol. 5, 1391-1396</a></h5>
<ul>
<li>p. 658 (10 February 1396)</li>
<li>p. 694 (10 February 1396)</li>
<li>p. 713 (31 May 1396)</li>
<li>p. 683 (15 June 1396)</li>
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
  <h2>John Burghill, king's confessor</a></h2>
  <h4 style="text-align: center;">Alternate Spellings: Borghulle, Burghull, Bruchilla</h4>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument23.php">Instrument 23</a></li>
  </ul>
  <h4>About</h4>
    <p>John Burghill served as the king's confessor until 1396, when he was made Bishop of Llandaff.</p>
  <h4>Location</h4>
  <p><a href="/places/StStephenChap.php">St. Stephen's Chapel, Westminster Palace</a></p>
  <h4>Further Reading</h4>
<p>Richard G. Davies, "The Attendance of the Episcopate in English Parliaments, 1376-1461," <i>Proceedings of the American Philosophical Society</i> 129, no. 1 (1985): 30-81.</p>
<p>C.F.R. Palmer, "Fasti Ordinis Fratrum Praedicatorum: The Provincials of the Friar-Preachers, or Black Friars, of England," <i>Archaeological Journal</i> 35, no. 1 (1878): 134-165: 155.
<p><a href="https://en.wikipedia.org/wiki/John_Burghill">"John Burghill"</a>, Wikipedia</p>
<p><a href="https://archives.history.ac.uk/richardII/chapel.html">"Chapel goods,"</a> <i>Richard II's Treasure</i></p>
<p><a href="https://www.parliament.uk/about/living-heritage/building/palace/ststephenschapel/medievalststephens/using-medieval-chapel/kings-at-st-stephens/">"Kings at St Stephen's,"</a> <i>UK Parliament Living Heritage</i></p>
      <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
