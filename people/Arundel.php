<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Arundel</title>
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
    <h1>Arundel</h1>
    <div class="row">
      <div class="column">
  <p>Jump to:
  <ul>
    <li><a href="/people/Arundel.php#ThomasArundel">Thomas Arundel, Archbishop of York</a></li>
    <li><a href="/people/Arundel.php#WilliamArundel">William Arundel</a></li></ul></p>
  <h4>Futher reading on the Arundel family</h4>
  <p>C. Given-Wilson, "Wealth and Credit, Public and Private: The Earls of Arundel 1306-1397," <i>English Historical Review</i> 106, no. 418 (1991): 1-26.</p>
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
    L.marker([53.96261321710904, -1.082564232319088], {icon: churchIcon}).bindPopup('<strong>Location: York Minster</strong>').addTo(map);
    L.marker([51.38989748942007, 0.5014839976535792], {icon: castleIcon}).bindPopup('<strong>Location: Rochester Castle</strong>').addTo(map);
    </script>
</div>
</div>
  <hr>
  <h2><a id="ThomasArundel">Thomas Arundel, Archbishop of York</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument1.html">Instrument 1</a></li>
    <li><a href="/instruments/Instrument2.html">Instrument 2</a></li>
    <li><a href="/instruments/Instrument8.html">Instrument 8</a></li>
    <li><a href="/instruments/Instrument9.html">Instrument 9</a></li>
    <li><a href="/instruments/Instrument10.html">Instrument 10</a></li>
    <li><a href="/instruments/Instrument21.html">Instrument 21</a></li>
    <li><a href="/instruments/Instrument25.html">Instrument 25</a></li>
    <li><a href="/instruments/Instrument37.html">Instrument 37</a></li>
    <li><a href="/instruments/Instrument38.html">Instrument 38</a></li>
  </ul>
  <h4>About</h4>
    <p>At the time of the submissions, Thomas Arundel was serving as Archbishop of York, a position he held from September 14, 1388 until his translation to Canterbury on September 25, 1396. He had previously been Bishop of Ely from 1374, a post he received at the extraordinarily young age of 20. Despite his presence as a witness at several of the submissions to Richard II, Thomas Arundel had been a vocal critic of the king's policies. Nevertheless, at the time of the submissions he enjoyed significant ecclesiastical and secular authority. In the years following Richard's visit to Ireland, however, Arundel and other members of his family were convicted of treason for their actions against Richard leading up to and including the Merciless Parliament of 1388. Arundel escaped execution by remaining on the Continent with Henry Bolingbrooke before returning with him in 1399. Following Richard's abdication, Arundel crowned Bolingbrooke Henry IV.</p>
<!-- There's a lot more about Arundel in the ODNB article - lots of intrigue in the transition between Richard and Henry involving several names from the submissions. Worth drawing in more sources and beefing this up at some point? -->
  <h4>Location</h4>
  <p><a href="/places/YorkMinster.php">York Minster</a></p>
  <h4>Further Reading</h4>
    <p>Margaret Aston, <i>Thomas Arundel: A Study of Church Life in the Reign of Richard II</i> (Oxford: Clarendon Press, 1967).</p>
    <p>Richard G. Davies, “Thomas Arundel as Archbishop of Canterbury, 1396-1414,” <i>Journal of Ecclesiastical History</i> 24, no. 1 (1973): 9-21.</p>
    <p>Richard G. Davies, "Richard II and the Church," in Anthony Goodman and James L. Gillespie, eds., <i>Richard II: The Art of Kingship</i> (Oxford: Clarendon Press, 1999): 93-106.</p>
    <p>Jonathan Hughes, "Arundel [Fitzalan], Thomas (1353-1414)" in <i>ODNB</i></p>
    <p>Powicke and Fryde, <i>Handbook of British Chronology</i></p>
    <p>Michael Wilks, “Thomas Arundel of York: The Appellant Archbishop,” in <i>Life and Thought in the Northern Church</i>, ed. Diana Wood (Rochester, NY: Ecclesiastical History Society, 1999): 57-86. </p>
  <br/>
  <h2><a id="WilliamArundel">William Arundel</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument14.html">Instrument 14</a></li>
  </ul>
  <h4>About</h4>
    <p>This William Arundel is probably Sir William Arundel (ca. 1365-1400), son of Sir John Arundel and nephew of Thomas. Despite his family's contentious relationship with Richard II, William seems to have been well regarded by the king. In 1395, he was custos of Rochester Castle and was inducted into the Order of the Garter.</p>
  <h4>Location</h4>
  <p><a href="/places/RochesterCastle.php">Rochester Castle</a></p>
  <h4>Further Reading</h4>
    <p>George Frederick Beltz, <i>Memorials of the Order of the Garter from its Foundation to the Present Time</i> (London: William Pickering, 1841): 352-353.</p>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
