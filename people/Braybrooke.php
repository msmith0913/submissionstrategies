<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Braybrooke</title>
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
    <h1>Braybrooke</h1>
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
    L.marker([51.51391872458704, -0.09835060227396925], {icon: churchIcon}).bindPopup('<strong>Location: Old St. Paul&apos;s Cathedral</strong>').addTo(map);
    </script>
</div>
</div>
  <hr>
  <h2>Robert Braybrooke, Bishop of London</a></h2>
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
    <p>Robert Braybrooke was Bishop of London from 1381 to 1404.</p>
  <h4>Location</h4>
  <p><a href="/places/OldStPaulCath.php">Old St. Paul's Cathedral, London</a></p>
  <h4>Further Reading</h4>
<p>R.G. Davies, <a href="https://doi.org/10.1093/ref:odnb/3301">"Braybrooke [Braybroke], Robert,"</a> <i>Oxford Dictionary of National Biography</i></p>
<p><a href="https://en.wikipedia.org/wiki/Robert_Braybrooke">"Robert Braybrooke"</a>, Wikipedia</p>
      <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
