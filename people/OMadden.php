
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: O'Madden</title>
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
    <h1>O'Madden</h1>
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
    L.marker([53.11405971470972, -8.16440534487539], {icon: castleIcon}).bindPopup('<strong>Location: Port an Tulchain</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
<h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><strong>1368</strong> | <a href="">CELT: Annals of the Four Masters 1368.16</a></h5>
<p>William, son of Donough Muimhneach O'Kelly, Lord of Hy-Many, was taken prisoner by O'Madden and the Clann-mic-n-Eoghain. On the same day Donnell, son of Conor O'Kelly, and Ardgal Oge O'Concannon, were slain by O'Maden.</p>
<h5><strong>1371</strong> | <a href="">CELT: Annals of the Four Masters 1371.4</a></h5>
<p>Durrough O'Madden (i.e. the son of Owen), general patron of the literati, the poor, and the destitute of Ireland, was killed by one shot of an arrow, in the rear of a predatory party in Ormond.</p>
<h5><strong>1381</strong> | <a href="">CELT: Annals of the Four Masters 1381.18</a></h5>
<p>Dungalagh O'Madden was slain in a skirmish by the Clann-Rickard.</p>
<h5><strong>1383</strong> | <a href="">CELT: Annals of the Four Masters 1383.9</a></h5>
<p>Murrough na-Raithnighe O'Brien, More, the daughter of Murrough O'Madden, and wife of Mac William of Clanrickard (Richard); and Joanna, the daughter of the Earl of Ormond, and wife of Teige O'Carroll, Lord of Ely, died of it the plague.</p>
<h5><strong>1411</strong> | <a href="">CELT: Annals of the Four Masters 1411.3</a></h5>
<p>Owen, the son of Murrough O'Madden, Lord of Sil-Anmchadha, died.</p>
<h5><strong>1411</strong> | <a href="">CELT: Annals of the Four Masters 1411.5</a></h5>
<p>Cobhthach O'Madden, heir to the lordship of his own territory, died.</p>
<h5><strong>1413</strong> | <a href="">CELT: Annals of the Four Masters 1413.4</a></h5>
<p>Cathal, the son of Owen O'Madden, Lord of Sil-Anmchadha, died.</p>
<h5><strong>1430</strong> | <a href="">CELT: Annals of the Four Masters 1430.3</a></h5>
<p>Another great army was led by Owen O'Neill, with the chiefs of the province about him, into Annaly. He went first to Sean Longphort, and from thence to Caill-Salach, where he abode for some time. He afterwards went to Freamhainn, in Meath, to which place the Irish of the South, namely, O'Conor Faly, i.e. Calvagh, O'Molloy, O'Madden, Mageoghegan, and O'Melaghlin, came to meet him, and accept of stipends from him. The whole of West Meath, including Kilbixy, was burned by these forces, upon which the Baron of Delvin, the Plunketts, the Herberts, and the English of Westmeath in general, came to meet O'Neill, to pay him his demands for sparing their country. These they afterwards paid, and they made peace. Owen returned home after victory and triumph, bringing with him the son of O'Farrell, i.e. the son of Donnell Boy, to Dungannon, as a hostage for O'Farrell's lordship.</p>
<h5><strong>1441</strong> | <a href="">CELT: Annals of the Four Masters 1441.13</a></h5>
<p>O'Madden's castle, i.e. the castle of Port-an-Tulchain on the Shannon, was taken by Mac William Uachtrach and the Clann-Rickard from O'Madden; and the son of O'Madden and fourteen hostages who were in the castle were taken, together with much spoil in armour and arms.</p>
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
  <h2>Owen O'Madden</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument17.php">Instrument 17</a></li>
  </ul>
  <h4>About</h4>
<p>Owen O'Madden was an underlord of Turloch O'Conor Don.</p>
  <h4>Location</h4>
  <p><a href="/places/PortanTulchain.php">Port an Tulchain</a></p>
  <h4>Further Reading</h4>
  <p><strong>Curtis's biographical note: </strong>O’Madden or Madadhain, Eoghan, is given as one of O’Conor Don’s urraghts, p. 180. He was lord of Sil Anmchadha, now the barony of Longford in south-east Galway and the parish of Lusmagh on the east side of the Shannon in King’s County.</p>
  <p>Thomas More Madden, "The O'Maddens of Silanchia, or Siol Anmmachadha, and their descendants, from the Milesian Invasion to the present time," <i>Journal of the Galway Archaeological and Historical Society</i>, 1, no. 3 (1901): 184-195.</p>
  <p>Hubert Thomas Knox, <a href="https://books.google.com/books?id=wDcwAAAAMAAJ&printsec=frontcover"><i>History of the County of Mayo to the Sixteenth Century</i></a> (Dublin: Hodges, Figgis & Co, 1908): 140.</p>
<br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
