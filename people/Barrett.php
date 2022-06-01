<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Barrett</title>
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
    <h1>Barrett</h1>
    <div class="row">
      <div class="column">
  <p>Jump to:
  <ul>
    <li><a href="#ThomasBarrett">Thomas Barrett, Bishop of Elphin</a></li>
    <li><a href="#WilliamBarrett">William Barrett</a></li>
    <li><a href="#MaeducBarrett">Maeduc Carragh Barrett</a></li></ul></p>
    <h4>Further reading on the Barrett family</h4>
    <p><strong>Curtis's biographical note:</strong> Barret, William and ‘Mayv Carragh’, see p. 163. The Barrets were Anglo-Norman or rather Anglo-Welsh settlers in Connacht and held the cantred of Bac and Glen in Tirawley under the De Burgos. The spelling ‘Mayv” represents ‘Maigeog’ (FM 1384), an Irish form of the Welsh Madoc.</p>
  </div>
<div class="column">
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
    L.marker([53.84522952503657, -8.19067033028418], {icon: churchIcon}).bindPopup('<strong>Location: St. Mary&and;s Cathedral</strong>').addTo(map);
    L.marker([54.120883056109335, -9.142255900242674], {icon: castleIcon}).bindPopup('<strong>Location: Belleek Castle</strong>').addTo(map);
    </script>
</div>
</div>
  <hr>
  <h2><a id="ThomasBarrett">Thomas Barrett, Bishop of Elphin</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument14.html">Instrument 14</a></li>
    <li><a href="/instruments/Instrument19.html">Instrument 19</a></li>
  </ul>
  <h4>About</h4>
    <p>Thomas Barrett was Bishop of Elphin from 1372-1404.</p>
  <h4>Location</h4>
  <p><a href="/places/StMaryCath.php">St. Mary's Cathedral, Elphin, Co. Roscommon</a></p>
  <h4>Further Reading</h4>
  <br/>
  <h2><a id="WilliamBarrett">William Barrett</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument13.html">Instrument 13</a></li>
  </ul>
  <h4>About</h4>
<p></p>
  <h4>Location</h4>
  <p><a href="/places/Belleek.php">Belleek Castle</a></p>
  <h4>Further Reading</h4>
    <br/>
    <h2><a id="MaeducBarrett">Maeduc Carragh Barrett</a></h2>
    <h4>Submission Documents</h4>
    <ul>
      <li><a href="/instruments/Instrument13.html">Instrument 13</a></li>
    </ul>
    <h4>About</h4>
  <p></p>
    <h4>Location</h4>
    <p><a href="/places/Belleek.php">Belleek Castle</a></p>
    <h4>Further Reading</h4>
      <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
