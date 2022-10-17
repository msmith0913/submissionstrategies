<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: MacCarthy of Muskerry</title>
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
    <h1>MacCarthy of Muskerry</h1>
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
    L.marker([51.90520051539335, -8.96220776599217], {icon: castleIcon}).bindPopup('<strong>Location: Macroom Castle</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
  <h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><strong>1356</strong> | <a href="http://research.ucc.ie/celt/document/T100005C#Annal.185">CELT: Annals of the Four Masters 1356.8</a></h5>
<p>Dermot, the son of Dermot Mac Carthy, and Donough, his son, were slain by the son of O'Sullivan.</p>
<h5><strong>1375</strong> | <a href="https://chancery.tcd.ie/document/patent/49-edward-iii/272">CIRCLE: Patent Roll 49 Edward III, 6 August 1375</a></h5>
<p>... Of his special grace, the K. has granted and given licence to Anne, who was the wife of David de la Roche kt to receive Cormacus s. of Dermicius McKarty, born of Katherine, daughter of David, and to cherish and keep him in fostership [in debito nutrimento fovere et custodire] as often as she may be asked, and may return Cormacus to the said Dermicius and Katherine or either of them at their wish, without impediment. ...</p>
<h5><strong>1381</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.9">CELT: Annals of Ulster 1381.6</a></h5>
<p>Diarmait Mag Carthaigh, namely, heir of the king of Desmond, was killed by the Ui-Mathgamna of Fonniartharach in treachery.</p>
<h5><strong>1387</strong> | <a href="https://chancery.tcd.ie/document/patent/10-richard-ii/271">CIRCLE: Patent Roll 10 Richard II, 16 May 1387</a></h5>
<p>Similar APPOINTMENT [as keepers of the peace in co. Cork, as in §270] addressed to the following persons, viz.:</p>
<p>Thomas s. of John kt; John s. of Maurice s. of Richard; Raymond Caunton and William his son; John Roch Barry; Nicholas Poer and Walter s. of Peter le Poer; Maurice s. of Maurice Mac Gybon; Thomas Mac Shane Mac Gybon; David Barry kt and John his son ; John Roche; John Barret; Taddeus son of Dermitius Mac Carthy; Richard Burgo kt and David his son; Cormacus s. of Donatus Mac Carthy; Robert s. of David Barry.</p>
<h5><strong>1403</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.31">CELT: Annals of the Four Masters 1403.12</a></h5>
<p>Cormac, the son of Donough Mac Carthy, died.</p>
<h5><strong>1421</strong> | <a href="http://research.ucc.ie/celt/document/T100001C#Year.43">CELT: Annals of Ulster 1421.8</a></h5>
<p>Cormac Mag Carthaigh of the Wood was slain by the sons of Eogan Mag Carthaigh: to wit, the one son of a king who was best in generosity and prowess that was of the Momonians in his own time.</p>
<h5><strong>1421</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.49">CELT: Annals of the Four Masters 1421.9</a></h5>
<p>Cormac na Coille Mac Carthy of Carbery, the best son of a lord of the Momonians in his time, was slain hy the sons of Owen Mac Carthy.</p>
<h5><strong>1435</strong> | <a href="http://research.ucc.ie/celt/document/T100001C#Year.57">CELT: Annals of Ulster 1435.2</a></h5>
<p>Domnall, son of Eogan Mag Carthaigh, namely, the best general protector that was in Ireland in his time, fell by Tadhg, son of Cormac, son of Diarmait Mag Carthaigh.</p>
<h5><strong>1435</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.63">CELT: Annals of the Four Masters 1435.7</a></h5>
<p>Donnell, the son of Owen Mac Carthy, a general supporter of the poor and the destitute, was slain by Teige, the son of Cormac, son of Dermot Mac Carthy.</p>

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
  <h2>Cormac mac Dermot MacCarthy of Muskerry</h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument35.php">Instrument 35</a></li>
  </ul>
  <h4>About</h4>
  <p>Cormac mac Dermot MacCarthy was the son of Dermot Mór MacCarthy, lord of Muskerry, and Katherine Roche and was fostered by his grandmother Anna, a daughter of Maurice FitzThomas, 1st Earl of Desmond. (Curtis incorrectly states that Cormac's father died in 1367. In fact he died in 1381, killed by the O'Mahonys.)</p>
  <h4>Location</h4>
  <p><a href="/places/MacroomCastle.php">Macroom Castle</a></p>
  <h4>Further Reading</h4>
  <p><strong>Curtis's biographical note: </strong>Cormac, son of Dermot, was cousin of Taig and Lord of Muskerry in west Cork, a lordship founded by his father Dermot, son of Donal Og, who died in 1368.</p>
  <p><a href="https://archive.org/details/irishhistory0000unse">W.F.T. Butler, <i>Gleanings from Irish History</i> (London: Longmans, Green and Co, 1925): 157-194.</a></p>
  <p>K.W. Nicholls, <i>Gaelic and Gaelicized Ireland in the Middle Ages</i> (Dublin: Lilliput Press, 2003: 186-191.</p>
  <p>Kenneth Nicholls, "The Development of Lordship in County Cork, 1300-1600" in Patrick O'Flanagan and Cornelius G. Buttimer, eds., <i>Cork: History and Society</i> (Dublin: Geography Publications, 1993): 157-211.</p>
  <p>Diarmuid Ó Murchadha, <i>Family Names of County Cork</i> (Cork: Collins Press, 1996): 53-58.</p>
  <p><a href="https://archive.org/details/maccarthysofmuns01mcca/page/n5/mode/2up">Samuel Trant MacCarthy, <i>The MacCarthys of Munster: The Story of a Great Irish Sept</i> (Dundalk: Dundalgan Press, 1922).</a></p>
      <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
