<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Mortimer</title>
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
    <h1>Mortimer</h1>
    <p>Jump to:
    <ul>
      <li><a target="_self" href="/people/Mortimer.php#RogerMortimer">Roger Mortimer</a></li>
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
    L.marker([53.55433368968523, -6.789908525336877], {icon: castleIcon}).bindPopup('<strong>Location: Trim Castle</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
  <h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
  <h5><strong>1380</strong> | <a href="">CELT: Annals of the Four Masters 1380.7</a></h5>
    <p>Mortimer came to Ireland with great powers, as Lord Justice; whereupon the Irish nobility repaired to pay their court to him, and among others the Roydamna of Ireland, i.e. Niall O'Neill, O'Hanlon, O'Farrell, O'Reilly, O'Molloy, Mageoghegan, and the Sinnach Fox, with many other nobles.</p>
  <h5><strong>1380</strong> | <a href="">CELT: Annals of the Four Masters 1380.8</a></h5>
    <p>Art Magennis, Lord of Iveagh, in Ulidia, was treacherously taken prisoner in the house of Mortimer. After this the Irish and many of the English stood very much in awe of him Mortimer; and, seeing themselves at his mercy, they resolved not to cultivate any familiarity with him.</p>
  <h5><strong>1380</strong> | <a href="">CELT: Annals of the Four Masters 1380.14</a></h5>
    <p>An army was led by Mortimer into Ulster, and many fortresses and towns were destroyed by him on that occasion, including both lay and ecclesiastical buildings, as Urnaidhe, Donaghmore, Errigal, Clogher, &c.</p>
  <h5><strong>1381</strong> | <a href="">CELT: Annals of the Four Masters 1381.8</a></h5>
    <p>The castle of Athlone was taken by the Earl (Mortimer), and the son of Richard an-t-Sonnaigh was killed in it.</p>
  <h5><strong>1381</strong> | <a href="">CELT: Annals of the Four Masters 1381.13</a></h5>
    <p>Sir Edmond Mortimer, Lord of the English of Ireland, died.</p>
  <h5><strong>1395</strong> | <a href="">CELT: Annals of the Four Masters 1395.13</a></h5>
    <p>The King of England departed from Ireland in May, after a great number of the English and Irish chiefs of Ireland had gone into his house; and Mortimer was left by the King in Ireland as his representative. Although Mac Murrough had gone into the King's house, he did not afterwards keep faith with him.</p>
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
  <h2 id="RogerMortimer">Roger Mortimer, Earl of March and Ulster</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument4.php">Instrument 4</a></li>
    <li><a href="/instruments/Instrument19.php">Instrument 19</a></li>
    <li><a href="/instruments/Instrument33.php">Instrument 33</a></li>
  </ul>
  <h4>About</h4>
    <p>Roger Mortimer, 4th earl of March and 6th earl of Ulster, was a powerful magnate in both England and Ireland.</p>
  <h4>Location</h4>
  <p><a href="/places/TrimCastle.php">Trim Castle</a></p>
  <h4>Further Reading</h4>
  <p>David Beresford, "Mortimer, Roger," in <i>Dictionary of Irish Biography</i>.</p>
  <p>R.R. Davies, "Mortimer, Roger, fourth earl of March and sixth earl of Ulster" in <i>Oxford Dictionary of National Biography</i>.</p>
      <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
