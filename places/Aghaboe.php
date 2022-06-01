
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Places: Aghaboe</title>
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

  <h1>Aghaboe</h1>
  <h3 style="text-align: center;"><a href="https://www.logainm.ie/en/28025">Aghaboe, Co. Laois</a></h3>
  <h4>Associated People</h4>
    <p><a href="/people/MacGillapatrick.php">Finghin MacGillapatrick</a></p>
  <h4>Coordinates:</h4><p>52.92378377374355, -7.513021134328597</p>
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
    L.marker([52.92378377374355, -7.513021134328597], {icon: castleIcon}).bindPopup('<strong>Location: Aghaboe</strong>').addTo(map);
    </script>
  <h4>How was it located?</h4>
<p>Aghaboe was taken from Anglo-Norman settlers in the mid-fourteenth century by the MacGillapatricks, and it became one of the centers of their lordship of Upper Ossory.</p>
  <h4>Sources and Further Reading</h4>
  <p>Site record for LA022-019007-, derived from P. David Sweetman, Olive Alcock, and Bernie Moran, compilers, <i>Archaeological Inventory of County Laois</i> (Dublin: Stationery Office, 1995).</p>
  <p>David Edwards, "Collaboration without Anglicisation: The MacGiollapadraig Lordship and Tudor Reform," in Patrick J. Duffy, David Edwards, and Elizabeth FitzPatrick, eds., <i>Gaelic Ireland, c. 1250-c. 1650</i> (Dublin: Four Courts Press, 2001): 77-97.</p>
<p>Goddard H. Orpen, "Motes and Norman Castles in Ossory," <i>Journal of the Royal Society of Antiquaries of Ireland</i> 39, no. 4 (1909): 313-342.</p>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
    <footer>
      <?php include "../footer.html" ?>
  </footer>
  </body>
  </html>
