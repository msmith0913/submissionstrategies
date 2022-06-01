
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Places: Dungannon</title>
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

  <h1>Dungannon</h1>
  <h3 style="text-align: center;"><a href="https://www.logainm.ie/en/63962">Dungannon, Co. Tyrone</a></h3>
  <h4>Associated People</h4>
    <p><a href="/people/MacDonald.php#JohnMacDonald">John MacDonald</a></p>
    <p><a href="/people/ONeill.php#NiallOgONeill">Niall Óg O'Neill</a></p>
    <p><a href="/people/ONeill.php#NiallMorONeill">Niall Mór O'Neill</a></p>
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
    L.marker([54.505752709391544, -6.7675603709869145], {icon: castleIcon}).bindPopup('<strong>Location: Dungannon</strong>').addTo(map);
    </script>
  <h4>How was it located?</h4>
<p>Neither Dungannon nor the big house built on the same site in the 18th century stand today (two towers from the big house excepting). However, the site was a center of O'Neill authority for centuries. The first reference to an O'Neill seat there is in the early fourteenth century, making it a comfortable site identification both for Niall Óg and Niall Mór O'Neill, as well as for John MacDonald, their constable.</p>
  <h4>Sources and Further Reading</h4>
  <p>Robert M. Chapple, "Excavations at Castle Hill, Dungannon, Co. Tyrone," <i>Archaeology Ireland</i> 17, no. 3 (2003): 24-29.</p>
  <p>Colm Donnelly, Emily Murray and Paul Logue, "Excavating with Time Team at Castle Hill, Dungannon, Co. Tyrone," <i>Archaeology Ireland</i> 21, no. 4 (2007): 16-19.</p>
  <p>Colm J. Donnelly, Emily V. Murray, and Ronan McHugh, <a href="https://ancientclans.org/site/wp-content/uploads/2021/05/CAF-Dungannon-HLF-Statement.pdf">"Dungannon Castle: Its History, Architecture & Archaeology,"</a> report prepared for the Dungannon and South Tyrone Borough Council (2008).</p>
  <p>"Fort of the Earls," <i>Time Team</i> Series 15, Episode 9 (2008).</p>
  <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
    <footer>
      <?php include "../footer.html" ?>
  </footer>
  </body>
  </html>
