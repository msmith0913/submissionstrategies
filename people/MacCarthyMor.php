<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: MacCarthy Mór</title>
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
    <h1>MacCarthy Mór</h1>
    <p>Jump to:
    <ul>
      <li><a target="_self" href="/people/MacCarthyMór.php#TadhgMacCarthyMór">Tadhg MacCarthy Mór</a></li>
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
    L.marker([51.94903099242467, -10.258605292800087], {icon: castleIcon}).bindPopup('<strong>Location: Ballycarbery Castle</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
  <h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><strong>1359</strong> | <a href="">CELT: Annals of Inisfallen 1359.1</a></h5>
<p>Cormac Mac Carthaig, brother of the same Diarmait above, reigned thirty-one years. He was a year in an encampment against the Uí Chairpri in the castle [...], and ten and ninety of his accustomed followers in that year in his own house. He died and was buried in the monastery of the Friars in Corcach.</p>
<h5><strong>1359</strong> | <a href="">CELT: Annals of the Four Masters 1359.1</a></h5>
<p>Cormac Mac Carthy, Lord of Desmond, and Donnell, the son of Teige O'Mahony, died.</p>
<h5><strong>1371</strong> | <a href="">CELT: Annals of Ulster 1371.4</a></h5>
<p>Joan the stooped, daughter of Mac Carthaigh, Wife of Mac Conmara, died after gaining, the victory of hospitality.</p>
<h5><strong>1375</strong> | <a href="https://chancery.tcd.ie/document/patent/49-edward-iii/262">CIRCLE: Patent Roll 49 Edward III, 3 July 1375</a></h5>
<p>The K. at the request of his beloved and faithful liege, McCarthy of Desmond, chieftain of his lineage, has granted a licence to Thomas Osoulewan and McCragh Osoulewan, who are at the K.'s faith and obedience, to cross to Eng. and thence to the court of Rome, their Irish condition [etc.] notwithstanding; so long, however, as they do not bear anything with them, or otherwise do anything prejudicial to the K. or his crown.</p>
<h5><strong>1381</strong> | <a href="">CELT: Annals of the Four Masters 1381.4</a></h5>
<p>Dermot Mac Carthy, heir to the lordship of Desmond, was slain by O'Mahony.</p>
<h5><strong>1391</strong> | <a href="">CELT: Annals of Inisfallen 1391.1</a></h5>
<p>Domnall Óg Mac Carthaig, i.e. his (Cormac's) son, reigned thirty-one years. There was none of his contemporaries, neither foreigner nor Gaedel, Móre comely, Móre humane, or Móre powerful than he, nor was there in his time one of greater [...] generosity, prowess, kindliness, or truthfulness. He died in the castle of Loch Léin, and was buried in the same monastery [in Corcach] after a victory of penance and devotion. And no other calamity was so notable at that time.</p>
<h5><strong>1391</strong> | <a href="">CELT: Annals of Ulster 1391.3</a></h5>
<p>Domnall Mag Carthaigh junior, namely, king of Desmond, died and his son, namely, Tadhg Mag Carthaigh, was made king in his stead over Desmond.</p>
<h5><strong>1391</strong> | <a href="">CELT: Annals of the Four Masters 1391.2</a></h5>
<p>Donnell Oge Mac Carthy, Lord of Desmond, died; and his son, Teige, assumed the lordship after him.</p>
<h5><strong>1398</strong> | <a href="">CELT: Mac Carthaigh's Book 1398.4</a></h5>
<p>Tadhg son of Domhnall Óg son of Cormac Mac Carthaigh, king of Desmond, died at Baile Í Chaiibre, and was brought to Cork to be buried.</p>
<h5><strong>1410</strong> | <a href="">CELT: Annals of the Four Masters 1410.9</a></h5>
<p>Cormac Oge Mac Carthy died in captivity in which he was kept by his kinsman, Mac Carthy Móre.</p>
<h5><strong>1411</strong> | <a href="">CELT: Annals of the Four Masters 1411.19</a></h5>
<p>Mac Carthy Móre was banished by the O'Sullivans.</p>
<h5><strong>1411</strong> | <a href="">CELT: Annals of the Four Masters 1411.21</a></h5>
<p>Teige (i.e. Caech na Moicheirge), the son of Dermot Mac Carthy, heir to the lordship of Desmond, was treacherously slain by Felim, the son of Dermot Mac Carthy.</p>
<h5><strong>1411</strong> | <a href="">CELT: Annals of Ulster 1411.1</a></h5>
<p>Joan, daughter of the Earl of Desmond, namely, wife of Mag Carthaigh Mór, that is, Tadhg Mag Carthaigh, died this year.</p>
<h5><strong>1428</strong> | <a href="">CELT: Annals of Inisfallen 1428.1</a></h5>
<p>Tadc Mac Carthaig, i.e. son of the above Domnall, reigned thirty-eight years, and of the foreigners and the Gaedil of his time he was the best, the greatest, the [...], and the most reputed(?) for wine-drinking. Nevertheless, he was a son worthy of his father. He died in the castle of Baile Uí Chairpri and was buried in the same monastery, A.D. MCCCCXXVIII. His wife was Sebán, daughter of Garret the earl. She died in Caislén Mac nAeducáin and was buried at Tráig Lí.</p>
<h5><strong>1450</strong> | <a href="">CELT: Annals of Inisfallen 1450.2</a></h5>
<p>Eógan, son of Domnall Óg Mac Carthaig, was slain on the third day after Christmas in Cluain Eócháin by some of the Clann Tomais, i.e. by Dáibíd Dub, grandson of Seoán, with his followers and kinsmen; and there was also slain there the son of Donnchad, grandson of Fíngen son of Diarmait son of Domnall Óg Mac Carthaig, i.e. Tathag, and many others were burned along with them on that day, A.D. MCCCCL (1450).</p>
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
  <h2 id="TadhgMacCarthyMór">Tadhg MacCarthy Mór</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument7.php">Instrument 7</a></li>
    <li><a href="/instruments/Instrument30.php">Instrument 30</a></li>
  </ul>
  <h4>About</h4>
    <p>Tadhg MacCarthy, later given the epithet Tadhg na Mainistreach ('of the Monastery') was lord of the main branch of MacCarthys, who styled themselves princes of Desmond. Although Tadhg did not found Muckross Friary, the purported foundation which gave him his epithet, he was lauded by the Annals of Inisfallen as "the most reputed for wine-drinking." He was married to Joan (Sebán/Siobhán) FitzGerald, daughter of Gerald FitzGerald.</p>
  <h4>Location</h4>
  <p><a href="/places/Ballycarbery.php">Ballycarbery</a></p>
  <h4>Further Reading</h4>
  <p><a href="https://archive.org/details/irishhistory0000unse">W.F.T. Butler, <i>Gleanings from Irish History</i> (London: Longmans, Green and Co, 1925).</a></p>
  <p>K.W. Nicholls, <i>Gaelic and Gaelicized Ireland in the Middle Ages</i> (Dublin: Lilliput Press, 2003): 186-191.</p>
  <p>Kenneth Nicholls, "The Development of Lordship in County Cork, 1300-1600" in Patrick O'Flanagan and Cornelius G. Buttimer, eds., <i>Cork: History and Society</i> (Dublin: Geography Publications, 1993): 157-211.</p>
  <p>Diarmuid Ó Murchadha, <i>Family Names of County Cork</i> (Cork: Collins Press, 1996): 49-53.</p>
  <p><a href="https://archive.org/details/maccarthysofmuns01mcca/page/n5/mode/2up">Samuel Trant MacCarthy, <i>The MacCarthys of Munster: The Story of a Great Irish Sept</i> (Dundalk: Dundalgan Press, 1922).</a></p>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
