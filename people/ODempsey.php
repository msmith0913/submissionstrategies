
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: O'Dempsey</title>
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
    <h1>O'Dempsey</h1>
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
    L.marker([53.223358839531244, -7.257592303275473], {icon: castleIcon}).bindPopup('<strong>Location: Ballykean</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
<h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><strong>1376</strong> | <a href="">CELT: Annals of the Four Masters 1376.5</a></h5>
<p>Bebinn, daughter of Donnell O'Dunne, and wife of O'Dempsy, died.</p>
<h5><strong>1383</strong> | <a href="">CELT: Annals of the Four Masters 1383.13</a></h5>
<p>Dermot O'Dempsy, Lord of Kinel-Maoilughra, was slain by the English.</p>
<h5><strong>1394</strong> | <a href="">CELT: Annals of the Four Masters 1394.5</a></h5>
<p>Hugh O'Dempsy, while in pursuit of a prey, was slain by the English.</p>
<h5><strong>1394</strong> | <a href="">CELT: Annals of the Four Masters 1394.6</a></h5>
<p>Thomas O'Dempsy, heir to the lordship of Clann-Maoilughra, was slain by the English.</p>
<h5><strong>1410</strong> | <a href="">CELT: Annals of the Four Masters 1410.14</a></h5>
<p>Turlough and Teige, two sons of O'Molloy, and Donnell, the grandson of Hopkinn O'Molloy, were slain by the Clann-Maoilughra i.e. the O'Dempsys.</p>
<h5><strong>1445</strong> | <a href="">CELT: Annals of the Four Masters 1445.7</a></h5>
<p>Dermot O'Toole, Lord of Clann-Tuathail, was slain by the grandsons of Tomaltagh O'Dempsey, in the eightieth year of his age, and while in pursuit of a prey.</p>
</div>
  <script>
  function sourceexpand() {
  var x = document.getElementById("source");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  }
  </script>
  <hr>
  <h2>Art O'Dempsey</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument4.php">Instrument 4</a></li>
  </ul>
  <h4>About</h4>
<p>Art O'Dempsey was lord of Clanmalier and an underlord of O'Conor Faly.</p>
  <h4>Location</h4>
  <p><a href="/places/Ballykean.php">Ballykean</a></p>
  <h4>Further Reading</h4>
  <p><strong>Curtis's biographical note: </strong>O’Dempsey or O’Diomusaigh, Art, see p. 154. The country of O’Dempsey was Clann Maoilughra, or Clanmalier; it embraced the present baronies of Portnahinch in Queen’s County and that of Upper Philipstown in King’s County. O’Conor Faly was his paramount chief.</p>
  <p>E. Curtis and Walter Cowley, "The Survey of Offaly in 1550," <i>Hermathena</i> 20, no. 45 (1930): 312-352.</p>
<br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
