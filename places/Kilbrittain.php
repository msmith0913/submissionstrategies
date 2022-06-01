
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Places: Kilbrittain</title>
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

  <h1>Kilbrittain</h1>
  <h3 style="text-align: center;"><a href="https://www.logainm.ie/en/8185">Kilbrittain, Co. Cork</a></h3>
  <h4>Associated People</h4>
    <p><a href="/people/MacCarthyReagh.php#DonalMacCarthyReagh">Donal MacCarthy Reagh</a></p>
    <p><a href="/people/MacCarthyReagh.php#CormacMacCarthyReagh">Cormac MacCarthy Reagh</a></p>
  <h4>Coordinates:</h4><p>51.67552178247685, -8.679032758580476</p>
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
    L.marker([51.67552178247685, -8.679032758580476], {icon: castleIcon}).bindPopup('<strong>Location: Kilbrittain</strong>').addTo(map);
    </script>
  <h4>How was it located?</h4>
<p>Although there are no sources from this precise moment to demonstrate that Donal Reagh had taken Kilbrittain Castle by 1395, he died there less than twenty years later.</p>
  <h4>Sources and Further Reading</h4>
  <p>Site record for CO124-025001-, derived from the <i>Archaeological Inventory of County Cork</i>, Volume 1: West Cork (Dublin: Stationery Office, 1992).</p>
  <p>W.F. Butler, "Notes and Queries: Kilbrittain Castle," <i>Journal of the Cork Historical and Archaeological Society</i> 26, no. 124 (1920): 81.</p>
  <p>C. Coakley, "Kilbrittain Castle," <i>Journal of the Cork Historical and Archaeological Society</i> 26, no. 123 (1920): 18-23.</p>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
    <footer>
      <?php include "../footer.html" ?>
  </footer>
  </body>
  </html>
