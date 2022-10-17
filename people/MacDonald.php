<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People: MacDonald</title>
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
    <h1>MacDonald</h1>
    <p>Jump to:
    <ul>
      <li><a target="_self" href="/people/MacDonald.php#JohnMacDonald">John MacDonald</a></li>
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
    L.marker([54.505752709391544, -6.7675603709869145], {icon: castleIcon}).bindPopup('<strong>Location: Dungannon</strong>').addTo(map);
    </script>
</div>
</div>
<br/>
<div style="display: flex; justify-content: center; align-items: center;">
<button onclick="sourceexpand()" style="text-align: center;"><h3 style="color: white;">Click to Expand Primary Sources, 1350-1450</h3></button>
</div>
<div id="source" style="display: none;">
  <h4>Full bibliographic information is available on the <a href="/instruments.php">Sources page</a></h4>
<h5><strong>1359</strong> | <a href="">CELT: Annals of the Four Masters 1359.4</a></h5>
<p>Brian Mac Donnell, heir to the lordship of Tirerrill, was slain by Mac Seancha, one of the adherents of O'Gara.</p>
<h5><strong>1365</strong> | <a href="">CELT: Annals of the Four Masters 1365.8</a></h5>
<p>Brian, the son of Hugh Mac Mahon, assumed the lordship of Oriel. He sued for an alliance by marriage with Sorley, son of Owen Duv Mac Donnell, heir to the lordship of the Insi-Gall, and High Constable of the province of Ulster; and he induced him to put away O'Reilly's daughter, and espouse his own. Not long after this Mac Mahon invited him Mac Donnell to a feast. and they continued drinking for some time. Anon a dispute arose between them; whereupon Brian threw his arms about him Sorley, and ordered that he should be fast and strongly fettered, and cast into a neighbouring lake: and this being accordingly done he was at once drowned. Upon this Donnell. son of Hugh O'Neill, and his brother, Brian, son of Henry O'Neill, with the chief of Clannaboy, and Turlough More Mac Donnell, with all of his tribe in Ulster, assembled together, and, with one accord, marched into Oriel as far as the confines of Rath-Tulach, the mansion-seat of Mac Mahon. Intelligence of this having reached Brian, he fled, leaving the town empty and desolate to them. They, however, pursued Mac Mahon, who, with the chiefs of his territory, was engaged placing their herds and flocks in the fastnesses of the country. The men of Oriel were defeated, and deprived of their arms and cattle. After this Mac Mahon was banished from his own country to Muintir-Maelmora, and his wife and his daughter were made prisoners.</p>
<h5><strong>1368</strong> | <a href="">CELT: Annals of the Four Masters 1368.12</a></h5>
<p>A great army was led by Niall O'Neill, King of the Kinel-Owen, who was joined by the chieftains of the entire province of Ulster, into Oriel, to attack Brian Mac Mahon; and they pitched a camp in the very centre of the territory. Mac Mahon offered him great terms, namely, to cede one-half of the territory of Oriel to Niall, the son of Murrough. son of Brian na g-Coileach n-Oifrinn, i.e. he who had been lord over the territory before himself; and other great gifts to O'Neill himself, as eric for the death of Mac Donnell. O'Neill consented to make peace with him on these conditions; but the son of Murrough Mac Mahon and Alexander Oge Mac Donnell, Lord of the Gallowglasses, without O'Neill's permission, marched, with one accord, with three battalions of kerns against Mac Mahon, and made an assault upon his fortress; but Mac Mahon and his household, being upon their guard, armed and accoutred within their fortress, they responded without delay to the attack; and a fierce and furious conflict ensued, in which they the assailants were defeated by Mac Mahon. The son of Murrough Mac Mahon, Tanist of Oriel; Alexander, the son of Turlough Mac Donnell, Constable of the Gallowglasses; and Owen, the son of Turlough, son of Melaghlin O'Donnell, together with a great number of others, were slain on that occasion.</p>
<h5><strong>1387</strong> | <a href="">CELT: Annals of the Four Masters 1387.8</a></h5>
<p>John, the son of Aengus Mac Donnell, Lord of the Insi Gall the Hebrides, died.</p>
<h5><strong>1388</strong> | <a href="">CELT: Annals of the Four Masters 1388.8</a></h5>
<p>Donnell O'Conor made an incursion into Machaire-Connacht, and burned Ard-an-Choillin, and the island Loch-Cairrgin. Donnell Oge Mac Donnell (i.e. a constable of gallowglasses) was slain on this excursion.</p>
<h5><strong>1397</strong> | <a href="">CELT: Annals of the Four Masters 1397.7</a></h5>
<p>Felim, son of Cathal Oge, and Dowell Mac Donnell Galloglach, went to O'Donnell to request his assistance against their enemies; and O'Donnell, with the chiefs of Tirconnell, came on this occasion to assist the sons of Cathal Oge. The people of Carbury and Tirerrill fled before them into the fastnesses and places of difficult access of their country. O'Donnell arrived at Aenach-Tire-Oilella; and his people burned many houses and much corn, and committed great depredations on the son of Cormac, son of Rory. Mulrony Mac Dermot, Lord of Tirerrill, O'Dowda, and O'Hara, afterwards gave sureties and hostages, to O'Donnell and the sons of Cathal Oge as securities, that they would never again oppose them. Upon this condition O'Donnell concluded a peace with them, and returned, himself, to Tirconnell immediately afterwards. The sons of Cathal Oge, Muintir-Durnin, and Mac Donnell Galloglach, then went to Carbury, and halted at Lissadill, where they proceeded to parcel out the territory between them that night. But they disputed on this head; and on the morrow O'Donnell arrived there, with a small body of cavalry, to settle matters between them.</p>
<h5><strong>1397</strong> | <a href="">CELT: Annals of the Four Masters 1397.8</a></h5>
<p>At this time Murtough Bacagh, the son of Donnell, son of Murtough O'Conor, and the Mac Sweenys, were at Fassa Coille, together with the Western O'Hara, and the descendants of Flaherty O'Rourke; and they all set out early in the morning to Bun-Brenoige, opposite Lissadill, to attack the sons of Cathal Oge and O'Donnell. Squadrons of the cavalry of the sons of Cathal Oge advanced towards them the party of Murtough Bacach, on the way to Sligo; but the stream of Bun-Brenoige lay on one side of them, and, luckily and favourably for them, the sea had flowed on the other side, so that they could not be encompassed or surrounded. They afterwards came to a brisk engagement with each other, in which O'Donnell and the sons of Cathal Oge were defeated, and Marcus Mac Donnell, and Dugald his son, John Mac Sheely, and a great many others of their gallowglasses, were slain. Great ravages and depredations were then committed on the sons of Cathal; and they were again banished across the River Erne, in sadness and dejection, precisely on the Great Festival of the Blessed Virgin Mary.</p>
<h5><strong>1398</strong> | <a href="">CELT: Annals of the Four Masters 1398.15</a></h5>
<p>O'Conor Roe and Mac Dermot marched with a great army against the Clann-Donough of Tirerrill, until they arrived at Magh-Tuiredh, where they committed great depredations. The Clann-Donough and Murtough, son of Donnell O'Conor. with all his forces, assembled, came up with them; and a battle was fought between them, in which O'Conor Roe was defeated, and Sorley Boy Mac Donnell and his people were killed.</p>
<h5><strong>1405</strong> | <a href="">CELT: Annals of the Four Masters 1405.1</a></h5>
<p>An army was led by Teige, the son of Hugh Mac Dermot, Lord of Moylurg, against the descendants of Conor, the son of Taichleach Mac Dermot, and all the other people of Airtech, to demand chiefry from them, as was always due to a man in his station. The people of Airtech drew O'Conor Don, the Clann-Murtough-Muimhneach, and the sons of Farrell Mac Dermot, to their assistance against Mac Dermot. They all assembled and met at Loch Labain, in the territory of Airtech, where a battle was fought between them. In the early part of the day Mac Dermot and Donough Mac Donnell, his constable, with the forces of both, routed the fourfold mixed army opposed to them, and killed many of their common people in the conflict. But a certain man of the soldiers of the routed part turned towards the spot where he thought that Mac Dermot was, and cast at him a terrific irresistible javelin, which struck directly in his throat, so that Mac Dermot (Teige) died of the wound a week afterwards in his own house. Rory, the son of Hugh Mac Dermot, then assumed the lordship of Moylurg.</p>
<h5><strong>1407</strong> | <a href="">CELT: Annals of the Four Masters 1407.5</a></h5>
<p>The battle of Cill achaidh was gained by O'Conor Roe, the sons of Melaghlin O'Kelly, and Mac Dermot, against Mac William of Clanrickard, and Cathal, the son of Rory O'Conor (who, after the killing of O'Conor Don, received the name of King of Connaught). Cathal O'Conor, William Burke, Redmond Mac Hubert, and O'Heyne, were taken prisoners, after the loss of many persons on both sides. Among the slain were Randal, the son of Donnell Oge Mac Donnell, and John Ballagh, son of Mac Henry. Many horses and coats of mail were left behind them after this defeat.</p>
<h5><strong>1413</strong> | <a href="">CELT: Annals of the Four Masters 1413.11</a></h5>
<p>Colla, the son of Teige O'Kelly, heir to the lordship of Hy-Many; Melaghin, the son of Manus Mac Donnell; O'Meagher, Chief of Hy-Cairin; and Mac Egan of Ormond, a man learned in the Fenechus, all died.</p>
<h5><strong>1425</strong> | <a href="">CELT: Annals of the Four Masters 1425.3</a></h5>
<p>O'Neill and Owen O'Neill, Naghtan O'Donnell and Mac-I-Neill Boy, Mac Quillin, Mac Donnell Galloglagh, and O'Mellan, Keeper of the Bell of St. Patrick's Will, who happened to be in the house of the Earl, were taken prisoners by Lord Furnival (an English Earl), after the death of the Earl of March; and he conveyed these chieftains as prisoners to Dublin.</p>
<h5><strong>1433</strong> | <a href="">CELT: Annals of the Four Masters 1433.1</a></h5>
<p>A great war broke out between the Kinel-Owen and the Kinel-Connell; and O'Donnell (Niall Garv, the son of Turlough an Fhina) marched with his forces into Duibhthrian to assist Mac Quillin. O'Neill, i.e. Owen, set out with a great army in pursuit of O'Donnell and Mac Quillin; and Mac Donnell of Scotland arrived at the same time with a large fleet, and went to where O'Neill was, to aid him. The Scots proceeded to attack the creaghts of Mac Quillin and of Robert Savadge, worsted them, and caused great slaughter and loss of men upon Mac Quillin and Robert; and those that made their escape from the territory of Duibhthrian were almost all cut off at the Pass of Newcastle.</p>
<h5><strong>1433</strong> | <a href="">CELT: Annals of the Four Masters 1433.2</a></h5>
<p>O'Neill, Henry his son, and Mac Donnell, afterwards went to Ardglas, which they burned; and Mac Donnell and his Scots afterwards went in their ships from Ardglas to Inishowen, while O'Neill marched by land to meet them, with intent to plunder Tirconnell. Naghtan O'Donnell and the daughter of O'Conor Faly, the wife of O'Donnell, and the sons of the chieftains of Tirconnell, repaired to Inishowen to meet them; and they made peace with O'Neill, without leave from O'Donnell.</p>
<h5><strong>1435</strong> | <a href="">CELT: Annals of the Four Masters 1435.10</a></h5>
<p>Now O'Neill, his sons, and Mac Donnell Galloglagh, felt shame and disgrace at their expulsion from the position in which they were fortified; and the resolution they adopted, at the request and solicitation of Henry O'Neill, was, that they should attack the camp, and use their boldest exertions to re-take it. Henry's exciting exhortation had great effect upon the minds of the youths, and they attacked the camp vigorously, silently, and fiercely, Henry being the foremost in the van, until they made their way into the very centre of their enemies. Mac Donnell Galloglagh and Mac Sweeny Fanad then came to an engagement, in which heroes were mangled and slaughtered between them on both sides; and such was the confusion that prevailed, owing to the darkness of the night, and the closeness of the combatants to each other, that friend could not be distinguished from foe. Sparks of fire flashed from the helmets of the heroes and the armour of the champions. Hugh O'Neill and Brian O'Neill came to a personal rencounter with each other; and Hugh made a thrust of his spear at Brian, and wounded him severely, after which Brian and Naghtan withdrew from the contest, and left their gallowglasses behind them. When Mac Sweeny the leader of the gallowglasses perceived that Naghtan and Brian Oge had gone away from him, he sent his people before him, and remained himself in the rear to cover their retreat, and left the place without O'Neill's knowledge; but when Henry and his kinsmen observed this, they pursued Mac Sweeny to Slieve Truim, and there defeated him, and took himself and many of his people prisoners. O'Neill was victorious on this expedition.</p>
<h5><strong>1441</strong> | <a href="">CELT: Annals of the Four Masters 1441.6</a></h5>
<p>Mac Donnell of Clann-Kelly was slain by the sons of Cuconnaught Maguire.</p>
<h5><strong>1441</strong> | <a href="">CELT: Annals of the Four Masters 1441.7</a></h5>
<p>Maguire, i.e. Thomas, committed great depredations on the sons of Annadh Mac Donnell, on which occasion he slew Edmond Mac Donnell.</p>
<h5><strong>1444</strong> | <a href="">CELT: Annals of the Four Masters 1444.4</a></h5>
<p>After the death of Hugh, a great army was led by Owen, son of Niall Oge (i.e. the O'Neill); and the greater number of the chieftains of Ulster, O'Donnell excepted, marched with a numerous army to plunder and destroy the Clann-Hugh-Boy. Murtough Roe O'Neill, Henry O'Neill, Mac Quillin, and all their auxiliaries, assembled to oppose this army in the territory of Duibhthrian Dufferin. They cut a passage through the wood, in the direction which they conceived they the enemy would approach them. O'Neill with his forces advanced to this narrow passage, when the others charged them, and slew Mac Donnell Galloglagh, who was in the rear of the army, amongst the baggage. The army became much discouraged at this, so that they delivered up to the sons of Mac-I-Neill Boy all such hostages as they chose to select, namely, Hugh, the son of O'Neill, the son of Henry O'Neill, the son of Mac Mahon, the son of O'Mellan, and fifteen other hostages besides, on condition of being themselves permitted to return home through the passage already mentioned. This being agreed to, they took their way homeward in sorrow and disgrace.</p>
<h5><strong>1449</strong> | <a href="">CELT: Annals of the Four Masters 1449.6</a></h5>
<p>A sudden defeat was given to Murtough Roe O'Neill, in which the son of Mulmurry Mac Sweeny, O'Neill's constable, Aengus, the son of Mac Donnell of Scotland, and many others, were slain.</p>
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
  <h2 id="JohnMacDonald">John MacDonald, Conastable of the Irish of Ulster</a></h2>
  <h4>Submission Documents</h4>
  <ul>
    <li><a href="/instruments/Instrument1.php">Instrument 1</a></li>
    <li><a href="/instruments/Instrument16.php">Instrument 16</a></li>
  </ul>
  <h4>About</h4>
    <p></p>
  <h4>Location</h4>
  <p><a href="/places/Dungannon.php">Dungannon</a></p>
  <h4>Further Reading</h4>
  <p><strong>Curtis's biographical note:</strong> MacDonald or MacDonnell, Shane, John, or Eoin, see pp. 150, 175. He was son of John or Eoin of Isla. The latter, after joining Edward Balliol and being claimed as his liegeman by Edward III, was confirmed as ‘Lord of the Isles’ in 1372 by King Robert II, whose daughter Margaret he had married. He died in 1387 (AU), ‘King of Insi Gall’, i.e. the Hebrides. His eldest son, Donal ‘of Harlaw’, succeededd him; his second son was Shane of these Submissions, the ancestor of the Antrim MacDonnells. The two brothers quarrelled about John’s share of the patrimony and Donal drove John out of Scotland to take refuge with O’Neill. About 1399 John married Margery Byset, only child and heiress of John Byset, lord of the Glens of Antrim, who had been slain by the Savages of the Ards of Down in 1383 (see Hill’s MacDonnells of Antrim). John in our Submissions calls himself ‘Constable of the Irish of Ulster’; this was a title hereditary in a branch of the Clann-Somhairle which was already settled in Ireland and served the O’Neills: in 1368 Alexander Og MacDonnell, Lord of the Galloglass, died (AU). </p>
  <p>Simon Egan, <a href="https://www.ssns.org.uk/wp-content/uploads/2020/04/Egan_2018_Vol_49_pp_61_78.pdf">“The Early Stewart Kings, the Lordship of the Isles, and Ireland, c. 1371-c. 1433,”</a> <i>Northern Studies</i> 49 (2018): 61-78.</p>
  <p>Éamon Ó Doibhlin, “Domhnach Mór: Part IV: The Insurrection of 1641 and Its Background,” <i>Seanchas Ardmhacha</i> 3, no. 2 (1959): 401-429.</p>
  <p>Richard Oram, ed., <i>The Lordship of the Isles</i> (Leiden: Brill, 2014).</p>
  <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
  <footer>
    <?php include "../footer.html" ?>
</footer>
</body>
</html>
