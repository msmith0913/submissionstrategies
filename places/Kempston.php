<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Places: Kempston Brucebury Manor</title>
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
  </style>
</head>
<body>
  <header>
    <?php include "../header.html" ?>
</header>

  <h1>Kempston Brucebury Manor</h1>
  <h3 style="text-align: center;">Kempston Brucebury, Bedfordshire</h3>
  <h4>Associated People</h4>
    <p><a href="/people/Drayton.php#WilliamDrayton">William Drayton</a></p>
  <h4>Coordinates:</h4><p>52.12027053565773, -0.49714784138783447</p>
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
    L.marker([52.12027053565773, -0.49714784138783447], {icon: castleIcon}).bindPopup('<strong>Location: Kempston Brucebury Manor</strong>').addTo(map);
    </script>
  <h4>How was it located?</h4>
<p>Without clear evidence for a location for William Drayton in the years leading up to the submissions, the manor of Kempston Brucebury at least offers some possible threads. Although Brucebury was technically the property of his brother John, William had participated in the purchase of a portion of it in 1387.</p>
  <h4>Sources and Further Reading</h4>
  <p><a href="https://babel.hathitrust.org/cgi/pt?id=mdp.39015009141402&view=1up&seq=5&skin=2021"><i>Calendar of Patent Rolls</i>, Richard II Vol. 3, 1385-1389, pp. 339-40.</a></p>
  <p>L.S. Woodger, <a href="https://www.historyofparliamentonline.org/volume/1386-1421/member/drayton-sir-john-1417">"Sir John Drayton,"</a> <i>History of Parliament</i></p>
  <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
    <footer>
      <?php include "../footer.html" ?>
  </footer>
  </body>
  </html>
