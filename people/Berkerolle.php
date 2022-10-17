
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: Berkerolle</title>
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
    <h1>Berkerolle</h1>
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
    L.marker([51.522118189614524, -3.5532030889493202], {icon: castleIcon}).bindPopup('<strong>Location: Coity Castle</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
<h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><strong>1350</strong> | <a href="https://archive.org/details/cartetaliamunim01abbegoog/page/n27/mode/2up"><i>Cartae et alia munimenta quae ad Dominium de Glamorgan pertinent</i>, Volume II, 2.</a></h5>
  <p>Sir Roger de Berkerols. Letter of Attorney.</p>
<h5><strong>1351</strong> | Photographs of the Berkerolles' tomb in St. Tathan's Church, St. Athan, Vale of Glamorgan, Wales</h5>
<p>The Berkerolle tombs in St. Tathan's Church were the resting place of (among others) Sir Roger Berkerolle and his wife Katherine, Sir Lawrence Berkerolle's parents. View photographs <a href="https://coflein.gov.uk/en/archive/6239926/">taken from foot of tomb</a> and <a href="https://coflein.gov.uk/en/archive/6239926/">from the side of tomb</a></p>
<h5><strong>1369</strong> | <a href="https://archive.org/details/cartetaliamunim01abbegoog/page/n41/mode/2up"><i>Cartae... quae ad Glanmorgan pertinent</i>, Volume II, 10-11</a> (also printed in <a href="https://archive.org/details/cartaeetaliamuni04claruoft/page/1322/mode/2up">Volume IV, 1323-4).</a></h5>
  <p>Grant in tail by John Gay and others of the manors of Norchard-Berkeroles, etc., with remainders to Sir Laurence Berkeroles and his wife.</p>
<h5><strong>1384</strong> | <a href="https://archive.org/details/cartetaliamunim01abbegoog/page/n51/mode/2up"><i>Cartae... quae ad Glanmorgan pertinent</i>, Volume II, 26-28.</a></h5>
<p>Sir Laurence and Elizabeth Berkerols. Lease of Merthyr Maur.</p>
<h5><strong>1392</strong> | <a href="https://archive.org/details/cartetaliamunim01abbegoog/page/n59/mode/2up"><i>Cartae... quae ad Glanmorgan pertinent</i>, Volume II, 35-36.</a></h5>
<p>Sir Laurence and Elizabeth Berkeroulle concerning lands in Coytif.</p>
<h5><strong>1402</strong> | <a href="https://archive.org/details/cartetaliamunim01abbegoog/page/n91/mode/2up"><i>Cartae... quae ad Glanmorgan pertinent</i>, Volume II, 69-70.</a></h5>
<p>Indenture between Laurence Berkerolles and Nicholas Sonde and others, concerning a messuage, etc., in Merthyr Maur.</p>
<h5><strong>1411</strong> | <a href="https://archive.org/details/cartetaliamunim01abbegoog/page/n95/mode/2up"><i>Cartae... quae ad Glanmorgan pertinent</i>, Volume II, 73.</a></h5>
<p>Letters of attorney by Sir Laurence Berkerolles to John Stradling, to give seizin of Laurenceland in Coyty.</p>
<h5><strong>1411</strong> | <a href="https://archive.org/details/cartetaliamunim01abbegoog/page/n95/mode/2up"><i>Cartae... quae ad Glanmorgan pertinent</i>, Volume II, 73-74.</a></h5>
<p>Grant by John Machon and others to John de Stradelyng, otherwise de Anne, of Laurenceland in Coyty.</p>
<h5><strong>1411</strong> | <a href="https://babel.hathitrust.org/cgi/pt?id=mdp.39015066344717&view=1up&seq=238&skin=2021"><i>Calendar of Fine Rolls</i>, Volume 13, 226-7.</a></h5>
<p></p>
<h5><strong>1411</strong> | <a href="https://archive.org/details/cartetaliamunim01abbegoog/page/n97/mode/2up"><i>Cartae... quae ad Glanmorgan pertinent</i>, Volume II, 75-78.</a></h5>
<p>Inquisition after the death of Sir Laurence Berkerolles, Knight.</p>
<h5><strong>1414</strong> | <a href="https://inquisitionspostmortem.ac.uk/view/inquisition/20-210">Inquisition Post Mortem of Lawrence Berkkerolles</a></h5>
<p></p>
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
  <h2>Lawrence Berkerolle</a></h2>
  <h4 style="text-align: center;">Alternate Spellings: Verkerell</h4>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument15.html">Instrument 15</a></li>
  </ul>
  <h4>About</h4>
    <p>Sir Lawrence Berkerolle was lord of Coity in Wales. In addition to accompanying Richard II to Ireland, he was also involved in conflicts in the March of Wales. In 1404, his castle of Coity was besieged by Owain Glyndŵr.</p>
  <h4>Location</h4>
  <p><a href="/places/CoityCastle.php">Coity Castle</a></p>
  <h4>Further Reading</h4>
  <p>Ray Caple et al, <a href="https://valeofglamorgan.gov.uk/files/Living/Planning/Policy/County_Treasures/St_Athan.pdf"><i>Vale of Glamorgan County Treasures: St Athan</i></a> (Vale of Glamorgan Council, 2007).</p>
  <p>Ralph A. Griffiths, <a href="https://journals.library.wales/view/1169834/1175103/12#?xywh=-683%2C208%2C4302%2C2838">"Owain Glyndŵr and the siege of Coity Castle, 1404-1405,"</a> <i>Morgannwg transactions of the Glamorgan Local History Society</i> 45 (2001): 5-28.</p>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
