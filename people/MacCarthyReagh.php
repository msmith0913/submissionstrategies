<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: MacCarthy Reagh</title>
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
    <h1>MacCarthy Reagh</h1>
    <div class="row">
      <div class="column">
  <p>Jump to:
  <ul>
    <li><a target="_self" href="/people/MacCarthyReagh.php#DonalMacCarthyReagh">Donal MacCarthy Reagh</a></li>
    <li><a target="_self" href="/people/MacCarthyReagh.php#CormacMacCarthyReagh">Cormac MacCarthy Reagh</a></li></ul></p>
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
    L.marker([51.67552178247685, -8.679032758580476], {icon: castleIcon}).bindPopup('<strong>Location: Kilbrittain Castle</strong>').addTo(map);
    </script>
</div>
</div>
<h4>Futher reading on the MacCarthy Reagh family</h4>
<p><strong>Curtis's biographical note: </strong>MacCarthy or MacCarrthaigh; Taig, Cormac son of Dermot, Donal, Cormac son of Donal, see p. 158, 192, 198. Taig or Tadhg MacCarthy Mor (‘Maior’), Princeps Hibernicorum Dessemonie, was son of Donal Og and became King of Desmond in 1391. He married Joan, daughter of the third Earl of Desmond. As the senior MacCarthy he was suzerain over the otherr branches of the family. Cormac, son of Dermot, was cousin of Taig and Lord of Muskerry in west Cork, a lordship founded by his father Dermot, son of Donal Og, who died in 1368. Donal MacCarthy was head of the family of MacCarthy Reagh of Carbery in south-west Cork, the next most important branch after MacCarthy Mor, and Cormac who submits with him is probably his son, founder of a sept called ‘Sliocht Chormaic na Coille’. The MacCarthys at the time were making a constant advance at the expense of the Cogans, Lombards, Barrys, and Barrets of mid Cork.</p>
  <p><a href="https://archive.org/details/irishhistory0000unse">W.F.T. Butler, <i>Gleanings from Irish History</i> (London: Longmans, Green and Co, 1925): 157-194.</a></p>
  <p>K.W. Nicholls, <i>Gaelic and Gaelicized Ireland in the Middle Ages</i> (Dublin: Lilliput Press, 2003: 186-191.</p>
  <p>Kenneth Nicholls, "The Development of Lordship in County Cork, 1300-1600" in Patrick O'Flanagan and Cornelius G. Buttimer, eds., <i>Cork: History and Society</i> (Dublin: Geography Publications, 1993): 157-211.</p>
  <p>Brian Ó Cuív, “A Poem for Fínghin Mac Carthaigh Riabhach,” <i>Celtica</i> 15 (1983): 96–110.</p>
  <p>Diarmuid Ó Murchadha, <i>Family Names of County Cork</i> (Cork: Collins Press, 1996): 53-58.</p>
  <p><a href="https://archive.org/details/maccarthysofmuns01mcca/page/n5/mode/2up">Samuel Trant MacCarthy, <i>The MacCarthys of Munster: The Story of a Great Irish Sept</i> (Dundalk: Dundalgan Press, 1922).</a></p>
  <p><a href="http://etheses.dur.ac.uk/2818/1/2818_896.pdf">Keith Alan Waters, “The Earls of Desmond in the Fourteenth Century,” (Ph.D. thesis, Durham University, 2004)</a></p>


<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
<h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><strong>1366</strong> | <a href="http://research.ucc.ie/celt/document/T100005C#Annal.195">CELT: Annals of the Four Masters 1366.4</a></h5>
<p>Cormac Don Mac Carthy, Lord of Carbery, and of Ivahagh of Munster, was treacherously slain by his relative, the son of Donnell na-n-Domhnall.</p>
<h5><strong>1368</strong> | <a href="http://research.ucc.ie/celt/document/T100005C#Annal.197">CELT: Annals of the Four Masters 1368.8</a></h5>
<p>Dermot, the son of Cormac Donn Mac Carthy, was taken prisoner by Mac Carthy, of Carbery, and by him delivered up to the English, who afterwards put him to death.</p>
<h5><strong>1387</strong> | <a href="https://chancery.tcd.ie/document/patent/10-richard-ii/271">CIRCLE: Patent Roll 10 Richard II, 16 May 1387</a></h5>
<p>Similar APPOINTMENT [as keepers of the peace in co. Cork, as in §270] addressed to the following persons, viz.:</p>
<p>Thomas s. of John kt; John s. of Maurice s. of Richard; Raymond Caunton and William his son; John Roch Barry; Nicholas Poer and Walter s. of Peter le Poer; Maurice s. of Maurice Mac Gybon; Thomas Mac Shane Mac Gybon; David Barry kt and John his son ; John Roche; John Barret; Taddeus son of Dermitius Mac Carthy; Richard Burgo kt and David his son; Cormacus s. of Donatus Mac Carthy; Robert s. of David Barry.</p>
<h5><strong>1398</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.26">CELT: Annals of the Four Masters 1398.17</a></h5>
<p>A very great defeat was given by Mac Carthy of Carbery to O'Sullivan, and the two sons of O'Sullivan, Owen and Conor, together with many others, were slain in the conflict.</p>
<h5><strong>1404</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.32">CELT: Annals of the Four Masters 1404.12</a></h5>
<p>A war broke out between Mac Carthy and O'Sullivan Boy. Turlough Meith Mac Mahon, who was at this time Mac Carthy's chief maritime officer, came up at sea with O'Sullivan and the sons of Dermot Mac Carthy, who were aiding O'Sullivan against Mac Carthy; and he drowned O'Sullivan, and made a prisoner of Donnell, the son of Dermot Mac Carthy, on this occasion.</p>
<h5><strong>1414</strong> | <a href="http://research.ucc.ie/celt/document/T100001C#Year.36">CELT: Annals of Ulster 1414.5</a></h5>
<p>Mag Carthaigh the Carbrian died this year, namely, Domnall.</p>
<h5><strong>1414</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.42">CELT: Annals of the Four Masters 1414.6</a></h5>
<p>Mac Carthy Cairbreach, i.e. Donnell, the son of Donnell, died.</p>
<h5><strong>1414</strong> | <a href="https://www.isos.dias.ie/libraries/NUIM/NUIM_MS_C_110/english/catalogue.html">Colophon in the <i>Specularium</i> of Arnaldus of Villa Nova (Maynooth University MS C 110)</a></h5>
<p><i>Eoin O Callannain a scríobh a bhformhór seo i Cill Breatain; dáta 15-5-1414.</i> (Owen O'Callanan wrote the majority of this at Kilbrittain, May 15, 1414.)</p>
<p>Mac Carthy Cairbreach, i.e. Donnell, the son of Donnell, died.</p>
<h5><strong>ca. 1414</strong> | <a href="https://bardic.celt.dias.ie/displayPoem.php?firstLineID=323">Bardic Poetry Database: An elegy for Donal MacCarthy Reagh by Maolmhuire MacCraith or <i>an Brathair Bocht</i> Ó Dálaigh</a></h5>
<p>First line: <i>Beart chluithe ar Éirinn ég ríogh</i></p>
<h5><strong>ca. 1414</strong> | <a href="https://bardic.celt.dias.ie/displayPoem.php?firstLineID=585">Bardic Poetry Database: An elegy for Donal MacCarthy Reagh by an unnamed poet</a></h5>
<p>First line: <i>Cumhaidh íocas onóir ríogh</i></p>
<h5><strong>1418</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.46">CELT: Annals of the Four Masters 1418.1</a></h5>
<p>The Bishop O'Driscoll, Maccon O'Driscoll (his brother), Lord of Corca-Laighe, and Dermot Mac Carthy Cluasach, Tanist of Hy-Cairbre, died.</p>
<h5><strong>1421</strong> | <a href="http://research.ucc.ie/celt/document/T100001C#Year.43">CELT: Annals of Ulster 1421.8</a></h5>
<p>Cormac Mag Carthaigh of the Wood was slain by the sons of Eogan Mag Carthaigh: to wit, the one son of a king who was best in generosity and prowess that was of the Momonians in his own time.</p>
<h5><strong>1421</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.49">CELT: Annals of the Four Masters 1421.9</a></h5>
<p>Cormac na Coille Mac Carthy of Carbery, the best son of a lord of the Momonians in his time, was slain hy the sons of Owen Mac Carthy.</p>
<h5><strong>1430</strong> | <a href="http://research.ucc.ie/celt/document/T100001C#Year.52">CELT: Annals of Ulster 1430.5</a></h5>
<p>Great war arose this year between Mag Carthaigh the Grey and the Earl. The castle of Cell Britain was taken by the Earl, namely; James, from Mag Carthaigh the Grey, and the Earl gave it to Donchadh Mag Carthaigh, that is, the brother of the Mag Carthaigh, who was along with himself at the taking of that castle and so forth.</p>
<h5><strong>1430</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.58">CELT: Annals of the Four Masters 1430.6</a></h5>
<p>A great war broke out between Mac Carthy Reagh and the Earl, i.e. James. The castle of Cill-Britain was taken by the Earl from Mac Carthy, and given to Donough Mac Carthy, Mac Carthy's own brother, who was along with him in storming the castle.</p>
<h5><strong>1432</strong> | <a href="http://research.ucc.ie/celt/document/T100001C#Year.54">CELT: Annals of Ulster 1432.5</a></h5>
<p>Eogan, son of Mag Carthaigh the Grey, went on a raid against Kinsale. Eogan was slain by the folk of Kinsale with one cast of a javelin, and so on.</p>
<h5><strong>1432</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.60">CELT: Annals of the Four Masters 1432.7</a></h5>
<p>Owen, son of Mac Carthy Reagh, went upon a predatory incursion to Kinsale, and was killed by one shot.</p>
<h5><strong>1442</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.70">CELT: Annals of the Four Masters 1442.1</a></h5>
<p>Mac Carthy Reagh, Lord of Ivahagh in Munster, died.</p>
<h5><strong>1442</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.70">CELT: Annals of the Four Masters 1442.10</a></h5>
<p>Donnell Glas Mac Carthy, Lord of Hy-Carbery, died.</p>
<h5><strong>1446</strong> | <a href="http://research.ucc.ie/celt/document/T100001C#Year.68">CELT: Annals of Ulster 1446.5</a></h5>
<p>Edmond, son of Mac Maurice of Kerry, was slain by Cormac, son of Eogan Mac Carthaigh.</p>
<h5><strong>1446</strong> | <a href="http://research.ucc.ie/celt/document/T100005D#Annal.74">CELT: Annals of the Four Masters 1446.17</a></h5>
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
  <h2><a id="DonalMacCarthyReagh">Donal Reagh MacCarthy Reagh</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument30.php">Instrument 30</a></li>
  </ul>
  <h4>About</h4>
  <p>Donal Reagh, the eponymous founder of the MacCarthy Reagh dynasty, was lord of Carbery in west Cork from 1366 to 1414. He was married to Joanna FitzMaurice, possibly a daughter of FitzMaurice. Donal expanded the lordship aggressively, taking the castle of Kilbrittain from the de Courcys and making it the seat of his lordship. He was also a patron of poets and scholars. His death was commemorated in two elegies, and a colophon in a medical manuscript produced by his physician provides Kilbrittain as his place of death. Following his death, however, the lordship (and indeed many of the Munster lordships) descended into internecine disputes that consumed the region for decades.</p>
  <h4>Location</h4>
  <p><a href="/places/Kilbrittain.php">Kilbrittain Castle</a></p>
  <h4>Selected Further Reading</h4>
  <p>Kenneth Nicholls, "The Development of Lordship in County Cork, 1300-1600," in Patrick O'Flanagan and Cornelius G. Buttimer, eds., <i>Cork: History and Society</i> (Dublin: Geography Publications, 1993): 157-211: 191-192.</p>
  <p>Diarmuid Ó Murchadha, <i>Family Names of County Cork</i> (Cork: Collins Press, 1996): 53.</p>
  <p><a href="http://etheses.dur.ac.uk/2818/1/2818_896.pdf">Keith Alan Waters, “The Earls of Desmond in the Fourteenth Century,” (Ph.D. thesis, Durham University, 2004)</a></p>

  <br/>
  <h2><a id="CormacMacCarthyReagh">Cormac MacCarthy Reagh</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument35.php">Instrument 35</a></li>
  </ul>
  <h4>About</h4>
  <p>This "Cormac, son of Donal MacCarthy" is almost certainly Cormac na Coille ("of the wood"), son of Donal Reagh. Cormac survived his father, but not by much, dying in 1421 in a regional conflict involving the Roches and two rival claimants to the lordship of the MacCarthys of Muskerry.</p>
  <h4>Location</h4>
  <p><a href="/places/Kilbrittain.php">Kilbrittain Castle</a></p>
  <h4>Selected Further Reading</h4>
  <p>Brían Ó Cuív, “A Poem for Fínghin Mac Carthaigh Riabhach,” <i>Celtica</i> 15(1983): 96-110: 97, 109.</p>
  <p>Diarmuid Ó Murchadha, <i>Family Names of County Cork</i> (Cork: Collins Press, 1996): 53.</p>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
