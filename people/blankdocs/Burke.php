<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Burke</title>
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
    <h1>Burke/de Burgo</h1>
    <div class="row">
      <div class="column">
  <p>Jump to:
  <ul>
    <li><a target="_self" href="/people/OCarroll.php#DavidGallBurke">David Gall Burke</a></li>
    <li><a target="_self" href="/people/OCarroll.php#TheobaldFitzWalter">Theobald FitzWalter Burke</a></li>
    <li><a target="_self" href="/people/OCarroll.php#WilliamdeBurgo">William de Burgo</a></li>
    <li><a target="_self" href="/people/OCarroll.php#ThomasdeBurgo">Thomas de Burgo</a></li>
  </ul>
</p>
  <h4>Futher reading on the Burke family</h4>
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
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
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
  <h2><a id="DavidGallBurke">David Gall Burke</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument17.php">Instrument 17</a></li>
  </ul>
  <h4>About</h4>
  <h4>Location</h4>
  <p></p>
  <h4>Further Reading</h4>
  <p><strong>Curtis's biographical note: </strong>Burgo, Davy ‘Gall’ de, see p. 180. A descendant of Richard, Red Earl of Ulster, who founded a branch called the Gall (‘English’) Burkes of Gaulstown in County Kilkenny. In 1398 Walter MacDavid Burke was slain by the English of Munster (<i>LC</i>).</p>
  <br/>
  <h2><a id="TheobaldFitzWalter">Theobald FitzWalter Burke</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument17.php">Instrument 17</a></li>
  </ul>
  <h4>About</h4>
  <h4>Location</h4>
  <p></p>
  <h4>Further Reading</h4>
  <p><strong>Curtis's biographical note: </strong>Fitzwalter, Theobald, see p. 180. This would appear to be one of the Castleconnell Burkes of Limerick and Tipperary, a family sprung from Edmund, son of the Red Earl. Edmund’s grandson, Walter, had three sons, Richard, Edmund, and Theobald; the latter is probably our Theobald FitzWalter. The father divided the family estates among the three (MS. Tract on Burkes of Castleconnell, R.I.A. 23. G. 22.).</p>
    <br/>
    <h2><a id="WilliamdeBurgo">William de Burgo</a></h2>
    <h4>Submission Documents</h4>
    <ul>
      <li><a href="/instruments/Instrument17.php">Instrument 17</a></li>
      <li><a href="/instruments/Instrument23.php">Instrument 23</a></li>
    </ul>
    <h4>About</h4>
    <h4>Location</h4>
    <p></p>
    <h4>Further Reading</h4>
    <p><strong>Curtis's biographical note: </strong>Burgo, William de, see pp. 180, 186. After the murder in 1333 of William ‘Donn’, the last De Burgo Earl of Ulster and Lord of Connacht, his only child Elizabeth married Lionel  of Clarence and so finally brought the earldom to the Mortimers, but the two sons of William ‘Liath’ De Burgo, kinsmen of the dead Earl, namely William or Ulick and Edmund ‘Albanach’, seized the Connacht possessions. William founded the Galway or Clanrickard Burkes, also called MacWilliam Uachtar, ‘the Upper’, and Edmund the Mayo Burkes or MacWilliam Iochtar, ‘the Lower’. In 1375 Thomas, son of Edmund, succeeded his father. In 1387 Richard Og, son of William, died and was succeeded by his son William who submits in 1395. FM under this year assert that Thomas ‘went into the King’s house and received the Lordship of the English of Connacht’, but our Submissions do not record the event. Both were regarded as rebels and usurpers of Mortimer’s lands in Connacht; they were already far hibernicized, for Edmund Albanach had married Saiv O’Malley and Ricard Og of Clanrickard had an Irish wife, More O’Madden. They were constantly at war with one another, as witness <i>LC</i>.</p>
      <br/>
      <h2><a id="ThomasdeBurgo">Thomas de Burgo</a></h2>
      <h4>Submission Documents</h4>
      <ul>
        <li><a href="/instruments/Instrument32.php">Instrument 32</a></li>
      </ul>
      <h4>About</h4>
      <p>Thomas de Burgo did not submit himself, but he is referenced in the submission of Malachy O'Kelly as an ally. O'Kelly complains that he "should have visited [Richard] on the first days of [his] joyful coming to Ireland, only that [Malachy] was prevented, by [Richard's] and therefore [Malachy's] enemies and rivals continually warring against me and Thomas de Burgo, [Richard's] faithful liege."
      <h4>Location</h4>
      <p></p>
      <h4>Further Reading</h4>
      <p><strong>Curtis's biographical note: </strong>Fitzwalter, Theobald, see p. 180. This would appear to be one of the Castleconnell Burkes of Limerick and Tipperary, a family sprung from Edmund, son of the Red Earl. Edmund’s grandson, Walter, had three sons, Richard, Edmund, and Theobald; the latter is probably our Theobald FitzWalter. The father divided the family estates among the three (MS. Tract on Burkes of Castleconnell, R.I.A. 23. G. 22.).</p>
        <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
