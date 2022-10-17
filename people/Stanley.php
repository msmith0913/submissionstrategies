
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Stanley</title>
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
    <h1>Stanley</h1>
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
    L.marker([53.57605516263993, -2.8180305756709085], {icon: castleIcon}).bindPopup('<strong>Location: Lathom House</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
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
  <h2>John Stanley</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument5.html">Instrument 5</a></li>
  </ul>
  <h4>About</h4>
<p>John Stanley was a soldier and ambitious politician. In addition to accompanying Richard II to Ireland, he also served as justiciar of Ireland between 1389 and 1391. Beyond his political associations, Stanley is a possible candidate for the patron of the poet (or even the poet himself) who produced <i>Sir Gawain and the Green Knight</i>.</p>
  <h4>Location</h4>
  <p><a href="/places/Lathom.php">Lathom House</a></p>
  <h4>Further Reading</h4>
  <p>Michael J. Bennett, "Stanely, Sir John," in <i>Oxford Dictionary of National Biography</i></p>
  <p>Andrew Breeze, "Sir John Stanley (c. 1350-1414) and the <i>Gawain</i>-Poet," <i>Arthuriana</i> 14, no. 1 (2004): 15-30.</p>
  <p>Gervase Mathew, <i>The Court of Richard II</i> (London: John Murray, 1968): 166. [This seems to be the first articulation of Stanley as the Gawain poet's patron.]</p>
  <p>Tim Thornton, <a href="https://www.cambridge.org/core/journals/journal-of-british-studies/article/lordship-and-sovereignty-in-the-territories-of-the-english-crown-subkingship-and-its-implications-13001600/B84E5F7DFCC599634E20564622F84020">"Lordship and Sovereignty in the Territories of the English Crown: Sub-kingship and Its Implications, 1300-1600,"</a> <i>Journal of British Studies</i> 60 (2021): 848-866.
<br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
