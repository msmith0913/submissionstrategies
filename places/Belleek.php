
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Places: Belleek Castle</title>
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
    <!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="title" content="Submission Strategies: The Submissions to Richard II, 1395">
  <meta name="description" content="An interactive visualization of the spatial and social networks in 14th century Ireland">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="https://submissionstrategies.com" target="_blank">
  <link rel="stylesheet" href="https://submissionstrategies.com/css/r2.css" />
</head>
<div id="R2header">
<a style="text-decoration: none" href="https://submissionstrategies.com">
  <h1 class="site-title">Submission Strategies</h1>
</a>
<a style="text-decoration: none" href="https://submissionstrategies.com">
  <h2 class="site-subtitle">The Irish Submissions to Richard II, 1395</h2>
</a>
</div>
<hr>
<div class="r2navbar">
  <ul class="r2nav">
    <li class="navitem"><a target="_self" class="navurl" href="https://submissionstrategies.com">Home</a></li>
    <li class="navitem"><a target="_self" class="navurl" href="https://submissionstrategies.com/map.php">Map</a></li>
    <li class="navitem"><a target="_self" class="navurl" href="https://submissionstrategies.com/networks.php">Networks</a></li>
    <li class="navitem"><a target="_self" class="navurl" href="https://submissionstrategies.com/explorations.php">Explorations</a></li>
    <li class="navitem"><a target="_self" class="navurl" href="https://submissionstrategies.com/people.php">People</a></li>
    <li class="navitem"><a target="_self" class="navurl" href="https://submissionstrategies.com/places.php">Places</a></li>
    <li class="navitem"><a target="_self" class="navurl" href="https://submissionstrategies.com/instruments.php">Sources</a></li>
    <li class="navitem"><a target="_self" class="navurl" href="https://submissionstrategies.com/data.php">Data</a></li>
    <li class="navitem"><a target="_self" class="navurl" href="https://submissionstrategies.com/contact">Contact</a></li>
  </ul>
</div>
<hr>

</html>
</header>

  <h1>Belleek Castle</h1>
  <h3 style="text-align: center;"><a href="https://www.logainm.ie/en/34702">Ballina, Co. Mayo</a></h3>
  <h4>Associated People</h4>
    <p><a href="/people/Barrett.php">William Barrett</a></p>
    <p><a href="/people/Barrett.php">Maeduc Carragh Barrett</a></p>
  <h4>Coordinates:</h4><p>54.120883056109335, -9.142255900242674</p>
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
    L.marker([54.120883056109335, -9.142255900242674], {icon: castleIcon}).bindPopup('<strong>Location: Belleek Castle</strong>').addTo(map);
    </script>
  <h4>How was it located?</h4>
  <p>Belleek was the seat of the Barretts of Tirawley.</p>
  <h4>Sources and Further Reading</h4>
    <p>John O’Donovan, OS Letters, Mayo Vol. 1, 74-75</p>
  <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
    <footer>
      <!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="title" content="Submission Strategies: The Submissions to Richard II, 1395">
	<meta name="description" content="An interactive visualization of the spatial and social networks in 14th century Ireland">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="https://submissionstrategies.com" target="_blank">
  <link rel="stylesheet" href="https://submissionstrategies.com/css/r2.css" />
</head>
<hr>
<p>©2022 Margaret K. Smith. The content on this website is under a <a href="https://creativecommons.org/licenses/by-nc/4.0/">Creative Commons CC-BY-NC 4.0 license</a>. This means that you may use, adapt, and share it freely with attribution for non-commercial purposes.</p>
</html>
  </footer>
  </body>
  </html>
