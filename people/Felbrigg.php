<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Felbrigg</title>
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
    <h1>Felbrigg</h1>
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
    L.marker([52.907339265628885, 1.2593998313554615], {icon: castleIcon}).bindPopup('<strong>Location: Felbrigg Hall</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
<h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><a href="https://babel.hathitrust.org/cgi/pt?id=mdp.39015008969282&view=1up&seq=5&skin=2021">Richard II Vol. 4, 1388-1392</a></h5>
<ul>
  <li>p. 188 (3 February 1390)</li>
</ul>
<h5><a href="https://babel.hathitrust.org/cgi/pt?id=mdp.39015008966072&view=1up&seq=9&skin=2021">Richard II Vol. 5, 1391-1396</a></h5>
<ul>
  <li>pp. 105-6 (27 June 1392)</li>
  <li>p. 227 (26 February 1393)</li>
  <li>p. 339 (27 November 1393)</li>
  <li>p. 419 (15 June 1394)</li>
  <li>p. 468 (12 July 1394)</li>
  <li>pp. 472-3 (8 August 1394)</li>
  <li>pp. 474-6 (27 September 1394)</li>
  <li>p. 596 (30 June 1395)</li>
  <li>p. 563 (7 April 1395)</li>
  <li>p. 601 (3 July 1395)</li>
  <li>p. 670 (27 March 1396)</li>
  <li>p. 639 (3 April 1396)</li>
  <li>p. 717 (13 June 1396)</li>
</ul>
<h5><strong>1415-16</strong> | <a href="https://www.nationalarchives.gov.uk/agincourt/preparing-to-fight-raising-soldiers-and-supplies/pouch-of-sir-simon-felbrigg/">Record pouch of Sir Simon Felbrigg (The National Archives, Kew)</a></h5>
<h5><strong>[No date]</strong> | <a href="https://www.nationaltrustcollections.org.uk/object/1400444.2">Brass effigy of Sir Simon Felbrigg and his wife Margaret (Windham Collection, National Trust)</a></h5>
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
  <h2>Simon Felbrigg, standard-bearer</a></h2>
  <h4 style="text-align: center;">Alternate Spellings: Felbryge</h4>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument3.php">Instrument 3</a></li>
  </ul>
  <h4>About</h4>
    <p>Simon Felbrigg was Richard II's standard-bearer.</p>
  <h4>Location</h4>
  <p><a href="/places/FelbriggHall.php">Felbrigg Hall</a></p>
  <h4>Further Reading</h4>
  <p><a href="https://www.british-history.ac.uk/topographical-hist-norfolk/vol8/pp107-119">Francis Blomefield, "North Erpingham Hundred: Felbrigg" in <i>An Essay Towards a Topographical History of the County of Norfolk</i>, Volume 8 (London: W. Miller, 1808): 107-119.</a></p>
<p><a href="https://archaeologydataservice.ac.uk/archsearch/record.xhtml">M. Boyle, "An Archaeological Excavation at Felbrigg Great Hall, Norfolk," Norfolk Archaeological Unit (2007).</a></p>
  <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
