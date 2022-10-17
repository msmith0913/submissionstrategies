<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: FitzMaurice</title>
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
    <h1>FitzMaurice</h1>
    <div class="row">
      <div class="column">
  <p>Jump to:
  <ul>
    <li><a target="_self" href="/people/OCarroll.php#MauriceFitzMaurice">Maurice FitzMaurice</a></li>
    <li><a target="_self" href="/people/OCarroll.php#ThomasMacShane">Thomas MacShane FitzMaurice</a></li></ul></p>
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
    L.marker([52.57014569642131, -9.294740763174241], {icon: castleIcon}).bindPopup('<strong>Location: Glin Castle</strong>').addTo(map);
    L.marker([52.402309862021305, -9.628663487621754], {icon: castleIcon}).bindPopup('<strong>Location: Lixnaw Castle</strong>').addTo(map);
    </script>
</div>
</div>
<h4>Futher reading on the FitzMaurice family</h4>
<p><strong>Curtis's biographical note: </strong>FitzMaurice, Maurice, see p. 162. It is not easy to locate this Geraldine of Munster. The only ‘Maurice son of Maurice’ I find at this time is Maurice, eldest son of Maurice the first White Knight, whose family became known as the FitzGibbons of Kilmallock. Thomas ‘MacShane’, who submits with Theobald FitzWalter (q.v.), may be Thomas Fitz John, the Geraldine Knight of Glin, or a son of John, brother of Maurice, the first Knight of Kerry, who founded a sept in Kerry called ‘Slught Shane’. </p>
<p>MacShane, see p. 162, and under FitzMaurice.</p>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
<h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><strong>1366</strong> | <a href="">CELT: Annals of the Four Masters 1366.10</a></h5>
<p>A great war broke out between the English of Connaught. Mac Maurice was banished from his territory by Mac William; and Mac Maurice fled for protection to the Clann-Rickard. Mac William, Hugh O'Conor, King of Connaught, and William O'Kelly, Lord of Hy-Many, marched with an army to Upper Connaught against the Clann-Rickard, and remained there nearly three months engaged in mutual hostilities, until at last Mac William subdued the Clann-Rickard; whereupon the hostages of these latter were delivered up to him, and he returned to his country in triumph.</p>
<h5><strong>1367</strong> | <a href="">CELT: Annals of the Four Masters 1367.9</a></h5>
<p>Mac Maurice na-m-Brigh; Owen, son of Rory O'Kelly; Murtough, son of Murtough O'Conor; and Bebinn, daughter of Ualgarg O'Rourke and wife of Tomaltagh Mac Donough, died.</p>
<h5><strong>1405</strong> | <a href="">CELT: Annals of the Four Masters 1405.7</a></h5>
<p>O'Conor Kerry (Dermot, the son of Donough) was slain by Mac Maurice of Kerry.</p>
<h5><strong>1417</strong> | <a href="">CELT: Annals of the Four Masters 1417.6</a></h5>
<p>Thomas, the son of Mac Maurice of Kerry, was slain by James, the son of the Earl of Desmond.</p>
<h5><strong>1448</strong> | <a href="">CELT: Annals of the Four Masters 1446.8</a></h5>
<p>A war broke out between the two O'Conors in Machaire-Chonnacht, in the course of which Dermot Roe, son of Teige O'Conor, was slain at Cuil Ua bh-Fionntain by O'Conor Don, aided by the Mac Maurices na-m-Brigh of Brize, and some of the sons of Felim.</p>
<h5><strong>1446</strong> | <a href="">CELT: Annals of the Four Masters 1446.17</a></h5>
<p>Edmond, son of Mac Maurice of Kerry, was slain by Cormac, the son of Owen Mac Carthy.</p>
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
  <h2><a id="MauriceFitzMaurice">Maurice FitzMaurice</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument12.php">Instrument 12</a></li>
    <li><a href="/instruments/Instrument30.php">Instrument 30</a></li>
  </ul>
  <h4>About</h4>
  <h4>Location</h4>
  <p><a href="/places/LixnawCastle.php">Lixnaw Castle</a></p>
  <h4>Further Reading</h4>
  <br/>
  <h2><a id="ThomasMacShane">Thomas MacShane FitzMaurice</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument12.php">Instrument 12</a></li>
  </ul>
  <h4>About</h4>
  <h4>Location</h4>
  <p><a href="/places/GlinCastle.php">Glin Castle</a></p>
  <h4>Further Reading</h4>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
