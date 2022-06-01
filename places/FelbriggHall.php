
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Places: Felbrigg Hall</title>
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

  <h1>Felbrigg Hall</h1>
  <h3 style="text-align: center;">Felbrigg, Norfolk</h3>
  <h4>Associated People</h4>
    <p><a href="/people/Felbrigg.php">Simon Felbrigg</a></p>
  <h4>Coordinates:</h4><p>52.907339265628885, 1.2593998313554615</p>
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
  <h4>How was it located?</h4>
<p>Felbrigg Hall was the seat of the Felbrigg family through the fourteenth and early fifteenth century. The current hall is built on the site of the medieval manor.</p>
  <h4>Sources and Further Reading</h4>
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
