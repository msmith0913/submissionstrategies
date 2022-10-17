<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: O'Carroll</title>
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
    <h1>O'Carroll</h1>
    <div class="row">
      <div class="column">
  <p>Jump to:
  <ul>
    <li><a target="_self" href="/people/OCarroll.php#TadhgOCarroll">Tadhg O'Carroll</a></li>
    <li><a target="_self" href="/people/OCarroll.php#WilliamOCarroll">William O'Carroll</a></li></ul></p>
  <h4>Futher reading on the O'Carroll family</h4>
  <p>Rolf Loeber, "The changing borders of the Ely O'Carroll lordship" in William Nolan and Timothy O'Neill, eds., <i>Offaly: History and Society</i> (Dublin: Geography Publications, 1998): 287-318</p>
  <p>Timothy Venning, "The O'Carrols of Offaly: their relations with the Dublin authorities in the sixteenth century" in <i>Offaly: History and Society</i>: 181-206
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
    L.marker([53.09741653963109, -7.9157475753839455], {icon: castleIcon}).bindPopup('<strong>Location: Black Castle</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
<h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><strong>1377</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.5">CELT: Annals of the Four Masters 1377.3</a></h5>
<p>Walter, son of Sir David Burke; Donnell, son of Farrell, son of the Manach O'Gallagher; Geoffrey O'Flanagan, Chief of Clann-Chathail; Donough, son of William Alainn; O'Carroll, Lord of Ely; Dermot Bacagh Mac Branan, Chief of Corcachlann; Faghtna, son of David O'More; and Brian O'Flaherty, died.</p>
<h5><strong>1380</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.8">CELT: Annals of the Four Masters 1380.13</a></h5>
<p>Kian, the son of Rory O'Carroll, worthy heir to the lordship of Ely, was slain by Hugh, the son of Murtough O'Molloy, with one cast of a javelin.</p>
<h5><strong>1383</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.11">CELT: Annals of the Four Masters 1383.9</a></h5>
<p>Murrough na-Raithnighe O'Brien, More, the daughter of Murrough O'Madden, and wife of Mac William of Clanrickard (Richard); and Joanna, the daughter of the Earl of Ormond, and wife of Teige O'Carroll, Lord of Ely, died of it the plague.</p>
<h5><strong>1392</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.20">CELT: Annals of the Four Masters 1392.6</a></h5>
<p>Turlough Mac Brien of Hy-Cuanagh; Rory, son of Donough O'Carroll, Tanist of Ely; and Finola, the daughter of Manus, son of Cathal O'Conor, died.</p>
<h5><strong>1395</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.23">CELT: Annals of the Four Masters 1395.8</a></h5>
<p>A party of the people of the King of England set out on a predatory excursion into Offaly. O'Conor pursued them to the causeway of Cruachain, where great numbers of them were slain, and sixty horses taken from them. Another party of the people of the King of England, under the conduct of the Earl Maruscal, set out upon a predatory excursion into Ely. O'Carroll and his people came up with them, killed many of the English, and took many horses from them.</p>
<h5><strong>1407</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.35">CELT: Annals of the Four Masters 1407.3</a></h5>
<p>The son of Teige, son of Mahon Don O'Kennedy, Lord of Upper Ormond, was slain by O'Carroll.</p>
<h5><strong>1407</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.35">CELT: Annals of the Four Masters 1407.4</a></h5>
<p>A battle was gained by the English over the Irish of Munster, in which O'Carroll, Lord of Ely, general patron of the literati of Ireland, was killed.</p>
<h5><strong>1421</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.49">CELT: Annals of the Four Masters 1421.8</a></h5>
<p>More, the daughter of Brian O'Brien, and wife of Walter Burke, and who had been married to Teige O'Carroll, the most distinguished woman in her time, in Leath Mogha, for knowledge, hospitality, good sense, and piety, died. She was usually called Mor-Mumhan-na-Muimhneach.</p>
<h5><strong>1432</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.60">CELT: Annals of the Four Masters 1432.20</a></h5>
<p>A great war broke out between O'Carroll, Lord of Ely, and the Earl of Ormond; and the Earl marched at the head of a great army into Ely, ravaged the country, and demolished O'Carroll's two castles.</p>
<h5><strong>1433</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.61">CELT: Annals of the Four Masters 1433.8</a></h5>
<p>Two general invitations of hospitality were given to the colleges and professional men by Margaret, the daughter of O'Carroll, and wife of O'Conor Faly (Calvagh).</p>
<h5><strong>1443</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.71">CELT: Annals of the Four Masters 1443.6</a></h5>
<p>Mulrony, the son of Teige O'Carroll, Lord of Ely, died.</p>
<h5><strong>1447</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.75">CELT: Annals of the Four Masters 1447.7</a></h5>
<p>Finola, the daughter of Calvagh O'Conor Faly, and of Margaret, daughter of O'Carroll, who had been first married to O'Donnell, and afterwards to Hugh Boy O'Neill, the most beautiful and stately, the most renowned and illustrious woman of her time in all Ireland, her own mother only excepted, retired from this transitory world, to prepare for life eternal, and assumed the yoke of piety and devotion, in the monastery of Cill-achaidh.</p>
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
  <h2><a id="TadhgOCarroll">Tadhg O'Carroll</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument19.php">Instrument 19</a></li>
    <li><a href="/instruments/Instrument2.php">Instrument 20</a></li>
  </ul>
  <h4>About</h4>
  <h4>Location</h4>
  <p><a href="/places/BlackCastle.php">Black Castle</a></p>
  <h4>Further Reading</h4>
  <p><strong>Curtis's biographical note: </strong>O’Carrol or O’Cearbhaill, Taig or Tatheus, see pp. 182-3. Taig’s country was Eli O’Carrol around Birr and under the Slieve Bloom; it covered the present baronies of Clonlisk and Ballybrit in modern King’s County. This Taig, son of Taig, was a famous warrior, and was finally killed by the fourth Earl of Ormond in a battle at Callan in 1407.</p>
  <br/>
  <h2><a id="WilliamOCarroll">William O'Carroll</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument19.php">Instrument 19</a></li>
    <li><a href="/instruments/Instrument20.php">Instrument 20</a></li>
  </ul>
  <h4>About</h4>
  <h4>Location</h4>
  <p><a href="/places/BlackCastle.php">Black Castle</a></p>
  <h4>Further Reading</h4>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
