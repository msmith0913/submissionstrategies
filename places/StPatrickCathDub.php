
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Places: St. Patrick's Cathedral</title>
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

  <h1>St. Patrick's Cathedral</h1>
  <h3 style="text-align: center;"><a href="https://www.logainm.ie/en/1375542">Dublin, Co. Dublin</a></h3>
  <h4>Associated People</h4>
    <p><a href="/people/Waldby.php">Robert Waldby</a></p>
  <h4>Coordinates:</h4><p>53.336998652, -6.269498922</p>
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
    L.marker([53.336998652, -6.269498922], {icon: churchIcon}).bindPopup('<strong>Location: St. Patrick&apos;s Cathedral</strong>').addTo(map);
    </script>
  <h4>How was it located?</h4>
<p>Although Waldby spent very little time in his diocese while Archbishop of Dublin, the city's two cathedrals were the seat of his authority. Dublin was unusual in having two cathedrals that shared the rights and duties of the archdiocesan seat: Christ Church and St. Patrick's.</p>
  <h4>Sources and Further Reading</h4>
  <p>Edwin C. Rae, "The Medieval Fabric of the Cathedral Church of St. Patrick in Dublin," <i>Journal of the Royal Society of Antiquaries of Ireland</i>, 109 (1979): 28-73.</p>
  <p>Geraldine Stout with Paul Walsh, site record for DU018-020269-, <i>Archaeological Survey of Ireland</i></p>
  <p>John William Sullivan, "'The Pale at prayer': lived religious experience in Anglo-Norman Dublin's two cathedrals" in Seán Duffy, ed., <i>Medieval Dublin</i> XVIII (Dublin: Four Courts Press 2020): 183-193.</p>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
    <footer>
      <?php include "../footer.html" ?>
  </footer>
  </body>
  </html>
