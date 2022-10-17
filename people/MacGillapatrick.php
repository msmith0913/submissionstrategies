<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: MacGillapatrick</title>
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
    <h1>MacGillapatrick</h1>
    <p>Jump to:
    <ul>
      <li><a target="_self" href="/people/MacGillapatrick.php#FinghinMacGillapatrick">MacGillapatrick</a></li>
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
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
  <h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
  <h5><strong>1367</strong> | <a href="">CELT: Annals of the Four Masters 1367.6</a></h5>
  <p>Melaghlin, the son of Geoffry Mac Gillapatrick, and a party of his people were treacherously slain by the English.</p>
  <h5><strong>1383</strong> | <a href="">CELT: Annals of the Four Masters 1383.12</a></h5>
  <p>Honora, daughter of William Burke, and wife of O'Meagher; Mac Gillapatrick, Lord of Ossory; and the son of Kellagh Mac Gillapatrick, Tanist of Ossory, all died of the same plague.</p>
  <h5><strong>1421</strong> | <a href="">CELT: Annals of the Four Masters 1421.12</a></h5>
  <p>Mac Gillapatrick and the son of Libned a Frene, one of the English, set out with twelve score soldiers on a predatory excursion into Leix, and did not halt until they reached the monastery of Leix; but O'Conor Faly happened to come in contact with them in that country, and attacked Mac Gillapatrick and the English, and defeated and slaughtered them, and his people obtained great spoils of the armour, arms, and accoutrements of the English. O'Conor (Murrough) then returned home; but he was attacked by a dangerous disease, whereupon he retired among the friars in the monastery of Killeigh, and took the habit of a friar; but before his death he appointed his own kinsman, Dermot O'Conor, in his place. O'Conor was only a month among the friars, when he died, after a well-spent life.</p>
  <h5><strong>1431</strong> | <a href="">CELT: Annals of the Four Masters 1431.16</a></h5>
  <p>Donnell Mac Gillapatrick, the son of the Lord of Ossory, died.</p>
  <h5><strong>1440</strong> | <a href="">CELT: Annals of the Four Masters 1440.15</a></h5>
  <p>O'Conor Faly, his sons, and his brother Cahir, went upon a predatory incursion into Leix, O'Moore's territory; but, after having sent the prey on before them, they were overtaken by the Earl of Desmond, and by Mac Gillapatrick, who defeated O'Conor, and killed his son Con, together with sixty of his soldiers.</p>
  <h5><strong>1443</strong> | <a href="">CELT: Annals of the Four Masters 1443.4</a></h5>
  <p>Fineen and Dermot, two sons of Mac Gillapatrick, Lord of Ossory, were treacherously slain at Kilkenny, at the instigation of Mac Richard Butler.</p>

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
  <h2 id="FinghinMacGillapatrick">Finghin MacGillapatrick</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument15.php">Instrument 15</a></li>
  </ul>
  <h4>About</h4>
    <p>Finghin MacGillapatrick was lord of Upper Ossory.</p>
  <h4>Location</h4>
  <p><a href="/places/Aghaboe.php">Aghaboe</a></p>
  <h4>Further Reading</h4>
  <p><strong>Curtis's biographical note: </strong>MacGillapatrick, Finan (or Finghin), see p. 168. MacGillapatraic, now FitzPatrick, was the patronymic of the old kings of Ossory. Since the Conquest their descendants had been driven by the Butlers and other English into the hilly country of Upper Ossory, that part of south Queen’s County which lies between the Nore and the border of Kilkenny.</p>
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
