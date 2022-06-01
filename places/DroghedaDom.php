<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Places: Dominican Priory of St. Mary Magdalen, Drogheda</title>
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

  <h1>Dominican Priory of St. Mary Magdalen</h1>
  <h3 style="text-align: center;"><a href="https://www.logainm.ie/en/167">Drogheda, Co. Louth</a></h3>
  <h4>Associated Submissions</h4>
<ul>
    <li><a href="/instruments/Instrument1.php">Instrument 1</a></li>
    <li><a href="/instruments/Instrument2.php">Instrument 2</a></li>
    <li><a href="/instruments/Instrument7.php">Instrument 7</a></li>
    <li><a href="/instruments/Instrument8.php">Instrument 8</a></li>
    <li><a href="/instruments/Instrument9.php">Instrument 9</a></li>
    <li><a href="/instruments/Instrument10.php">Instrument 10</a></li>
    <li><a href="/instruments/Instrument25.php">Instrument 25</a></li>
    <li><a href="/instruments/Instrument26.php">Instrument 26</a></li>
    <li><a href="/instruments/Instrument29.php">Instrument 29</a></li>
    <li><a href="/instruments/Instrument32.php">Instrument 32</a></li>
    <li><a href="/instruments/Instrument37.php">Instrument 37</a></li>
    <li><a href="/instruments/Instrument38.php">Instrument 38</a></li>
  </ul>
  <h4>Coordinates:</h4><p>53.71799324577726, -6.351336075629299</p>
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
    L.marker([53.71799324577726, -6.351336075629299], {icon: churchIcon}).bindPopup('<strong>Location: Dominican Priory of St. Mary Magdalen, Drogheda</strong>').addTo(map);
    </script>
  <h4>About the site:</h4>
<p>The Dominican Priory of St. Mary Magdalen in Drogheda was a frequent site of submission, with twelve instruments recounting distinct submission events. The notarial instruments describe the submissions as occurring "within a certain room," sometimes also described as the king's room. The priory had a relatively brief run: founded by Luke Netterville in 1224, it was on the verge of ruin by the mid-fifteenth century.</p>
<h4>How was it located?</h4>
<p>Although only the tower remains visible, the location of the priory is well attested. See the site record for a full description of the extant remains.</p>
  <h4>Sources and Further Reading</h4>
  <p>Site record for LH024-041001-, derived from the <i>Archaeological Inventory of County Louth</i> (Dublin: Stationery Office, 1986) and the <i>Archaeological Survey of County Louth</i> (Dublin: Stationery Office, 1991).</p>
  <p>John Bradley, "The Topography and Layout of Medieval Drogheda," <i>Journal of the County Louth Archaeological and Historical Society</i> 19, no. 2 (1978): 98-127.</p>
  <p>Kieran Campbell, "A Medieval Tile Kiln Site at Magdalene Street, Drogheda," <i>Journal of the County Louth Archaeological and Historical Society</i> 21, no. 1 (1985): 48-54.</p>
  <p>Andrew Halpin and Laureen Buckley, "Archaeological Excavations at the Dominican Priory, Drogheda, Co. Louth," <i>Proceedings of the Royal Irish Academy</i> 95C, no. 5 (1995): 175-253.</p>
  <p>Matthew J. Kelly, "Three Monasteries of Drogheda," <i>Journal of the County Louth Archaeological Society</i> 10, no. 1 (1941): 25-41.</p>
  <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
    <footer>
      <?php include "../footer.html" ?>
  </footer>
  </body>
  </html>
