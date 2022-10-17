<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: O'Reilly</title>
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
<h1>O'Reilly</h1>
<div class="row">
  <div class="column">
<p>Jump to:
<ul>
<li><a target="_self" href="/people/OReilly.php#GillaIsa">Gilla Isa O'Reilly</a></li>
<li><a target="_self" href="/people/OReilly.php#Maolmuire">Maolmuire O'Reilly</a></li></ul></p>
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
L.marker([53.9887817355458, -7.357948192232346], {icon: castleIcon}).bindPopup('<strong>Location: Tullymongan</strong>').addTo(map);
</script>
</div>
</div>
<h4>Further reading on the O'Reilly family</h4>
<p><strong>Curtis's biographical note: </strong>O’Reilly or O’Raighilligh, Gilla-Isa and Maelmuire, see p. 200. O’Reilly was king of east Brefni, that is County Cavan, and was of the same stock as O’Rourke. In 1384 (FM) Philip O’Reilly, son of Gilla-Isa Ruadh, king of Brefni, died.</p>
<p>Ciaran Brady, "The O'Reillys of east Breifne and the problem of 'surrender and regrant,'" <i>Breifne</i> 6, no. 23 (1985): 233-262.</p>
<p>Bernadette Cunningham, "The Anglicisation of East Breifne: The O'Reillys and the Emergence of County Cavan" in <i>Cavan: Essays on the History of an Irish County</i>, ed. Raymond Gillespie (Dublin: Irish Academic Press, 1995): 51-72.</p>
<p>Oliver Davies, "The Castles of County Cavan: Part I," <i>Ulster Journal of Archaeology</i> 10 (1947): 73-100.</p>
<p>Oliver Davies, "The Castles of County Cavan, Part II," <i>Ulster Journal of Archaeology</i> 11 (1948): 81-126.</p>
<p>P.J. Duffy, "Perspectives on the Making of the Cavan Landscape" in <i>Cavan: Essays on the History of an Irish County</i>, 14-36.</p>
<p>Ciaran Parker, "Cavan: A Medieval Border Area" in <i>Cavan: Essays on the History of an Irish County</i>, 37-50.</p>
<p>Ciaran Parker, "The O'Reillys of East Breifne, <i>c</i>. 1250-<i>c</i>. 1450," <i>Breifne</i> 8, no. 2 (1991): 155-180.</p>
<p>Linda Shine, "Frontier settlement in Cavan in the high medieval period (1169-1550)" in <i>Cavan: History and Society</i>, ed. Jonathan Cherry, Brendan Scott, and William Nolan (Dublin: Geography Publications, 2014): 127-147.</p>
<p>Katharine Simms, "The O'Reillys and the Kingdom of East Breifne," <i>Breifne</i> 19 (1979): 305-319.</p>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
  <h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
  <h5><strong>1354</strong> | <a href="">CELT: Annals of the Four Masters 1354.5</a></h5>
  <p>Brian, the son of Hugh More O'Neill; Cathal, the son of Niall O'Rourke; Geoffrey Mac Rannall; Geoffrey O'Reilly; Sitric Magauran; and Farrell Mageoghegan, Chief of Kinel-Fiachach, died.</p>
  <h5><strong>1357</strong> | <a href="">CELT: Annals of the Four Masters 1357.3</a></h5>
  <p>John, son of Brian O'Reilly, was slain by the English.</p>
  <h5><strong>1360</strong> | <a href="">CELT: Annals of the Four Masters 1360.8</a></h5>
  <p>The daughter of Turlough O'Conor, and wife of Farrell O'Reilly, was killed by a fall.</p>
  <h5><strong>1363</strong> | <a href="">CELT: Annals of the Four Masters 1363.4</a></h5>
  <p>Lasarina, daughter of O'Farrell, and wife of O'Reilly, died.</p>
  <h5><strong>1364</strong> | <a href="">CELT: Annals of the Four Masters 1364.2</a></h5>
  <p>Dermot O'Brien, Lord of Thomond; Melaghlin, the son of Murrough, son of Gilla-na-naev, son of Hugh, son of Auliffe O'Farrell, Lord of Annaly; Derbhail, daughter of O'Donnell, and wife of Maguire; Margaret, daughter of Walter Burke, and wife of Hugh, son of Felim O'Conor; Donnell Maguire, Chief of Clann-Fergaile; Gilla-na-naev O'Duvdavoran, Chief Brehon of Corcomroe; and Affrica, daughter of Brian O'Reilly, and wife of Brian Mac Tiarnan, died.</p>
  <h5><strong>1365</strong> | <a href="">CELT: Annals of the Four Masters 1365.8</a></h5>
  <p>Brian, the son of Hugh Mac Mahon, assumed the lordship of Oriel. He sued for an alliance by marriage with Sorley, son of Owen Duv Mac Donnell, heir to the lordship of the Insi-Gall, and High Constable of the province of Ulster; and he induced him to put away O'Reilly's daughter, and espouse his own. Not long after this Mac Mahon invited him Mac Donnell to a feast. and they continued drinking for some time. Anon a dispute arose between them; whereupon Brian threw his arms about him Sorley, and ordered that he should be fast and strongly fettered, and cast into a neighbouring lake: and this being accordingly done he was at once drowned. Upon this Donnell. son of Hugh O'Neill, and his brother, Brian, son of Henry O'Neill, with the chief of Clannaboy, and Turlough More Mac Donnell, with all of his tribe in Ulster, assembled together, and, with one accord, marched into Oriel as far as the confines of Rath-Tulach, the mansion-seat of Mac Mahon. Intelligence of this having reached Brian, he fled, leaving the town empty and desolate to them. They, however, pursued Mac Mahon, who, with the chiefs of his territory, was engaged placing their herds and flocks in the fastnesses of the country. The men of Oriel were defeated, and deprived of their arms and cattle. After this Mac Mahon was banished from his own country to Muintir-Maelmora, and his wife and his daughter were made prisoners.</p>
  <h5><strong>1365</strong> | <a href="">CELT: Annals of the Four Masters 1365.9</a></h5>
  <p>Cuconnaught O'Reilly, Lord of Breifny, retired among the friars, and resigned his lordship to his brother Philip.</p>
  <h5><strong>1367</strong> | <a href="">CELT: Annals of the Four Masters 1367.2</a></h5>
  <p>Cuconnaught O'Reilly, Lord of Breifny until he resigned the lordship for the sake of God, took holy orders; and Philip assumed his place.</p>
  <h5><strong>1369</strong> | <a href="">Annals of the Four Masters 1369.1</a></h5>
  <p>Hugh O'Neill, Bishop of Clogher, a pious and humane man, and Richard O'Reilly, Bishop of Kilmore, died.</p>
  <h5><strong>1369</strong> | <a href="">CELT: Annals of the Four Masters 1369.1</a></h5>
  <p>Cuconnaught O'Reilly, some time Lord of Breifny, died.</p>
  <h5><strong>1369</strong> | <a href="">CELT: Annals of the Four Masters 1369.4</a></h5>
  <p>Philip O'Reilly was taken prisoner by his kinsmen, and was placed by them in the castle of Clough-Lough Oughter, severely bound and fettered. Manus O'Reilly then assumed the lordship. In consequence of this capture, war and disturbance broke out in Breifny. A great army was mustered by Annadh, the son of Richard O'Reilly, who was joined by Mac Mahon and all the other chiefs of Oriel, to rescue Philip O'Reilly from Manus by force. Manus and his kinsmen however, came, together with their entire forces, to contest the chieftainship of the country for themselves. A battle was fought between them at Blen-cupa, where Manus was defeated. In this conflict were slain the three sons of Cormac O'Farrell, viz. Johnin, Melaghlin, and Fergus; Felim, son of Hugh an Chleitigh O'Conor; the two sons of Flaithim More Mac Conruva, namely, Donn and Brian ; Sitric na Srona Mac Master, and a number of others.</p>
  <h5><strong>1369</strong> | <a href="">CELT: Annals of the Four Masters 1369.12</a></h5>
  <p>Philip Maguire, Lord of Fermanagh, brought vessels to Lough Oughter took the castle of Clough-Lough-Oughter, and liberated Philip O'Reilly, who was confined therein, and who thereupon re-assumed the lordship.</p>
  <h5><strong>1370</strong> | <a href="">CELT: Annals of the Four Masters 1370.4</a></h5>
  <p>Duvcovla, the daughter of O'Reilly, and wife of Philip Maguire, died.</p>
  <h5><strong>1370</strong> | <a href="">CELT: Annals of the Four Masters 1370.5</a></h5>
  <p>Manus O'Reilly was taken prisoner by the sons of Thomas, the son of Mahon O'Reilly, and confined in the castle of Clough-Lough-Oughter.</p>
  <h5><strong>1377</strong> | <a href="">CELT: Annals of the Four Masters 1377.10</a></h5>
  <p>Godfrey, son of Annadh O'Reilly, was slain by the Clann-an-Chaoich O'Reilly.</p>
  <h5><strong>1379</strong> | <a href="">CELT: Annals of the Four Masters 1379.8</a></h5>
  <p>Mac-an-Chaoich O'Reilly was slain by the son of Annadh O'Reilly.</p>
  <h5><strong>1380</strong> | <a href="">CELT: Annals of the Four Masters 1380.12</a></h5>
  <p>Mac-an-Chaoich O'Reilly was slain by the son of Annadh O'Reilly.</p>
  <h5><strong>1380</strong> | <a href="">CELT: Annals of the Four Masters 1380.12</a></h5>
  <p>An army was led by the Clann-Murtough and Philip O'Reilly into Breifny-O'Rourke, where they slew Thomas MacDorcy; but O'Rourke overtook them, and drove them forcibly from the territory, leaving behind some of their men and horses.</p>
  <h5><strong>1384</strong> | <a href="">CELT: Annals of the Four Masters 1384.12</a></h5>
  <p>Philip O'Reilly, Lord of Muintir-Maelmora, died.</p>
  <h5><strong>1386</strong> | <a href="">CELT: Annals of the Four Masters 1386.12</a></h5>
  <p>Donough Mac Cabe was slain by the son of Manus O'Reilly</p>
  <h5><strong>1389</strong> | <a href="">CELT: Annals of the Four Masters 1389.8</a></h5>
  <p>Brian, son of Donnell O'Reilly, was slain by the Clann-Murtough.</p>
  <h5><strong>1390</strong> | <a href="">CELT: Annals of the Four Masters 1390.3</a></h5>
  <p>A great war broke out between O'Rourke and O'Reilly; and the people of Annaly the O'Farrells, the Muintir-Eolais the Mac Rannalls; and the Clann-Murtough O'Conor, at the instigation of Donnell, the son of Murtough, and Tomaltagh Mac Donough, came to join in that war.</p>
  <h5><strong>1390</strong> | <a href="">CELT: Annals of the Four Masters 1390.4</a></h5>
  <p>Manus O'Rourke, who had been imprisoned by O'Reilly in the castle of Lough Oughter, made his escape from it, and went to the castle of Lough-an Scuir; but the Clann-Murtough, being informed of this by his betrayers, they slew him as he was coming ashore out of a cot.</p>
  <h5><strong>1390</strong> | <a href="">CELT: Annals of the Four Masters 1390.5</a></h5>
  <p>A peace was concluded between O'Rourke and O'Reilly; and O'Reilly received great rewards for banishing and expelling from him the enemies of O'Rourke. Owen O'Rourke and the son of Cathal Reagh were delivered up as hostages for the payment of these considerations.</p>
  <h5><strong>1390</strong> | <a href="">CELT: Annals of the Four Masters 1390.7</a></h5>
  <p>O'Reilly, i.e. Thomas, the son of Mahon, died; and John, the son of Philip O'Reilly, assumed the lordship.</p>
  <h5><strong>1391</strong> | <a href="">CELT: Annals of the Four Masters 1391.1</a></h5>
  <p>O'Rourke (Tiernan), with a small body of troops, repaired to Drumlahan to meet O'Reilly (John). When the Clann-Murtough O'Conor heard of this, they met him, with all their forces, at Bealach-an-Chrionaigh; but O'Rourke, with his small body of troops, defeated them, and made them retreat before him; having slain with his own hand John, the son of Mahon O'Conor, and Donough, son of Hugh an-Cleitigh, exclusive of the number of others whom his forces had slain.</p>
  <h5><strong>1393</strong> | <a href="">CELT: Annals of the Four Masters 1393.1</a></h5>
  <p>John, son of Geoffry O'Reilly, Bishop of Breifny Kilmore, died.</p>
  <h5><strong>1399</strong> | <a href="">CELT: Annals of the Four Masters 1399.6</a></h5>
  <p>Felim, the son of Cahir O'Conor, Tanist of Offaly, died of the plague at O'Reilly's house.</p>
  <h5><strong>1399</strong> | <a href="">CELT: Annals of the Four Masters 1399.10</a></h5>
  <p>Donnell, the son of Gilla-Isa Roe O'Reilly, died.</p>
  <h5><strong>1400</strong> | <a href="">CELT: Annals of the Four Masters 1400.7</a></h5>
  <p>John, son of Philip, son of Gilla-Isa-Roe O'Reilly, Lord of Breifny, the most hospitable and noble of his name, died of a sudden fit, in his bed at Tulach Mongain.</p>
  <h5><strong>1400</strong> | <a href="">CELT: Annals of the Four Masters 1400.9</a></h5>
  <p>Manus, the son of Cuconnaught O'Reilly, heir apparent to the lordship of Muintir-Maelmora, died.</p>
  <h5><strong>1402</strong> | <a href="">CELT: Annals of the Four Masters 1402.11</a></h5>
  <p>Cuconnaught, the son of Manus, who was son of Cuconnaught O'Reilly, Tanist of Breifny, died. Una, the daughter of Turlough O'Conor, was his mother.</p>
  <h5><strong>1403</strong> | <a href="">CELT: Annals of the Four Masters 1403.8</a></h5>
  <p>Maelmora, the son of Cuconnaught, son of Gilla-Isa Roe O'Reilly, became Lord of the Muintir-Reilly.</p>
  <h5><strong>1411</strong> | <a href="">CELT: Annals of the Four Masters 1411.4</a></h5>
  <p>Maelmora, the son of Cuconnaught, son of Gilla-Isa O'Reilly, Lord of Breifny, died.</p>
  <h5><strong>1413</strong> | <a href="">CELT: Annals of the Four Masters 1413.4</a></h5>
  <p>Thomas Oge O'Reilly and the Mac Cabes went upon an excursion into Meath, and committed acts of conflagration and depredation there. The English overtook them, and Mahon Mac Cabe, Loughlin Mac Cabe, and a great number of their people, were slain. Thomas Oge O'Reilly received a javelin in the leg, in consequence of which he was lame ever afterwards.</p>
  <h5><strong>1418</strong> | <a href="">CELT: Annals of the Four Masters 1418.8</a></h5>
  <p>Richard, the son of Thomas O'Reilly, Lord of East Breifny, was drowned in Loch Silean; and with him were also drowned, his son, Owen O'Reilly, Philip, the son of Gilla-Isa, son of Godfrey O'Reilly, Dean of Drumlane, and Vicar of Eanach-garbh, and many other distinguished persons. Finola, however, daughter of Mac Rannall, and wife of O'Reilly, escaped by swimming.</p>
  <h5><strong>1419</strong> | <a href="">CELT: Annals of the Four Masters 1419.5</a></h5>
  <p>Hugh Boy O'Rourke, who was Lord of Breifny for one year and a half; died; and Teige O'Rourke was elected in his place by the O'Rourkes from Slieve-an-ierin West. But Art, son of Teige, son of Ualgarg, was elected in opposition to him from Slieve-an-ierin East, by the O'Reillys, the people of Teallach Donnchadha, and the descendants of Melaghlin Mac Rannall; so that the entire of Gairbhthrian Connacht was thrown into commotion by the contests between them.</p>
  <h5><strong>1421</strong> | <a href="">CELT: Annals of the Four Masters 1421.2</a></h5>
  <p>Thomas Oge O'Reilly, a materies of a lord, who, of all the descendants of Aedh Finn, was the most distinguished for hospitality and prowess, died in his own house.</p>
  <h5><strong>1424</strong> | <a href="">CELT: Annals of the Four Masters 1424.4</a></h5>
  <p>A great war broke out between the O'Rourkes after the death of Hugh Boy O'Rourke. Teige, the son of Tiernan O'Rourke, made peace with the O'Reillys, and with Owen, the son of John O'Reilly, whereupon the entire lordship of Breifny was given to Teige. But this was not until after he had made an incursion against Art into Magh-Angaidhe, and burned the town. Art made submission to him after they had been at variance with each other for a period of four years.</p>
  <h5><strong>1427</strong> | <a href="">CELT: Annals of the Four Masters 1427.15</a></h5>
  <p>An army was led by the Earl of Ormond into the territory of Muintir-Maelmora. O'Reilly's town was burned by him, and the castle demolished.</p>
  <h5><strong>1428</strong> | <a href="">CELT: Annals of the Four Masters 1428.9</a></h5>
  <p>John, the son of Thomas O'Reilly, was treacherously slain by his own sons.</p>
  <h5><strong>1429</strong> | <a href="">CELT: Annals of the Four Masters 1429.5</a></h5>
  <p>A war broke out between O'Rourke (Teige) and O'Reilly (Owen). The descendants of Mahon O'Reilly and the English of Meath joined O'Rourke against O'Reilly, and burned O'Reilly's town, whereupon O'Reilly prevailed upon O'Neill to come to his relief; and O'Neill, with the forces of Oriel and Fermanagh, and his own creaghts, marched as far as Achadh-Chille-Moire. Thither they were pursued by O'Rourke, the sons of Mahon O'Reilly, the Baron of Delvin, and Mac Cabe; and O'Neill and his sons and gallowglasses, in conjunction with the forces of Fermanagh, and O'Reilly and his kinsmen, then engaged, and defeated the enemy in the battle of Achadh-Chille-Moire, in which the Baron of Delvin, Mac Cabe, Henry Mac Cabe, Dermot O'Rourke, and many others, were taken prisoners or slain by O'Neill.</p>
  <h5><strong>1431</strong> | <a href="">CELT: Annals of the Four Masters 1431.12</a></h5>
  <p>A great army was led by Owen O'Neill, Maguire, and O'Reilly, against Mac Quillan, and they plundered and spoiled his territory. Owen, with his army and creaghts, remained in that territory half a quarter of a year, destroying the corn, and burning the dwellings, after which he returned to Tyrone.</p>
  <h5><strong>1431</strong> | <a href="">CELT: Annals of the Four Masters 1431.15</a></h5>
  <p>A large body of English cavalry set out to plunder the territory of the Clann-Kee O'Reilly. On the same day Manus, the son of Ardgal Mac Mahon, set out to plunder the English districts, and on obtaining intelligence of the proceedings of the English, he expeditiously pursued them, and found them engaged in guarding their prey; whereupon he attacked them, deprived them of their spoils, took some of their chiefs prisoners, and slew others, and returned home victoriously.</p>
  <h5><strong>1432</strong> | <a href="">CELT: Annals of the Four Masters 1432.11</a></h5>
  <p>Teige O'Mahony, heir apparent to the lordship of Corca-Baiscinn, Maelmora O'Reilly, and Turlough, the son of John O'Reilly, died.</p>
  <h5><strong>1432</strong> | <a href="">CELT: Annals of the Four Masters 1432.12</a></h5>
  <p>Turlough, the son of John O'Reilly, died.</p>
  <h5><strong>1433</strong> | <a href="">CELT: Annals of the Four Masters 1433.5</a></h5>
  <p>A war broke out between Mac Rannall of the Moy and the sons of Melaghlin. The sons of Melaghlin took the sons of Mahon Mac Cabe into their pay to assist them; and they made an incursion into the Moy, and burned the town of Cathal Mac Rannall. But on leaving the town they were overtaken by a strong body of troops; and the sons of Mahon Mac Cabe being in the rear, three of them, Ross, Donough, and Brian, were slain on the spot, together with many other persons. Rory, their eldest brother, was taken prisoner, and he half dead; but Turlough, who was the fifth son, and whose mother was Una, the daughter of John O'Reilly, escaped.</p>
  <h5><strong>1436</strong> | <a href="">CELT: Annals of the Four Masters 1436.3</a></h5>
  <p>Conor, the son of John 0'Reilly, i.e. the son of the Lord of Breifny, a truly hospitable man, died.</p>
  <h5><strong>1438</strong> | <a href="">CELT: Annals of the Four Masters 1438.19</a></h5>
  <p>Donough, the son of Siry O'Cuirnin, a learned historian; O'Daly of Breifny, Chief Poet to O'Reilly; and Conor Mac Egan, Ollav of Clanrickard in law, died.</p>
  <h5><strong>1446</strong> | <a href="">CELT: Annals of the Four Masters 1446.13</a></h5>
  <p>Thomas, the son of Thomas Oge O'Reilly, was slain on Great Christmas Day by the sons of Redmond, son of Gilla-Isa O'Reilly.</p>
  <h5><strong>1447</strong> | <a href="">CELT: Annals of the Four Masters 1447.4</a></h5>
  <p>Donnell Ballagh, son of Thomas, son of Philip Maguire, was slain by John, son of Philip Maguire, assisted by the sons of Art Maguire, the sons of Mac Oirghiallaigh Mac Errilly, and the sons of O'Davine, for this Donnell had been at enmity with Maguire, and with Philip, the Tanist of the territory; and on his return from Breifny O'Reilly to the town of Henry O'Neill, he was seized upon, and killed. He was interred in the monastery of Lisgool.</p>
  <h5><strong>1447</strong> | <a href="">CELT: Annals of the Four Masters 1447.6</a></h5>
  <p>Felim, the son of John, son of Philip O'Reilly, worthy heir to the lordship of Breifny, by reason of his noble deeds and hospitality, went to Trim, to meet Lord Furnival, the then Deputy of the King of England, by whom he was taken prisoner. He afterwards died of the plague, after the victory of Unction and Penance, and was interred in the monastery of Trim.</p>
  <h5><strong>1449</strong> | <a href="">CELT: Annals of the Four Masters 1449.2</a></h5>
  <p>Owen, the son of John, Lord of the district called Muintir-Maelmora, died; and his son, John O'Reilly, was elected in his place by O'Neill and the sept of John O'Reilly; but Farrell O'Reilly (i.e. the son of Thomas More) being elected by the sept of Mahon O'Reilly and by the English, war and disturbances arose between them the candidates. The Lord Justice and the Earl of Ormond came to assist Farrell O'Reilly; but John O'Reilly and his forces suddenly charged the van of their army, and slew or made prisoners of sixty of them, among whom were the son of Turlough and the son of Donnell Bane O'Reilly.</p>
  <h5><strong>1450</strong> | <a href="">CELT: Annals of the Four Masters 1450.10</a></h5>
  <p>A peace was made by John, the son of Owen O'Reilly, and Donnell Bane O'Reilly, with each other; and Farrell, the son of Thomas O'Reilly, was deposed of his lordship; and the chieftainship of all Breifny was conferred upon John, the son of Owen; and Farrell received wages from him.</p>
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
<h2><a id="GillaIsa">Gilla Isa O'Reilly</a></h2>
<h4>Submission Documents</h4>
<ul>
  <li><a href="/instruments/Instrument38.php">Instrument 38</a></li>
</ul>
<h4>About</h4>
<p></p>
<h4>Location</h4>
<p><a href="/places/Tullymongan.php">Tullymongan</a></p>
<h4>Selected Further Reading</h4>
<br/>
<h2><a id="Maolmuire">Maolmuire O'Reilly</a></h2>
<h4>Submission Documents</h4>
<ul>
  <li><a href="/instruments/Instrument38.php">Instrument 38</a></li>
</ul>
<h4>About</h4>
<p></p>
<h4>Location</h4>
<p><a href="/places/Tullymongan.php">Tullymongan</a></p>
<h4>Selected Further Reading</h4>
<br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
