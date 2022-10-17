<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" href="https://submissionstrategies.com/css/r2.css" />
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
			width: 900px;
			height: 600px;
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
	<meta charset="UTF-8">
	<meta name="title" content="Submission Strategies: The Submissions to Richard II, 1395">
	<meta name="description" content="An interactive visualization of the spatial and social networks in 14th century Ireland">
	<meta name="author" content="Margaret K. Smith">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Richard II: Mapping the Submissions</title>
	<base href="https://submissionstrategies.com" target="_blank">
</head>
<body>
	<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>
	<script src='https://submissionstrategies.com/js/L.Control.Layers.Tree.js'></script>
	<script src='https://submissionstrategies.com/js/leaflet.polylineoffset.js'></script>
<header>
	<?php include "./header.html" ?>
</header>
<h1>Mapping the Submissions</h1>
<h2>How to use the map</h2>
<p>By default, all people and place layers are turned on, and submission layers are turned off. Hover over either of the two layer buttons in the top right corner to toggle the layers, either individually or in groups. When the data appears on the map, you can click on each point or line to see more information.</p>
<p>The People and Places layers show all individuals and locations named in or inferred from the text. Click on each point or icon to see more information, including a link to the full record.</p>
<p>The Submissions layers show each submission event, as recorded in notarial instruments. Each Submission layer includes the individuals named, the site of the submission, and color-coded links indicating the role of each person in the submission: authorities in purple, submitting parties in orange, interpreters in green, and witnesses in gold.</p>
	<div style="margin: auto" id = "map"></div>
	<script>
		var map = L.map('map', {
			center: [54.20419420887825, -4.557068809702086],
			zoom: 6
		});

		L.tileLayer('https://api.maptiler.com/maps/topo/{z}/{x}/{y}.png?key=4CI3hvSGGwgJXODif6KH', {attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
		}).addTo(map);

// Custom icons
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

// Places
// Secular sites
		var WindsorCastle = L.marker([51.48398083527779, -0.6044134311929068], {icon: castleIcon}).bindPopup('<strong>Location: Windsor Castle</strong><br/><a href="/richard-ii/places/WindsorCastle.html">View resources</a>');
		var Dungannon = L.marker([54.5063072522902, -6.768650213215768], {icon: castleIcon}).bindPopup('<strong>Location: Dungannon</strong><br/><a href="/richard-ii/places/Dungannon.html">View resources</a>');
		var DublinCastle = L.marker([53.343059024832215, -6.267460588689023], {icon: castleIcon}).bindPopup('<strong>Location: Dublin Castle</strong><br/><a href="/richard-ii/places/DublinCastle.html">View resources</a>');
		var Tandragee = L.marker([54.35433661014168, -6.417615938831388], {icon: castleIcon}).bindPopup('<strong>Location: Tandragee</strong><br/><a href="/richard-ii/places/Tandragee.html">View resources</a>');
		var Ballykean = L.marker([53.222980096917325, -7.262605604662662], {icon: castleIcon}).bindPopup('<strong>Location: Ballykean</strong><br/><a href="/richard-ii/places/Ballykean.html">View resources</a>');
		var Ferns = L.marker([52.590900115704486, -6.500068251353481], {icon: castleIcon}).bindPopup('<strong>Location: Ferns</strong><br/><a href="/richard-ii/places/Ferns.html">View resources</a>');
		var Ballintober = L.marker([53.722734056115634, -8.415850491520471], {icon: castleIcon}).bindPopup('<strong>Location: Ballintober</strong><br/><a href="/richard-ii/places/Ballintober.html">View resources</a>');
		var Ballycarbery = L.marker([51.94903099242467, -10.258605292800087], {icon: castleIcon}).bindPopup('<strong>Location: Ballycarbery</strong><br/><a href="/richard-ii/places/Ballycarbery.html">View resources</a>');
		var Dundrum = L.marker([54.26405024505779, -5.844814792025816], {icon: castleIcon}).bindPopup('<strong>Location: Dundrum</strong><br/><a href="/richard-ii/places/Dundrum.html">View resources</a>');
		var Glin = L.marker([52.57014569642131, -9.294740763174241], {icon: castleIcon}).bindPopup('<strong>Location: Glin</strong><br/><a href="/richard-ii/places/Glin.html">View resources</a>');
		var Ballina = L.marker([54.120883056109335, -9.142255900242674], {icon: castleIcon}).bindPopup('<strong>Location: Ballina</strong><br/><a href="/richard-ii/places/Ballina.html">View resources</a>');
		var ClonroadMore = L.marker([52.84795897344801, -8.972026293564303], {icon: castleIcon}).bindPopup('<strong>Location: Clonroad More</strong><br/><a href="/richard-ii/places/ClonroadMore.html">View resources</a>');
		var Dunamase = L.marker([53.032003403834636, -7.210730631050135], {icon: castleIcon}).bindPopup('<strong>Location: Dunamase</strong><br/><a href="/richard-ii/places/Dunamase.html">View resources</a>');
		var Rathangan = L.marker([53.21965782033275, -7.0021621740278945], {icon: castleIcon}).bindPopup('<strong>Location: Rathangan</strong><br/><a href="/richard-ii/places/Rathangan.html">View resources</a>');
		var Castlecomer = L.marker([52.80625387806498, -7.202831361169027], {icon: castleIcon}).bindPopup('<strong>Location: Castlecomer</strong><br/><a href="/richard-ii/places/Castlecomer.html">View resources</a>');
		var Aghaboe = L.marker([52.92378377374355, -7.513021134328597], {icon: castleIcon}).bindPopup('<strong>Location: Aghaboe</strong><br/><a href="/richard-ii/places/Aghaboe.html">View resources</a>');
		var Powerscourt = L.marker([53.18463122519382, -6.1872523309723855], {icon: castleIcon}).bindPopup('<strong>Location: Powerscourt</strong><br/><a href="/richard-ii/places/Powerscourt.html">View resources</a>');
		var Gowran = L.marker([52.6286558112801, -7.061082502234726], {icon: castleIcon}).bindPopup('<strong>Location: Gowran</strong><br/><a href="/richard-ii/places/Gowran.html">View resources</a>');
		var Nenagh = L.marker([52.865144995499804, -8.19816891618452], {icon: castleIcon}).bindPopup('<strong>Location: Nenagh</strong><br/><a href="/richard-ii/places/Nenagh.html">View resources</a>');
		var Castleconnell = L.marker([52.71213203579604, -8.503683679502876], {icon: castleIcon}).bindPopup('<strong>Location: Castleconnell</strong><br/><a href="/richard-ii/places/Castleconnell.html">View resources</a>');
		var Gaulstown = L.marker([52.30933453171065, -7.113833917056847], {icon: castleIcon}).bindPopup('<strong>Location: Gaulstown</strong><br/><a href="/richard-ii/places/Gaulstown.html">View resources</a>');
		var Leap = L.marker([53.03050356029592, -7.809028264884678], {icon: castleIcon}).bindPopup('<strong>Location: Leap</strong><br/><a href="/richard-ii/places/Leap.html">View resources</a>');
		var Athenry = L.marker([53.29989540496307, -8.74539918683801], {icon: castleIcon}).bindPopup('<strong>Location: Athenry</strong><br/><a href="/richard-ii/places/Athenry.html">View resources</a>');
		var Lixnaw = L.marker([52.402309862021305, -9.628663487621754], {icon: castleIcon}).bindPopup('<strong>Location: Lixnaw</strong><br/><a href="/richard-ii/places/Lixnaw.html">View resources</a>');
		var Kilbrittain = L.marker([51.67552178247685, -8.679032758580476], {icon: castleIcon}).bindPopup('<strong>Location: Kilbrittain</strong><br/><a href="/richard-ii/places/Kilbrittain.html">View resources</a>');
		var KingJohns = L.marker([52.669900149141625, -8.625543760062053], {icon: castleIcon}).bindPopup('<strong>Location: King John&apos;s Castle</strong><br/><a href="/richard-ii/places/Limerick.html">View resources</a>');
		var Macroom = L.marker([51.90520051539335, -8.96220776599217], {icon: castleIcon}).bindPopup('<strong>Location: Macroom</strong><br/><a href="/richard-ii/places/Macroom.html">View resources</a>');
		var Reginalds = L.marker([52.26060981564144, -7.105420502725048], {icon: castleIcon}).bindPopup('<strong>Location: Reginald&apos;sTower</strong><br/><a href="/richard-ii/places/Waterford.html">View resources</a>');
		var Geoghegan = L.marker([53.443415225674656, -7.489401350912528], {icon: castleIcon}).bindPopup('<strong>Location: Geoghegan</strong><br/><a href="/richard-ii/places/Geoghegan.html">View resources</a>');
		var Tullymongan = L.marker([53.9887817355458, -7.357948192232346], {icon: castleIcon}).bindPopup('<strong>Location: Tullymongan</strong><br/><a href="/richard-ii/places/Tullymongan.html">View resources</a>');
		var Lissardowlan = L.marker([53.71558456704111, -7.7181397682899116], {icon: castleIcon}).bindPopup('<strong>Location: Lissardowlan</strong><br/><a href="/richard-ii/places/Lissardowlan.html">View resources</a>');
		var Ballygory = L.marker([52.835027006518125, -6.7951297352061655], {icon: castleIcon}).bindPopup('<strong>Location: Ballygory</strong><br/><a href="/richard-ii/places/Ballygory.html">View resources</a>');
		var CarlowCastle = L.marker([52.83634711708233, -6.935924273548353], {icon: castleIcon}).bindPopup('<strong>Location: Carlow Castle</strong><br/><a href="/richard-ii/places/CarlowCastle.html">View resources</a>');
		var OBrenansCross = L.marker([52.75435526930308, -7.233432388026526], {icon: castleIcon}).bindPopup('<strong>Location: O&apos;Brenan&apos;s Cross</strong><br/><a href="/richard-ii/places/OBrenansCross.html">View resources</a>');
		var TrinityShip = L.marker([52.259967122054654, -7.035138093268444], {icon: castleIcon}).bindPopup('<strong>Location: The ship <i>Trinity</i> in the port of Waterford</strong><br/><a href="/richard-ii/places/Trinity.html">View resources</a>');
		var CarlowCastleMeadow = L.marker([52.83629323692305, -6.936742953013918], {icon: castleIcon}).bindPopup('<strong>Location: a meadow near Carlow Castle</strong><br/><a href="/richard-ii/places/CarlowCastleMeadow.html">View resources</a>');
		var RochesterCastle = L.marker([51.38989748942007, 0.5014839976535792], {icon: castleIcon}).bindPopup('<strong>Location: Rochester Castle</strong><br/><a href="/richard-ii/places/RochesterCastle.html">View resources</a>');
		var EpworthCastle = L.marker([53.52635679996112, -0.8166546393819635], {icon: castleIcon}).bindPopup('<strong>Location: Epworth Castle</strong><br/><a href="/richard-ii/places/Epworth.html">View resources</a>');
		var Clonakenny = L.marker([52.87305674403316, -7.830682165940664], {icon: castleIcon}).bindPopup('<strong>Location: Clonakenny</strong><br/><a href="/richard-ii/places/Clonakenny.html">View resources</a>');
		var NewLeighlin = L.marker([52.73585151137786, -6.977905724552096], {icon: castleIcon}).bindPopup('<strong>Location: New Leighlin</strong><br/><a href="/richard-ii/places/NewLeighlin.html">View resources</a>');
		var Kilsaran = L.marker([53.89242273355447, -6.402687121143925], {icon: castleIcon}).bindPopup('<strong>Location: Manor of Kilsaran</strong><br/><a href="/richard-ii/places/Kilsaran.html">View resources</a>');
// Ecclesiastical sites
		var YorkMinster = L.marker([53.96261321710904, -1.082564232319088], {icon: churchIcon}).bindPopup('<strong>Location: York Minster</strong><br/><a href="/richard-ii/places/YorkMinster.html">View resources</a>');
		var OldStPauls = L.marker([51.51391872458704, -0.09835060227396925], {icon: churchIcon}).bindPopup('<strong>Location: Old St. Paul&apos;s</strong><br/><a href="/richard-ii/places/OldStPauls.html">View resources</a>');
		var ChichesterCath = L.marker([50.836444616933846, -0.7806593023080537], {icon: churchIcon}).bindPopup('<strong>Location: Chichester Cathedral</strong><br/><a href="/richard-ii/places/ChichesterCath.html">View resources</a>');
		var WellsCath = L.marker([51.210575282198946, -2.6434303599616404], {icon: churchIcon}).bindPopup('<strong>Location: Wells Cathedral</strong><br/><a href="/richard-ii/places/WellsCath.html">View resources</a>');
		var ChristChurchDub = L.marker([53.34345533225444, -6.27106020218046], {icon: churchIcon}).bindPopup('<strong>Location: Christ Church, Dublin</strong><br/><a href="/richard-ii/places/ChristChurchDub.html">View resources</a>');
		var ChristChurchWat = L.marker([52.26005051914892, -7.107510486891409], {icon: churchIcon}).bindPopup('<strong>Location: Christ Church, Waterford</strong><br/><a href="/richard-ii/places/ChristChurchWat.html">View resources</a>');
		var RockCashel = L.marker([52.52018726099023, -7.890430744550451], {icon: churchIcon}).bindPopup('<strong>Location: the Rock of Cashel</strong><br/><a href="/richard-ii/places/RockCashel.html">View resources</a>');
		var LlandaffCath = L.marker([51.49581515376926, -3.217197702793551], {icon: churchIcon}).bindPopup('<strong>Location: Llandaff Cathedral</strong><br/><a href="/richard-ii/places/LlandaffCath.html">View resources</a>');
		var CathPeterPaul = L.marker([53.555824660725385, -6.7724734444970744], {icon: churchIcon}).bindPopup('<strong>Location: Cathedral of Ss. Peter and Paul</strong><br/><a href="/richard-ii/places/CathPeterPaul.html">View resources</a>');
		var StCaniceCath = L.marker([52.65505417318262, -7.259360585833883], {icon: churchIcon}).bindPopup('<strong>Location: St. Canice&apos;s Cathedral</strong><br/><a href="/richard-ii/places/StCaniceCath.html">View resources</a>');
		var StMaryCath = L.marker([53.84522952503657, -8.19067033028418], {icon: churchIcon}).bindPopup('<strong>Location: St. Mary&apos;s Cathedral</strong><br/><a href="/richard-ii/places/StMaryCath.html">View resources</a>');
		var StLaserianCath = L.marker([52.73610773387068, -7.025380359884095], {icon: churchIcon}).bindPopup('<strong>Location: St. Laserian&apos;s Cathedral</strong><br/><a href="/richard-ii/places/StLaserianCath.html">View resources</a>');
		var StColmanCath = L.marker([51.86183188514391, -8.119323571832352], {icon: churchIcon}).bindPopup('<strong>Location: St. Colman&apos;s Cathedral</strong><br/><a href="/richard-ii/places/StColmanCath.html">View resources</a>');
		var StMullins = L.marker([52.984871314450615, -6.808651542688595], {icon: churchIcon}).bindPopup('<strong>Location: St. Mullins Church</strong><br/><a href="/richard-ii/places/StMullins.html">View resources</a>');
		var CoventryCath = L.marker([52.408720821933144, -1.507126275731839], {icon: churchIcon}).bindPopup('<strong>Location: Coventry Cathedral</strong><br/><a href="/richard-ii/places/CoventryCath.html">View resources</a>');
		var LichfieldCath = L.marker([52.68563576496434, -1.8303309315376164], {icon: churchIcon}).bindPopup('<strong>Location: Lichfield Cathedral</strong><br/><a href="/richard-ii/places/LichfieldCath.html">View resources</a>');
		var ElyCath = L.marker([52.3989490180776, 0.2624057062999244], {icon: churchIcon}).bindPopup('<strong>Location: Ely Cathedral</strong><br/><a href="/richard-ii/places/ElyCath.html">View resources</a>');
		var Donaghmore = L.marker([54.531210748889556, -6.81312025513508], {icon: churchIcon}).bindPopup('<strong>Location: Donaghmore</strong><br/><a href="/richard-ii/places/Donaghmore.html">View resources</a>');
		var StPatrickCath = L.marker([54.348037876849645, -6.656671080518698], {icon: churchIcon}).bindPopup('<strong>Location: St. Patrick&apos;s Cathedral</strong><br/><a href="/richard-ii/places/StPatrickCath.html">View resources</a>');
		var LincolnCath = L.marker([53.23445090005561, -0.5359512293532843], {icon: churchIcon}).bindPopup('<strong>Location: Lincoln Cathedral</strong><br/><a href="/richard-ii/places/LincolnCath.html">View resources</a>');
		var Hospitaller = L.marker([53.34298855012456, -6.300094260031192], {icon: churchIcon}).bindPopup('<strong>Location: Hospitaller house, Kilmainham</strong><br/><a href="/richard-ii/places/Hospitaller.html">View resources</a>');
		var WestminsterAbbey = L.marker([51.49946837115046, -0.12730131534475056], {icon: churchIcon}).bindPopup('<strong>Location: Westminster Abbey</strong><br/><a href="/richard-ii/places/WestminsterAbbey.html">View resources</a>');
		var ClonfertCath = L.marker([53.240746466431645, -8.058324987023699], {icon: churchIcon}).bindPopup('<strong>Location: Clonfert Cathedral</strong><br/><a href="/richard-ii/places/ClonertCath.html">View resources</a>');
		var DroghedaDom = L.marker([53.71799324577726, -6.351336075629299], {icon: churchIcon}).bindPopup('<strong>Location: Drogheda Dominican priory</strong><br/><a href="/richard-ii/places/DroghedaDom.html">View resources</a>');
		var KilkennyDom = L.marker([52.653899031468974, -7.257574029379863], {icon: churchIcon}).bindPopup('<strong>Location: Kilkenny Dominican priory</strong><br/><a href="/richard-ii/places/KilkennyDom.html">View resources</a>');
		var StThomasMartyr = L.marker([53.34189533431597, -6.280755924061299], {icon: churchIcon}).bindPopup('<strong>Location: Monastery of St. Thomas Martyr</strong><br/><a href="/richard-ii/places/StThomasMartyr.html">View resources</a>');
		var CastledermotFran = L.marker([52.90857225717626, -6.836974246222986], {icon: churchIcon}).bindPopup('<strong>Location: Castledermot Franciscan friary</strong><br/><a href="/richard-ii/places/CastledermotFran.html">View resources</a>');
		var DroghedaFran = L.marker([53.71844105486766, -6.349343432903698], {icon: churchIcon}).bindPopup('<strong>Location: Drogheda Franciscan friary</strong><br/><a href="/richard-ii/places/DroghedaFran.html">View resources</a>');
		var WaterfordFran = L.marker([52.2606239826486, -7.10649212761256], {icon: churchIcon}).bindPopup('<strong>Location: Waterford Franciscan friary</strong><br/><a href="/richard-ii/places/WaterfordFran.html">View resources</a>');
		var DundalkFran = L.marker([54.00627489063146, -6.393836344329416], {icon: churchIcon}).bindPopup('<strong>Location: Dundalk Franciscan friary</strong><br/><a href="/richard-ii/places/DundalkFran.html">View resources</a>');
		var LeighlinCarm = L.marker([52.7369175458268, -7.023268375122851], {icon: churchIcon}).bindPopup('<strong>Location: Leighlin Carmelite house</strong><br/><a href="/richard-ii/places/LeighlinCarm.html">View resources</a>');
		var ConallAbbey = L.marker([53.17261952014167, -6.774913159705478], {icon: churchIcon}).bindPopup('<strong>Location: Conall Abbey</strong><br/><a href="/richard-ii/places/ConallAbbey.html">View resources</a>');

// People
		var RichardII = L.marker([51.48398083527779, -0.6044134311929068]).bindPopup('<strong>Name: Richard II</strong><br/><Role: Authority<br/>Positions: King of England and France; Lord of Ireland<br/>Location: Windsor Castle<br/><a href="www.example.org">View resources</a>');
		var JohnStanley = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Stanley</strong><br/><Role: Authority<br/>Positions: member of court, formerly Lord Lieutenant and Justiciar of Ireland<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Stanley.html">View resources</a>');
		var JohnMacDonald = L.marker([54.5053072522902, -6.768650213215768], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John MacDonald</strong><br/>Role: Submitting party<br/>Positions: Captain of his nation; Constable of the Irish of Uster<br/>Location: Dungannon (the Hill)<br/><a href="/richard-ii/people/MacDonald.html">View resources</a>');
		var ThomasTalbot = L.marker([53.343059024832215, -6.267460588689023], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas Talbot</strong><br/>Role: Interpreter<br/>Location: Dublin Castle<br/><a href="/richard-ii/people/Talbot.html">View resources</a>');
		var ThomasAbpYork = L.marker([53.96261321710904, -1.082564232319088], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas, Archbishop of York</strong><br/>Role: Witness<br/>Position: Archbishop of York<br/>Location: York Minster<br/><a href="/richard-ii/people/Arundel.html">View resources</a>');
		var RobertBpLondon = L.marker([51.51391872458704, -0.09835060227396925], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Robert, Bishop of London</strong><br/>Role: Witness<br/>Position: Bishop of London<br/>Location: Old St. Paul&apos;s<br/><a href="/richard-ii/people/Braybrooke.html">View resources</a>');
		var RichardBpChichester = L.marker([50.836444616933846, -0.7806593023080537], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Richard, Bishop of Chichester</strong><br/>Role: Witness<br/>Position: Bishop of Chichester; Treasurer<br/>Location: Chichester Cathedral<br/><a href="/richard-ii/people/Mitford.html">View resources</a>');
		var ThomasMowbray = L.marker([53.52635679996112, -0.8166546393819635], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas Mowbray</strong><br/>Role: Witness<br/>Positions: Marshal of England; Earl of Nottingham<br/>Location: Epworth Castle<br/><a href="/richard-ii/people/Mowbray.html">View resources</a>');
		var ThomasPercy = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas Percy</strong><br/>Role: Witness<br/>Position: Seneschal<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Percy.html">View resources</a>');
		var WilliamScrope = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: William Scrope</strong><br/>Roles: Witness, Interpreter<br/>Position: King&apos;s Chamberlain<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Scrope.html">View resources</a>');
		var ThomasSparkeford = L.marker([51.210575282198946, -2.6434303599616404], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas Sparkeford</strong><br/>Role: Witness<br/> Position: Clerk of the diocese of Bath and Wells<br/>Location: Wells Cathedral<br/><a href="/richard-ii/people/Sparkeford.html">View resources</a>');
		var CatholicusOHanlon = L.marker([54.35433661014168, -6.417615938831388], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Catholicus O&apos;Hanlon</strong><br/>Role: Submitting party<br/>Location: Tandragee<br/><a href="/richard-ii/people/OHanlon.html">View resources</a>');
		var DonnchadhOByrne = L.marker([53.00194002318177, -6.078725350908511], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Donnchadh O&apos;Byrne</strong><br/>Role: Submitting party<br/>Location: Newrath, co. Wicklow<br/><a href="/richard-ii/people/OByrne.html">View resources</a>');
		var RobertAbpDublin = L.marker([53.34345533225444, -6.27106020218046], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Robert, Archbishop of Dublin</strong><br/>Role: Witness<br/>Positions: Archbishop of Dublin; Primate of Ireland; Chancellor<br/>Location: Christ Church<br/><a href="/richard-ii/people/Waldby.html">View resources</a>');
		var RobertBpLismoreWaterford = L.marker([52.26005051914892, -7.107510486891409], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Robert, Bishop of Lismore and Waterford</strong><br/>Role: Witness<br/>Position: Bishop of Lismore and Waterford<br/>Location: Christ Church<br/><a href="/richard-ii/people/Read.html">View resources</a>');
		var SimonFelbryge = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Simon Felbryge</strong><br/>Role: Witness<br/>Positions: Standard-bearer; Knight<br/>Location: Windsor<br/><a href="/richard-ii/people/Felbryge.html">View resources</a>');
		var BaldwinBereford = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Baldwin Bereford</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor<br/><a href="/richard-ii/people/Bereford.html">View resources</a>');
		var ThomasMareward = L.marker([53.343059024832215, -6.267460588689023], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas Mareward</strong><br/>Role: Witness<br/>Position: Mayor of Dublin<br/>Location: Dublin Castle<br/><a href="/richard-ii/people/Mareward.html">View resources</a>');
		var DavidBertevyll = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: David Bertevyll</strong><br/>Role: Witness<br/>Position: Sergeant-at-arms<br/>Location: Windsor<br/><a href="/richard-ii/people/Bertevyll.html">View resources</a>');
		// <strong>Name: William Bernard</strong><br/>Role: Witness<br/>[N/A<br/><a href="www.example.org">View resources</a>');
		var ArtODempsey = L.marker([53.222980096917325, -7.262605604662662], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Art O&apos;Dempsey</strong><br/>Role: Submitting party<br/>Location: Ballykean tower house<br/><a href="/richard-ii/people/ODempsey.html">View resources</a>');
		var JohnMalachy = L.marker([53.34345533225444, -6.27106020218046], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Malachy</strong><br/>Role: Interpreter<br/>Position: Chaplain<br/>Location: Dublin diocese<br/><a href="/richard-ii/people/Malachy.html">View resources</a>');
		var PeterAbpCashel = L.marker([52.52018726099023, -7.890430744550451], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Peter, Archbishop of Cashel</strong><br/>Role: Witness<br/>Position: Archbishop of Cashel<br/>Location: Rock of Cashel<br/><a href="/richard-ii/people/Hackett.html">View resources</a>');
		var TidemanBpLlandaff = L.marker([51.49581515376926, -3.217197702793551], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Tideman, Bishop of Llandaff</strong><br/>Role: Witness<br/>Position: Bishop of Llandaff<br/>Location: Llandaff Cathedral<br/><a href="/richard-ii/people/Tideman.html">View resources</a>');
		var AlexanderBpMeath = L.marker([53.555824660725385, -6.7724734444970744], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Alexander, Bishop of Meath</strong><br/>Role: Witness<br/> Position: Bishop of Meath<br/>Location: Cathedral of SS Peter and Paul<br/><a href="www.example.org">View resources</a>');
		var RichardBpOssory = L.marker([52.65505417318262, -7.259360585833883], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Richard, Bishop of Ossory</strong><br/>Role:Witness<br/>Position: Bishop of Ossory<br/>Location: St. Canice&apos;s Cathedral<br/><a href="www.example.org">View resources</a>');
		var ThomasBpElphin = L.marker([53.84522952503657, -8.19067033028418], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas, Bishop of Elphin</strong><br/>Role:Witness<br/>Position: Bishop of Elphin<br/>Location: St. Mary&apos;s Cathedral<br/><a href="www.example.org">View resources</a>');
		var JohnBpLeighlin = L.marker([52.73610773387068, -7.025380359884095], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John, Bishop of Leighlin</strong><br/>Role: Witness<br/>Position: Bishop of Leighlin<br/>Location: St. Laserian&apos;s Cathedral<br/><a href="/richard-ii/people/Griffin.html">View resources</a>');
		var MilesBpCloyne = L.marker([53.667102696080896, -7.692579048978749], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Miles, Bishop of Clonmacnoise</strong><br/>Role: Witness<br/>Position: Bishop of Clonmacnoise<br/>Location: St. Mel&apos;s Cathedral (Ardagh)<br/><a href="www.example.org">View resources</a>');
		var EdwardCorkRutland = L.marker([52.524520973168976, -0.4355533758965811], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Edward, Earl of Cork and Rutland</strong><br/>Role: Witness<br/>Position: Earl of Cork and Rutland<br/>Location: Fotheringhay Castle<br/><a href="www.example.org">View resources</a>');
		var RogerMarchUlster = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Roger, Earl of March and Ulster</strong><br/>Role: Witness<br/>Position: Earl of March and Ulster<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Mortimer.html">View resources</a>');
		var JohnHolland = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Holland</strong><br/>Role: Witness<br/>Position: Earl of Huntingdon<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Holland.html">View resources</a>');
		var JohnStanley = L.marker([53.57605516263993, -2.8180305756709085], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Stanley</strong><br/>Role: Authority<br/>[N/A<br/><a href="www.example.org">View resources</a>');
		var WilliamBeg = L.marker([52.590900115704486, -6.500068251353481], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: William Beg</strong><br/>Role: Submitting party<br/>Position: Reeve of Art MacMurrough<br/>Location: Ferns Castle<br/><a href="www.example.org">View resources</a>');
		var JohnNicholson = L.marker([52.590900115704486, -6.500068251353481], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Nicholson</strong><br/>Role: Submitting party<br/>Position: Reeve of Art MacMurrough<br/>Location: Ferns Castle<br/><a href="/richard-ii/people/Nicholson.html">View resources</a>');
		var MauriceAdalagh = L.marker([52.590900115704486, -6.500068251353481], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Maurice Adalagh</strong><br/>Role: Submitting party<br/>Position: Reeve of Art MacMurrough<br/>Location: Ferns Castle<br/><a href="www.example.org">View resources</a>');
		var MalachyCam = L.marker([52.590900115704486, -6.500068251353481], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Malachy Cam</strong><br/>Role: Submitting party<br/>Position: Tenant of Art MacMurrough<br/>Location: Ferns Castle<br/><a href="www.example.org">View resources</a>');
		var JohnGlasmorgh = L.marker([52.590900115704486, -6.500068251353481], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Glasmorgh</strong><br/>Role: Submitting party<br/>Position: Tenant of Art MacMurrough<br/>Location: Ferns Castle<br/><a href="www.example.org">View resources</a>');
		var FergalOKurryn = L.marker([52.984871314450615, -6.808651542688595], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Fergal O&apos;Kurryn</strong><br/>Roles: Witness, Interpreter<br/>Position: Vicar of the parish church of Tamlyn<br/>Location: St. Mullins Church<br/><a href="/richard-ii/people/OKurryn.html">View resources</a>');
		var RobertdeOrrey = L.marker([52.408720821933144, -1.507126275731839], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Robert de Orrey</strong><br/>Role: Witness<br/>Position: Coventry diocese<br/>Location: Coventry Cathedral<br/><a href="/richard-ii/people/deOrrey.html">View resources</a>');
		var HenryBekirton = L.marker([52.68563576496434, -1.8303309315376164], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Henry Bekirton</strong><br/>Role: Witness<br/>Position: Lichfield diocese<br/>Location: Lichfield Cathedral<br/><a href="/richard-ii/people/Bekirton.html">View resources</a>');
		var RobertBoleyne = L.marker([52.3989490180776, 0.2624057062999244], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Robert Boleyne</strong><br/>Role: Witness<br/>Position: Clerk of Ely diocese<br/>Location: Ely Cathedral<br/><a href="/richard-ii/people/Boleyne.html">View resources</a>');
		var TadhgOMeagher = L.marker([52.87305674403316, -7.830682165940664], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Tadhg O&apos;Meagher</strong><br/>Role: Submitting party<br/>Position: Captain of his nation<br/>Location: Clonakenny<br/><a href="/richard-ii/people/OMeagher.html">View resources</a>');
		var TurlochOConorDon = L.marker([53.722734056115634, -8.415850491520471], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Turloch O&apos;Conor Don</strong><br/>Role:Submitting party<br/>Position: Captain of his nation<br/>Location: Ballintober Castle<br/><a href="OConorDon.html">View resources</a>');
		var TadhgMacCarthyMor = L.marker([51.94903099242467, -10.258605292800087], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Tadhg MacCarthy Mor</strong><br/>Role: Submitting party<br/>Position: Prince of the Irish of Desmond<br/>Location: Ballycarbery Castle<br/><a href="/richard-ii/people/MacCarthyMor.html">View resources</a>');
		var JohnGolafre = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Golafre</strong><br/>Role: Witness<br/> Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Golafre.html">View resources</a>');
		var NiallOgONeill = L.marker([54.5073072522902, -6.768650213215768]).bindPopup('<strong>Name: Niall Og O&apos;Neill</strong><br/>Role: Submitting party<br/>Position: Captain of his nation<br/>Location: Dungannon (the Hill)<br/><a href="/richard-ii/people/ONeill.html">View resources</a>');
		var ThomasOLocheran = L.marker([54.531210748889556, -6.81312025513508], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas O&apos;Locheran</strong><br/>Role: Interpreter<br/>Location: Donaghmore High Cross (closest approx based on Down Survey map - Claggantowne)<br/><a href="/richard-ii/people/OLocheran.html">View resources</a>');
		var JohnAbpArmagh = L.marker([54.348037876849645, -6.656671080518698], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John, Archbishop of Armagh</strong><br/>Role: Witness<br/>Position: Archbishop of Armagh; Primate of all Ireland<br/>Location: Cathedral Church of St. Patrick (COI)<br/><a href="/richard-ii/people/Colton.html">View resources</a>');
		var MauriceMagennis = L.marker([54.26405024505779, -5.844814792025816], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Maurice Magennis</strong><br/>Role:Submitting party<br/>Position: Lord of Iveagh<br/>Location: Dundrum Castle<br/><a href="/richard-ii/people/Magennis.html">View resources</a>');
		var StephenGarnon = L.marker([53.89242273355447, -6.402687121143925], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Stephen Garnon</strong><br/>Role: Interpreter<br/>Location: Manor of Kilsaran<br/><a href="/richard-ii/people/Garnon.html">View resources</a>');
		var NiallOHanlon = L.marker([54.35423661014168, -6.417615938831388], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Niall O&apos;Hanlon</strong><br/>Role: Submitting party<br/>Location: Tandragee<br/><a href="/richard-ii/people/OHanlon.html">View resources</a>');
		var AdamTobyn = L.marker([ 52.476269, -7.444880], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Adam Tobyn</strong><br/>Role: Submitting party<br/>Location: Killamery, Co. Kilkenny<br/><a href="/richard-ii/people/Tobyn.html">View resources</a>');
		var ThomasMacShane = L.marker([52.57014569642131, -9.294740763174241], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas MacShane</strong><br/>Role: Submitting party<br/>Location: Glin Castle<br/><a href="/richard-ii/people/FitzMaurice.html">View resources</a>');
		var WilliamBarrett = L.marker([54.120883056109335, -9.142255900242674], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: William Barrett</strong><br/>Role: Submitting party<br/>Location: Castle, Ballina, bar. Tirawley<br/><a href="/richard-ii/people/Barrett.html">View resources</a>');
		var MaeducCarraghBarrett = L.marker([54.120883056109335, -9.142255900242674], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Maeduc Carragh Barrett</strong><br/>Role: Submitting party<br/>Location: Castle, Ballina, bar. Tirawley<br/><a href="/richard-ii/people/Barrett.html">View resources</a>');
		var BernardusOBrien = L.marker([52.84795897344801, -8.972026293564303], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Bernardus O&apos;Brien</strong><br/>Role: Submitting party<br/>Position: Prince of Thomond<br/>Location: Clonroad More (castle)<br/><a href="/richard-ii/people/OBrien.html">View resources</a>');
		var RichardScrope = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Richard Scrope</strong><br/>Role:Witness<br/>Positions: King&apos;s Chamberlain; Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Scrope.html">View resources</a>');
		var WilliamArundel = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: William Arundel</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Arundel.html">View resources</a>');
		var JohnMelton = L.marker([53.23445090005561, -0.5359512293532843], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Melton</strong><br/>Role: Witness<br/>Position: Clerk of Lincoln diocese<br/>Location: Lincoln Cathedral<br/><a href="/richard-ii/people/Melton.html">View resources</a>');
		var GeraldOByrne = L.marker([53.00194002318177, -6.078725350908511], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Gerald O&apos;Byrne</strong><br/>Role: Submitting party<br/>Role: the O&apos;Byrne<br/><a href="/richard-ii/people/OByrne.html">View resources</a>');
		// <strong>Name: Donal O&apos;Nolan</strong><br/>Role: Submitting party<br/>Position: Captain of his nation<br/>[N/A<br/><a href="/richard-ii/people/ONolan.html">View resources</a>');
		var EdmundVale = L.marker([53.34298855012456, -6.300094260031192], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Edmund Vale</strong><br/>Role: Witness, Interpreter<br/>Position: Master of the Hospital of St. John of Jerusalem in Ireland<br/>Location: Hospitaller house, Kilmainham<br/><a href="/richard-ii/people/Vale.html">View resources</a>');
		var MalachyOMore = L.marker([53.032003403834636, -7.210730631050135], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Malachy O&apos;More</strong><br/>Role: Submitting party<br/>Position: Captain of his nation<br/>Location: Rock of Dunamase<br/><a href="/richard-ii/people/OMore.html">View resources</a>');
		var LugaidhOgOMore = L.marker([53.032003403834636, -7.210730631050135], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Lugaidh Og O&apos;More</strong><br/>Role: Submitting party<br/>Position: Son of Maurice Booy/Murchadh Buidhe<br/>Location: Rock of Dunamase<br/><a href="/richard-ii/people/OMore.html">View resources</a>');
		var ShaneOMore = L.marker([53.032003403834636, -7.210730631050135], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Shane O&apos;More</strong><br/>Role: Submitting party<br/>Position: Son of Maurice Booy/Murchadh Buidhe<br/>Location: Rock of Dunamase<br/><a href="/richard-ii/people/OMore.html">View resources</a>');
		var ArtOgMacMurrough = L.marker([52.590900115704486, -6.500068251353481], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Art Og MacMurrough</strong><br/>Role: Submitting party<br/>Position: Captain of his nation<br/>Location: Ferns Castle<br/><a href="/richard-ii/people/MacMurrough.html">View resources</a>');
		var MurchadhOConorFaly = L.marker([53.21965782033275, -7.0021621740278945], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Murchadh O&apos;Conor Faly</strong><br/>Role: Submitting party<br/>Position: Captain of his nation<br/>Location: Rathangan (tower house)<br/><a href="OConorFaly.html">View resources</a>');
		// <strong>Name: David Mor MacManus</strong><br/>Role: Submitting party<br/>[N/A]<br/><a href="www.example.org">View resources</a>');
		// <strong>Name: E. MacGerailt</strong><br/>Role: Submitting party<br/>[N/A]<br/><a href="www.example.org">View resources</a>');
		var GeoffreyOBrenan = L.marker([52.80625387806498, -7.202831361169027], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Geoffrey O&apos;Brenan</strong><br/>Role: Submitting party<br/>Location: Castlecomer House (site of two earlier castles)<br/><a href="/richard-ii/people/OBrenan.html">View resources</a>');
		var FinghinMacGillapatrick = L.marker([52.92378377374355, -7.513021134328597], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Finghin MacGillapatrick</strong><br/>Role: Submitting party<br/>Location: Aghaboe (castle)<br/><a href="/richard-ii/people/MacGillapatrick.html">View resources</a>');
		// <strong>Name: Henry Talon</strong><br/>Role: Submitting party<br/>[N/A<br/><a href="www.example.org">View resources</a>');
		var ThomasCarraghKavanagh = L.marker([52.590900115704486, -6.500068251353481], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas Carragh Kavanagh</strong><br/>Role: Submitting party<br/>Location: Ferns Castle<br/><a href="/richard-ii/people/MacMurrough.html">View resources</a>');
		// <strong>Name: Shane O&apos;Nolan</strong><br/>Role: Submitting party<br/>[N/A]<br/><a href="www.example.org">View resources</a>');
		// <strong>Name: Guy Lenfaunt</strong><br/>Role: Interpreter<br/>[N/A]<br/><a href="www.example.org">View resources</a>');
		var LeynaghFerssonOConor = L.marker([53.21965782033275, -7.0021621740278945], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Leynagh Fersson O&apos;Conor</strong><br/>Role: Submitting party<br/>Location: Rathangan (tower house)<br/><a href="/richard-ii/people/OConor.html">View resources</a>');
		var OToole = L.marker([53.18463122519382, -6.1872523309723855], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: O&apos;Toole</strong><br/>Role: Submitting party<br/>Location: Powerscourt<br/><a href="/richard-ii/people/OToole.html">View resources</a>');
		var LawrenceVerkerell = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Lawrence Verkerell</strong><br/>Role: Witness<br/>Position: Lord of Coytyf<br/>Location: Windsor<br/><a href="/richard-ii/people/Verkerell.html">View resources</a>');
		var JohnGreyly = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Greyly</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Greyly.html">View resources</a>');
		var GalfredoVale = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Galfredo Vale</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Vale.html">View resources</a>');
		var WilliamFaryndon = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: William Faryndon</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="Faryndon.html">View resources</a>');
		var ThomasClynton = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas Clynton</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Clynton.html">View resources</a>');
		var NicholasLangford = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Nicholas Langford</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Langford.html">View resources</a>');
		var ThomasIlketsale = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas Ilketsale</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Ilketsale.html">View resources</a>');
		var ThomasPykworth = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas Pykworth</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Pykworth.html">View resources</a>');
		var AlanPenynton = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Alan Penynton</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Penynton.html">View resources</a>');
		var JohnBrassebrig = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Brassebrig</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Brassebrig.html">View resources</a>');
		var EdwardPerys = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Edward Perys</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Perys.html">View resources</a>');
		var WalterBytterly = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Walter Bytterly</strong><br/>Role: Witness<br/>Position:: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Bytterly.html">View resources</a>');
		var WilliamDrayton = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: William Drayton</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Drayton.html">View resources</a>');
		var JohnDrayton = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Drayton</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Drayton.html">View resources</a>');
		var RobertLey = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Robert Ley</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Ley.html">View resources</a>');
		var DavidWogan = L.marker([51.48398083527779, -0.6044134311929068], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: David Wogan</strong><br/>Role: Witness<br/>Position: Knight<br/>Location: Windsor Castle<br/><a href="/richard-ii/people/Wogan.html">View resources</a>');
		var JamesOrmond = L.marker([52.6286558112801, -7.061082502234726], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: James, Earl of Ormond</strong><br/>Roles: Witness, Interpreter<br/>Position: Earl of Ormond<br/>Location: Gowran Castle<br/><a href="/richard-ii/people/Butler.html">View resources</a>');
		// <strong>Name: William de Burgo</strong><br/>Role: Submitting party<br/>[N/A<br/><a href="www.example.org">View resources</a>');
		var BernardOBrien = L.marker([52.84795897344801, -8.972026293564303], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Bernard O&apos;Brien</strong><br/>Role: Submitting party<br/>Position: Son of Tatheus/Taig O&apos;Brien<br/>Location: Clonroad More (castle)<br/><a href="/richard-ii/people/OBrien.html">View resources</a>');
		var DormiciusOBrien = L.marker([52.84795897344801, -8.972026293564303], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Dormicius O&apos;Brien</strong><br/>Role: Submitting party<br/>Position: Son of Tatheus/Taig O&apos;Brien<br/>Location: Clonroad More (castle<br/><a href="/richard-ii/people/OBrien.html">View resources</a>');
		var OdoOKennedyFinn = L.marker([52.865144995499804, -8.19816891618452], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Odo O&apos;Kennedy Finn</strong><br/>Role: Submitting party<br/>Location: Nenagh Castle<br/><a href="/richard-ii/people/OKennedyFinn.html">View resources</a>');
		var ThomasOKennedyDon = L.marker([52.865144995499804, -8.19816891618452], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas O&apos;Kennedy Don</strong><br/>Role: Submitting party<br/>Location: Nenagh Castle<br/><a href="/richard-ii/people/OKennedyDon.html">View resources</a>');
		// <strong>Name: Gerald Tallon</strong><br/>Role: Interpreter<br/>[N/A<br/><a href="www.example.org">View resources</a>');
		var TheobaldFitzWalter = L.marker([52.71213203579604, -8.503683679502876], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Theobald FitzWalter</strong><br/>Role: Submitting partyr<br/>Location: Castle Connell<br/><a href="/richard-ii/people/Burke.html">View resources</a>');
		var DavidGallBurke = L.marker([52.30933453171065, -7.113833917056847], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: David Gall Burke</strong><br/>Role: Submitting party<br/>Location: Unidentified castletown, Gaulstown<br/><a href="/richard-ii/people/Burke.html">View resources</a>');
		var TadhgOCarroll = L.marker([53.03050356029592, -7.809028264884678], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Tadhg O&apos;Carroll</strong><br/>Role: Submitting party<br/>Position: Captain of his nation<br/>Location: Leap Castle<br/><a href="/richard-ii/people/OCarroll.html">View resources</a>');
		// <strong>Name: Tadhg O&apos;Kelly</strong><br/>Role: Submitting party<br/>[N/A]
		var WilliamOCarroll = L.marker([53.03050356029592, -7.809028264884678], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: William O&apos;Carroll</strong><br/>Role: Submitting party, Interpreter<br/>Location: Leap Castle<br/><a href="/richard-ii/people/OCarroll.html">View resources</a>');
		var ThomasMerke = L.marker([51.49946837115046, -0.12730131534475056], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas Merke</strong><br/>Role: Witness<br/>Position: Monk of Westminster<br/>Location: Westminster Abbey<br/><a href="/richard-ii/people/Merke.html">View resources</a>');
		// <strong>Name: Cologh Magennis</strong><br/>Role: Submitting party<br/>[N/A]<br/><a href="/richard-ii/people/Magennis.html">View resources</a>');
		// <strong>Name: John Faltagh</strong><br/>Role: Interpreter<br/>[N/A]<br/><a href="/richard-ii/people/Faltagh.html">View resources</a>');
		// <strong>Name: Adam MacGilmore</strong><br/>Role: Submitting party<br/>[N/A]<br/><a href="/richard-ii/people/MacGilmore.html">View resources</a>');
		// <strong>Name: Philip MacMahon</strong><br/>Role: Submitting party<br/>[N/A]<br/><a href="/richard-ii/people/MacMahon.html">View resources</a>');
		// <strong>Name: Walter Teling</strong><br/>Role: Interpreter<br/>[N/A]<br/><a href="/richard-ii/people/Teling.html">View resources</a>');
		// <strong>Name: Odo MacMahon</strong><br/>Role: Submitting party<br/>[N/A]<br/><a href="/richard-ii/people/MacMahon.html">View resources</a>');
		// <strong>Name: MacCabe</strong><br/>Role: Submitting party<br/>[N/A]<br/><a href="/richard-ii/people/MacCabe.html">View resources</a>');
		// <strong>Name: Robert Shortal</strong><br/>Role: Witness<br/>[N/A]<br/><a href="/richard-ii/people/Shortal.html">View resources</a>');
		// <strong>Name: John Saykyn</strong><br/>Role: Witness<br/>[N/A]<br/><a href="/richard-ii/people/Saykyn.html">View resources</a>');
		var WalterBermingham = L.marker([53.29989540496307, -8.74539918683801], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Walter Bermingham</strong><br/>Role: Submitting party<br/>Location: Athenry castle<br/><a href="/richard-ii/people/Bermingham.html">View resources</a>');
		// <strong>Name: John Boor</strong><br/>Role: Witness<br/>Position: Dean of the king&apos;s chapel<br/>[N/A]<br/><a href="/richard-ii/people/Boor.html">View resources</a>');
		var JohnBorghulle = L.marker([51.49946837115046, -0.12730131534475056], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Borghulle</strong><br/>Role: Witness<br/>Position: King&apos;s confessor<br/>Location: Westminster Abbey<br/><a href="/richard-ii/people/Borghulle.html">View resources</a>');
		// <strong>Name: Tuathal O&apos;Kelly</strong><br/>Role: Submitting party<br/>[N/A<br/><a href="/richard-ii/people/OKelly.html">View resources</a>');
		// <strong>Name: Philip O&apos;Kelly</strong><br/>Role: Submitting party<br/>[N/A]<br/><a href="/richard-ii/people/OKelly.html">View resources</a>');
		// <strong>Name: Murchadh Ban O&apos;Farrell</strong><br/>Role: Submitting party<br/>Position: "famous Irishman"<br/>[N/A]<br/><a href="/richard-ii/people/OFarrell.html">View resources</a>');
		// <strong>Name: Ross O&apos;Farrell</strong><br/>Role: Submitting party<br/>Position: "famous Irishman"<br/>[N/A]<br/><a href="/richard-ii/people/OFarrell.html">View resources</a>');
		// <strong>Name: Melaghlin Mageoghegan</strong><br/>Role: Submitting party<br/>Position: "famous Irishman"<br/>[N/A]<br/><a href="/richard-ii/people/Mageoghegan.html">View resources</a>');
		// <strong>Name: Niall O&apos;Molloy</strong><br/>Role: Submitting party<br/>Position: "famous Irishman"; son of Rory<br/>[N/A]<br/><a href="/richard-ii/people/OMolloy.html">View resources</a>');
		var JohnBocombe = L.marker([53.781099569143734, -6.676733656357843], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
	}).bindPopup('<strong>Name: John Bocombe</strong><br/>Role: Interpreter<br/>[N/A]<br/><a href="/richard-ii/people/Bocombe.html">View resources</a>');
		// <strong>Name: William Stormy</strong><br/>Role: Witness<br/>[N/A]<br/><a href="/richard-ii/people/Stormy.html">View resources</a>');
		// <strong>Name: John Roche</strong><br/>Role: Witness<br/>[N/A]
		// <strong>Name: Shane MacMahon</strong><br/>Role: Submitting party<br/>[N/A]
		// <strong>Name: Hugh Lutterell</strong><br/>Role: Witness<br/>[N/A]
		// <strong>Name: Dermot O&apos;Conor</strong><br/>Role: Submitting party<br/>[N/A]
		// <strong>Name: John, Earl of Desmond</strong><br/>Role: Interpreter<br/>Position: Earl of Desmond<br/>[N/A]
		// <strong>Name: Cormac O&apos;Melaghlin</strong><br/>Role: Submitting party<br/>[N/A]
		// <strong>Name: David Mor O&apos;Murchadha</strong><br/>Role: Submitting party<br/>[N/A]
		var GillapatrickRuaOMore = L.marker([53.032003403834636, -7.210730631050135], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Gillapatrick Rua O&apos;More</strong><br/>Role: Submitting party<br/>Location: Rock of Dunamase<br/><a href="/richard-ii/people/OMore.html">View resources</a>');
		// <strong>Name: Richard Nelgan</strong><br/>Role: Interpreter<br/>[N/A]
		// <strong>Name: Simon Vale</strong><br/>Role: Interpreter<br/>[N/A]
		var NiallONeill = L.marker([54.5063072522902, -6.768650213215768], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Niall O&apos;Neill</strong><br/>Role: Submitting party<br/>Location: Dungannon (the Hill)<br/><a href="/richard-ii/people/ONeill.html">View resources</a>');
		var MauriceFitzMaurice = L.marker([52.402309862021305, -9.628663487621754], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Maurice FitzMaurice</strong><br/>Role: Submitting party, Interpreter<br/>Positions: Knight; Lord of his nation<br/>Location: Lixnaw Castle<br/><a href="/richard-ii/people/FitzMaurice.html">View resources</a>');
		var DonalMacCarthy = L.marker([51.67552178247685, -8.679032758580476], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Donal MacCarthy</strong><br/>Role: Submitting party<br/>Location: Kilbrittain Castle<br/><a href="/richard-ii/people/MacCarthyReagh.html">View resources</a>');
		// <strong>Name: William Wellesley</strong><br/>Role: Interpreter<br/>Position(s): Knight<br/>[N/A]
		// <strong>Name: Malachy O&apos;Kelly</strong><br/>Role: Submitting party<br/>[N/A]
		// <strong>Name: Turloch O&apos;Brien</strong><br/>Role: Submitting party<br/>Position: Son of Murchadh O&apos;Brien<br/>[N/A]
		var WilliamOCormacan = L.marker([53.240746466431645, -8.058324987023699]).bindPopup('<strong>Name: William O&apos;Cormacan</strong><br/>Role: Interpreter<br/>Position: Bishop of Clonfert<br/>Location: Clonfert Cathedral<br/><a href="/richard-ii/people/OCormacan.html">View resources</a>');
		// <strong>Name: Thomas O&apos;Dwyer</strong><br/>Role: Submitting party<br/>[N/A]
		var PhilipOKennedy = L.marker([52.865144995499804, -8.19816891618452], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Philip O&apos;Kennedy</strong><br/>Role: Submitting party<br/>Position: Son of Matthew [Mahon?] Don O&apos;Kennedy<br/>Location: Nenagh Castle<br/><a href="/richard-ii/people/OKennedy.html">View resources</a>');
		var ThomasKildare = L.marker([52.669900149141625, -8.625543760062053], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas Kildare</strong><br/>Role: Intepreter<br/>Position: Mayor of Limerick<br/>Location: King John&apos;s Castle<br/><a href="/richard-ii/people/Kildare.html">View resources</a>');
		var NicholasSlake = L.marker([51.210575282198946, -2.6434303599616404], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Nicholas Slake</strong><br/>Role: Witness<br/>Position: Archdeacon of Wells<br/>Location: Wells Cathedral<br/><a href="/richard-ii/people/Slake.html">View resources</a>');
		var CormacDermotMacCarthy = L.marker([51.90520051539335, -8.96220776599217], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Cormac [Dermot] MacCarthy</strong><br/>Role: Submitting party<br/>Location: Macroom Castle<br/><a href="/richard-ii/people/MacCarthyMuskerry.html">View resources</a>');
		var CormacDonalMacCarthy = L.marker([51.67552178247685, -8.679032758580476], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Cormac [Donal] MacCarthy</strong><br/>Role: Submitting party<br/>Location: Kilbrittain Castle<br/><a href="/richard-ii/people/MacCarthyReagh.html">View resources</a>');
		var JohnGalwey = L.marker([52.26060981564144, -7.105420502725048], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: John Galwey</strong><br/>Role: Interpreter<br/>Position: Citizen of Waterford<br/>Location: Reginald&apos;s Tower<br/><a href="/richard-ii/people/Galwey.html">View resources</a>');
		// <strong>Name: Donal Morghysson</strong><br/>Role: Submitting party<br/>[N/A]
		// <strong>Name: William de Angel</strong><br/>Role: Witness<br/>Interpreter: Knight<br/>[N/A]
		// <strong>Name: William Clynton</strong><br/>Role: Witness<br/>Position: esquire<br/>[N/A]
		// <strong>Name: Magawley</strong><br/>Role: Submitting party<br/>Position: lord<br/>[N/A]
		var MuirchertachMageoghegan = L.marker([53.443415225674656, -7.489401350912528], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Muirchertach Mageoghegan</strong><br/>Role: Submitting party<br/>Position: lord<br/>Location: Castletown Geoghegan (tower house)<br/><a href="/richard-ii/people/Mageoghegan.html">View resources</a>');
		// <strong>Name: Schynagh</strong><br/>Role: Submitting party<br/>Position: lord<br/>[N/A]
		// <strong>Name: Thomas MacHegh</strong><br/>Role: Submitting party<br/>Position: lord<br/>[N/A]
		// <strong>Name: Conor O&apos;Melaghlin</strong><br/>Role: Submitting party<br/>Position: "famous Irishman"<br/>[N/A]
		var GillaIsaOReilly = L.marker([53.9887817355458, -7.357948192232346], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Gilla-Isa O&apos;Reilly</strong><br/>Role: Submitting party<br/>Position: famous Irishman<br/>Location: Tullymongan Hill<br/><a href="/richard-ii/people/OReilly.html">View resources</a>');
		var MaolmuireOReilly = L.marker([53.9887817355458, -7.357948192232346], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Maolmuire O&apos;Reilly</strong><br/>Role: Submitting party<br/>Position: famous Irishman<br/>Location: Tullymongan Hill<br/><a href="/richard-ii/people/OReilly.html">View resources</a>');
		var ThomasOFarrell = L.marker([53.71558456704111, -7.7181397682899116], {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 30
		}).bindPopup('<strong>Name: Thomas O&apos;Farrell</strong><br/>Role: Submitting party<br/>Position: famous Irishman<br/>Location: Lissardowlan (castle)<br/><a href="/richard-ii/people/OFarrell.html">View resources</a>');

// Polylines
// Instrument 1: John MacDonald, Drogheda Dominican
	// Richard II
	var Ins1R2 = [
	    [51.48398083527779, -0.6044134311929068],
	    [53.71799324577726, -6.351336075629299]
	];

	var Auth1 = L.polyline(Ins1R2, {color: '#8e44ad', offset: -3, stroke: 2}).bindPopup('<i>Instrument 1</i><br/>Submission of John MacDonald<br/><strong>Authority:</strong> Richard II<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument1.html">View the submission text</a>');
	// John MacDonald
	var Ins1JohnMacDonald = [
	    [54.5063072522902, -6.768650213215768],
	    [53.71799324577726, -6.351336075629299]
	];

	var Sub1 = L.polyline(Ins1JohnMacDonald, {color: '#e67e22'}).bindPopup('<i>Instrument 1</i><br/><strong>Submitting party:</strong> John MacDonald<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument1.html">View the submission text</a>');
	// Thomas Talbot
	var Ins1ThomasTalbot = [
	    [53.343059024832215, -6.267460588689023],
	    [53.71799324577726, -6.351336075629299]
	];

	var Int1 = L.polyline(Ins1ThomasTalbot, {color: '#27ae60'}).bindPopup('<i>Instrument 1</i><br/>Submission of John MacDonald<br/><strong>Interpreter:</strong> Thomas Talbot<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument1.html">View the submission text</a>');
	// Witnesses: Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Thomas Mowbray; Thomas Percy; William Scrope
	var Ins1ThomasAbpYork = [
	    [53.96261321710904, -1.082564232319088],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit1a = L.polyline(Ins1ThomasAbpYork, {color: '#f7dc6f'}).bindPopup('<i>Instrument 1</i><br/>Submission of John MacDonald<br/><strong>Witnesses:</strong><strong>Thomas, Archbishop of York;</strong> Robert, Bishop of London; Richard, Bishop of Chichester; Thomas Mowbray, Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument1.html">View the submission text</a>');

	var Ins1RobertBpLondon = [
	    [51.51391872458704, -0.09835060227396925],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit1b = L.polyline(Ins1RobertBpLondon, {color: '#f7dc6f'}).bindPopup('<i>Instrument 1</i><br/>Submission of John MacDonald<br/><strong>Witnesses:</strong> Thomas, Archbishop of York; <strong>Robert, Bishop of London;</strong> Richard, Bishop of Chichester; Thomas Mowbray, Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument1.html">View the submission text</a>');

	var Ins1RichardBpChichester = [
	    [50.836444616933846, -0.7806593023080537],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit1c = L.polyline(Ins1RichardBpChichester, {color: '#f7dc6f'}).bindPopup('<i>Instrument 1</i><br/>Submission of John MacDonald<br/><strong>Witnesses:</strong> Thomas, Archbishop of York; Robert, Bishop of London; <strong>Richard, Bishop of Chichester;</strong> Thomas Mowbray, Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument1.html">View the submission text</a>');

	var Ins1ThomasMowbray = [
	    [53.52635679996112, -0.8166546393819635],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit1d = L.polyline(Ins1ThomasMowbray, {color: '#f7dc6f'}).bindPopup('<i>Instrument 1</i><br/>Submission of John MacDonald<br/><strong>Witnesses:</strong> Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; <strong>Thomas Mowbray,</strong> Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument1.html">View the submission text</a>');

	var Ins1ThomasPercy = [
	    [51.48398083527779, -0.6044134311929068],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit1e = L.polyline(Ins1ThomasPercy, {color: '#f7dc6f', offset: 1}).bindPopup('<i>Instrument 1</i><br/>Submission of John MacDonald<br/><strong>Witnesses:</strong> Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Thomas Mowbray, <strong>Thomas Percy;</strong> and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument1.html">View the submission text</a>');

	var Ins1WilliamScrope = [
	    [51.499673068298016, -0.12474482944096953],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit1f = L.polyline(Ins1WilliamScrope, {color: '#f7dc6f', offset: 3}).bindPopup('<i>Instrument 1</i><br/>Submission of John MacDonald<br/><strong>Witnesses:</strong> Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Thomas Mowbray, Thomas Percy; and <strong>William Scrope</strong><br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument1.html">View the submission text</a>');

// Instrument 2: Catholicus O'Hanlon, Drogheda Dominican Priory
	// Richard II
	var Ins2R2 = [
	    [51.48398083527779, -0.6044134311929068],
	    [53.71799324577726, -6.351336075629299]
	];

	var Auth2 = L.polyline(Ins2R2, {color: '#8e44ad', offset: -3}).bindPopup('<i>Instrument 2</i><br/>Submission of Catholicus O&apos;Hanlon<br/><strong>Authority:</strong> Richard II<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument2.html">View the submission text</a>');
	// Catholicus O'Hanlon
	var Ins2CatholicusOHanlon = [
	    [54.35433661014168, -6.417615938831388],
	    [53.71799324577726, -6.351336075629299]
	];

	var Sub2 = L.polyline(Ins2CatholicusOHanlon, {color: '#e67e22'}).bindPopup('<i>Instrument 2</i><br/><strong>Submitting party:</strong> Catholicus O&apos;Hanlon<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument2.html">View the submission text</a>');
	// Thomas Talbot
	var Ins2ThomasTalbot = [
	    [53.343059024832215, -6.267460588689023],
	    [53.71799324577726, -6.351336075629299]
	];

	var Int2 = L.polyline(Ins2ThomasTalbot, {color: '#27ae60'}).bindPopup('<i>Instrument 2</i><br/>Submission of Catholicus O&apos;Hanlon<br/><strong>Interpreter:</strong> Thomas Talbot<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument2.html">View the submission text</a>');
	// Witnesses: Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Thomas Mowbray; Thomas Percy; William Scrope
	var Ins2ThomasAbpYork = [
			[53.96261321710904, -1.082564232319088],
			[53.71799324577726, -6.351336075629299]
	];

	var Wit2a = L.polyline(Ins2ThomasAbpYork, {color: '#f7dc6f'}).bindPopup('<i>Instrument 2</i><br/>Submission of Catholicus O&apos;Hanlon<br/><strong>Witnesses:</strong> <strong>Thomas, Archbishop of York;</strong> Robert, Bishop of London; Richard, Bishop of Chichester; Thomas Mowbray, Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument2.html">View the submission text</a>');

	var Ins2RobertBpLondon = [
			[51.51391872458704, -0.09835060227396925],
			[53.71799324577726, -6.351336075629299]
	];

	var Wit2b = L.polyline(Ins2RobertBpLondon, {color: '#f7dc6f'}).bindPopup('<i>Instrument 2</i><br/>Submission of Catholicus O&apos;Hanlon<br/><strong>Witnesses:</strong> Thomas, Archbishop of York; <strong>Robert, Bishop of London;</strong> Richard, Bishop of Chichester; Thomas Mowbray, Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument2.html">View the submission text</a>');

	var Ins2RichardBpChichester = [
			[50.836444616933846, -0.7806593023080537],
			[53.71799324577726, -6.351336075629299]
	];

	var Wit2c = L.polyline(Ins2RichardBpChichester, {color: '#f7dc6f'}).bindPopup('<i>Instrument 2</i><br/>Submission of Catholicus O&apos;Hanlon<br/><strong>Witnesses:</strong> Thomas, Archbishop of York; Robert, Bishop of London; <strong>Richard, Bishop of Chichester;</strong> Thomas Mowbray, Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument2.html">View the submission text</a>');

	var Ins2ThomasMowbray = [
			[53.52635679996112, -0.8166546393819635],
			[53.71799324577726, -6.351336075629299]
	];

	var Wit2d = L.polyline(Ins2ThomasMowbray, {color: '#f7dc6f'}).bindPopup('<i>Instrument 2</i><br/>Submission of Catholicus O&apos;Hanlon<br/><strong>Witnesses:</strong> Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; <strong>Thomas Mowbray,</strong> Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument2.html">View the submission text</a>');

	var Ins2ThomasPercy = [
			[51.48398083527779, -0.6044134311929068],
			[53.71799324577726, -6.351336075629299]
	];

	var Wit2e = L.polyline(Ins2ThomasPercy, {color: '#f7dc6f', offset: 1}).bindPopup('<i>Instrument 2</i><br/>Submission of Catholicus O&apos;Hanlon<br/><strong>Witnesses:</strong> Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Thomas Mowbray, <strong>Thomas Percy;</strong> and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument2.html">View the submission text</a>');

	var Ins2WilliamScrope = [
			[51.499673068298016, -0.12474482944096953],
			[53.71799324577726, -6.351336075629299]
	];

	var Wit2f = L.polyline(Ins2WilliamScrope, {color: '#f7dc6f', offset: 3}).bindPopup('<i>Instrument 2</i><br/>Submission of Catholicus O&apos;Hanlon<br/><strong>Witnesses:</strong> Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Thomas Mowbray, Thomas Percy; and <strong>William Scrope</strong><br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument2.html">View the submission text</a>');

// Instrument 3: Donnchadh O'Byrne, Dublin Castle
	// Richard II
	var Ins3R2 = [
		[51.48398083527779, -0.6044134311929068],
		[53.343059024832215, -6.267460588689023]
	];

	var Auth3 = L.polyline(Ins3R2, {color: '#8e44ad', offset: -4}).bindPopup('<i>Instrument 3</i><br/>Submission of Donnchadh O&apos;Byrne<br/><strong>Authority:</strong> Richard II<br/>Submission site: Dublin Castle<br/><a href="/richard-ii/instruments/Instrument3.html">View the submission text</a>');
	// Donnchadh O'Byrne
	var Ins3DonnchadhOByrne = [
		[53.00194002318177, -6.078725350908511],
		[53.343059024832215, -6.267460588689023]
	];

	var Sub3 = L.polyline(Ins3DonnchadhOByrne, {color: '#e67e22'}).bindPopup('<i>Instrument 3</i><br/><strong>Submitting party:</strong> Donnchadh O&apos;Byrne<br/>Submission site: Dublin Castle<br/><a href="/richard-ii/instruments/Instrument3.html">View the submission text</a>');
	// Witnesses: Robert, Archbishop of Dublin; Richard, Bishop of Chichester; Robert, Bishop of Lismore and Waterford; William Scrope; Simon Felbryge; Baldwin Bereford; Thomas Mareward; David Bertevyll
	var Ins3RobertAbpDublin = [
			[50.836444616933846, -0.7806593023080537],
			[53.343059024832215, -6.267460588689023]
	];

	var Wit3a = L.polyline(Ins3RobertAbpDublin, {color: '#f7dc6f'}).bindPopup('<i>Instrument 3</i><br/>Submission of Donnchadh O&apos;Byrne<br/><strong>Witnesses:</strong> <strong>Robert, Archbishop of Dublin;</strong> Richard, Bishop of Chichester; Robert, Bishop of Lismore and Waterford; William Scrope; Simon Felbryge; Baldwin Bereford; Thomas Mareward; David Bertevyll<br/>Submission site: Dublin Castle<br/><a href="/richard-ii/instruments/Instrument3.html">View the submission text</a>');

	var Ins3RichardBpChichester = [
			[50.836444616933846, -0.7806593023080537],
			[50.836444616933846, -0.7806593023080537]
	];

	var Wit3b = L.polyline(Ins3RichardBpChichester, {color: '#f7dc6f'}).bindPopup('<i>Instrument 3</i><br/>Submission of Donnchadh O&apos;Byrne<br/><strong>Witnesses:</strong> <strong>Robert, Archbishop of Dublin;</strong> Richard, Bishop of Chichester; Robert, Bishop of Lismore and Waterford; William Scrope; Simon Felbryge; Baldwin Bereford; Thomas Mareward; David Bertevyll<br/>Submission site: Dublin Castle<br/><a href="/richard-ii/instruments/Instrument3.html">View the submission text</a>');

	var Ins3RobertBpLismoreWaterford = [
			[52.26005051914892, -7.107510486891409],
			[53.343059024832215, -6.267460588689023]
	];

	var Wit3c = L.polyline(Ins3RobertBpLismoreWaterford, {color: '#f7dc6f'}).bindPopup('<i>Instrument 3</i><br/>Submission of Donnchadh O&apos;Byrne<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Richard, Bishop of Chichester; <strong>Robert, Bishop of Lismore and Waterford;</strong> William Scrope; Simon Felbryge; Baldwin Bereford; Thomas Mareward; David Bertevyll<br/>Submission site: Dublin Castle<br/><a href="/richard-ii/instruments/Instrument3.html">View the submission text</a>');

	var Ins3WilliamScrope = [
			[51.48398083527779, -0.6044134311929068],
			[53.343059024832215, -6.267460588689023]
	];

	var Wit3d = L.polyline(Ins3WilliamScrope, {color: '#f7dc6f', offset: -2}).bindPopup('<i>Instrument 3</i><br/>Submission of Donnchadh O&apos;Byrne<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Richard, Bishop of Chichester; Robert, Bishop of Lismore and Waterford; <strong>William Scrope;</strong> Simon Felbryge; Baldwin Bereford; Thomas Mareward; David Bertevyll<br/>Submission site: Dublin Castle<br/><a href="/richard-ii/instruments/Instrument3.html">View the submission text</a>');

	var Ins3SimonFelbryge = [
			[51.48398083527779, -0.6044134311929068],
			[53.343059024832215, -6.267460588689023]
	];

	var Wit3e = L.polyline(Ins3SimonFelbryge, {color: '#f7dc6f'}).bindPopup('<i>Instrument 3</i><br/>Submission of Donnchadh O&apos;Byrne<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Richard, Bishop of Chichester; Robert, Bishop of Lismore and Waterford; William Scrope; <strong>Simon Felbryge;</strong> Baldwin Bereford; Thomas Mareward; David Bertevyll<br/>Submission site: Dublin Castle<br/><a href="/richard-ii/instruments/Instrument3.html">View the submission text</a>');

	var Ins3BaldwinBereford = [
			[51.48398083527779, -0.6044134311929068],
			[53.343059024832215, -6.267460588689023]
	];

	var Wit3f = L.polyline(Ins3BaldwinBereford, {color: '#f7dc6f', offset: 2}).bindPopup('<i>Instrument 3</i><br/>Submission of Donnchadh O&apos;Byrne<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Richard, Bishop of Chichester; Robert, Bishop of Lismore and Waterford; William Scrope; Simon Felbryge; <strong>Baldwin Bereford;</strong> Thomas Mareward; David Bertevyll<br/>Submission site: Dublin Castle<br/><a href="/richard-ii/instruments/Instrument3.html">View the submission text</a>');

	var Ins3ThomasMareward = [
			[50.836444616933846, -0.7806593023080537],
			[50.836444616933846, -0.7806593023080537]
	];

	var Wit3g = L.polyline(Ins3ThomasMareward, {color: '#f7dc6f', offset: -4}).bindPopup('<i>Instrument 3</i><br/>Submission of Donnchadh O&apos;Byrne<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Richard, Bishop of Chichester; Robert, Bishop of Lismore and Waterford; William Scrope; Simon Felbryge; Baldwin Bereford; <strong>Thomas Mareward;</strong> David Bertevyll<br/>Submission site: Dublin Castle<br/><a href="/richard-ii/instruments/Instrument3.html">View the submission text</a>');

	var Ins3DavidBertevyll = [
			[51.48398083527779, -0.6044134311929068],
			[53.343059024832215, -6.267460588689023]
	];

	var Wit3h = L.polyline(Ins3DavidBertevyll, {color: '#f7dc6f', offset: 4}).bindPopup('<i>Instrument 3</i><br/>Submission of Donnchadh O&apos;Byrne<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Richard, Bishop of Chichester; Robert, Bishop of Lismore and Waterford; William Scrope; Simon Felbryge; Baldwin Bereford; Thomas Mareward; <strong>David Bertevyll</strong><br/>Submission site: Dublin Castle<br/><a href="/richard-ii/instruments/Instrument3.html">View the submission text</a>');
// Instrument 4: Art O'Dempsey, Kilkenny Dominican Priory
  // Richard II
var Ins4R2 = [
	[51.48398083527779, -0.6044134311929068],
	[52.653899031468974, -7.257574029379863]
];

var Auth4 = L.polyline(Ins4R2, {color: '#8e44ad', offset: -4}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Authority:</strong> Richard II<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');
  // Art O'Dempsey
var Ins4ArtODempsey = [
	[53.222980096917325, -7.262605604662662],
	[52.653899031468974, -7.257574029379863]
];

var Sub4 = L.polyline(Ins4ArtODempsey, {color: '#e67e22'}).bindPopup('<i>Instrument 4</i><br/><strong>Submitting party:</strong> Art O&apos;Dempsey<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');
  // Interpreter: John Malachy
var Ins4JohnMalachy = [
	    [53.34345533225444, -6.27106020218046],
	    [52.653899031468974, -7.257574029379863]
	];

var Int4 = L.polyline(Ins4JohnMalachy, {color: '#27ae60'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Interpreter:</strong> John Malachy<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	// Witnesses: Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; John, Bishop of Leighlin; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; John Holland
	var Ins4RobertAbpDublin = [
			[50.836444616933846, -0.7806593023080537],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4a = L.polyline(Ins4RobertAbpDublin, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> <strong>Robert, Archbishop of Dublin</strong>; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; John, Bishop of Leighlin; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	var Ins4PeterAbpCashel = [
			[52.52018726099023, -7.890430744550451],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4b = L.polyline(Ins4PeterAbpCashel, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; <strong>Peter, Archbishop of Cashel</strong>; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; John, Bishop of Leighlin; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	var Ins4RichardBpChichester = [
			[50.836444616933846, -0.7806593023080537],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4c = L.polyline(Ins4RichardBpChichester, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; <strong>Richard, Bishop of Chichester</strong>; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; John, Bishop of Leighlin; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	var Ins4TidemanBpLlandaff = [
			[51.49581515376926, -3.217197702793551],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4d = L.polyline(Ins4TidemanBpLlandaff, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; <strong>Tideman, Bishop of Llandaff</strong>; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; John, Bishop of Leighlin; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

		var Ins4AlexanderBpMeath = [
			[53.555824660725385, -6.7724734444970744],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4e = L.polyline(Ins4AlexanderBpMeath, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; <strong>Alexander, Bishop of Meath</strong>; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; John, Bishop of Leighlin; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	var Ins4RobertBpLismoreWaterford = [
			[52.26005051914892, -7.107510486891409],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4f = L.polyline(Ins4RobertBpLismoreWaterford, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; <strong>Robert, Bishop of Lismore and Waterford</strong>; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; John, Bishop of Leighlin; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	var Ins4RichardBpOssory = [
			[52.65505417318262, -7.259360585833883],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4g = L.polyline(Ins4RichardBpOssory, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; <strong>Richard, Bishop of Ossory</strong>; Thomas, Bishop of Elphin; John, Bishop of Leighlin; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	var Ins4ThomasBpElphin = [
			[53.84522952503657, -8.19067033028418],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4h = L.polyline(Ins4ThomasBpElphin, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; <strong>Thomas, Bishop of Elphin</strong>; John, Bishop of Leighlin; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	var Ins4JohnBpLeighlin = [
			[52.73610773387068, -7.025380359884095],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4i = L.polyline(Ins4JohnBpLeighlin, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; <strong>John, Bishop of Leighlin</strong>; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	var Ins4MilesBpCloyne = [
			[51.86183188514391, -8.119323571832352],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4j = L.polyline(Ins4MilesBpCloyne, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; John, Bishop of Leighlin; <strong>Miles, Bishop of Cloyne</strong>; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	var Ins4EdwardCorkRutland = [
			[51.48398083527779, -0.6044134311929068],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4k = L.polyline(Ins4EdwardCorkRutland, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; John, Bishop of Leighlin; Miles, Bishop of Cloyne; <strong>Edward, Earl of Cork and Rutland</strong>; Roger, Earl of March and Ulster; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	var Ins4RogerMarchUlster = [
			[51.48398083527779, -0.6044134311929068],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4l = L.polyline(Ins4RogerMarchUlster, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; John, Bishop of Leighlin; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; <strong>Roger, Earl of March and Ulster</strong>; John Holland<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');

	var Ins4JohnHolland = [
			[51.48398083527779, -0.6044134311929068],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit4m = L.polyline(Ins4JohnHolland, {color: '#f7dc6f'}).bindPopup('<i>Instrument 4</i><br/>Submission of Art O&apos;Dempsey<br/><strong>Witnesses:</strong> Robert, Archbishop of Dublin; Peter, Archbishop of Cashel; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Alexander, Bishop of Meath; Robert, Bishop of Lismore and Waterford; Richard, Bishop of Ossory; Thomas, Bishop of Elphin; John, Bishop of Leighlin; Miles, Bishop of Cloyne; Edward, Earl of Cork and Rutland; Roger, Earl of March and Ulster; <strong>John Holland</strong><br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument4.html">View the submission text</a>');
// Instrument 5: Followers of Art MacMurrough, New Leighlin
	var Ins5JohnStanley = [
			[51.48398083527779, -0.6044134311929068],
			[52.73585151137786, -6.977905724552096]
	];

	var Auth5 = L.polyline(Ins5JohnStanley, {color: '#8e44ad', offset: -1}).bindPopup('<i>Instrument 5</i><br/>Submission of the followers of Art MacMurrough<br/><strong>Authority:</strong> John Stanley<br/>Submission site: New Leighlin<br/><a href="/richard-ii/instruments/Instrument5.html">View the submission text</a>');

	var Ins5MacMurroughFollowers = [
		[52.590900115704486, -6.500068251353481],
		[52.73585151137786, -6.977905724552096]
	];

	var Sub5 = L.polyline(Ins5MacMurroughFollowers, {color: '#e67e22'}).bindPopup('<i>Instrument 5</i><br/><strong>Submitting parties:</strong> William Beg, reeve; John Nicholson, reeve; Maurice Adalagh, reeve; Malachy Cam, tenant; John Glasmorgh, tenant (followers of Art MacMurrough)<br/>Submission site: New Leighlin<br/><a href="/richard-ii/instruments/Instrument5.html">View the submission text</a>');

  var Ins5FergalOKurryn = [
		[52.984871314450615, -6.808651542688595],
		[52.73585151137786, -6.977905724552096]
	];

	var Int5 = L.polyline(Ins5FergalOKurryn, {color: '#27ae60', offset: -1}).bindPopup('<i>Instrument 5</i><br/>Submission of the followers of Art MacMurrough<br/><strong>Interpreter:</strong> Fergal O&apos;Kurryn<br/>Submission site: New Leighlin<br/><a href="/richard-ii/instruments/Instrument5.html">View the submission text</a>');

	var Wit5a = L.polyline(Ins5FergalOKurryn, {color: '#f7dc6f', offset: 1}).bindPopup('<i>Instrument 5</i><br/>Submission of the followers of Art MacMurrough<br/><strong>Witnesses:</strong> <strong>Fergal O&apos;Kurryn</strong>; Robert de Orrey; Henry Bekirton<br/>Submission site: New Leighlin<br/><a href="/richard-ii/instruments/Instrument5.html">View the submission text</a>');

	var Ins5RobertDeOrrey = [
		[52.408720821933144, -1.507126275731839],
		[52.73585151137786, -6.977905724552096]
	];

	var Wit5b = L.polyline(Ins5RobertDeOrrey, {color: '#f7dc6f'}).bindPopup('<i>Instrument 5</i><br/>Submission of the followers of Art MacMurrough<br/><strong>Witnesses:</strong> Fergal O&apos;Kurryn; <strong>Robert de Orrey</strong>; Henry Bekirton<br/>Submission site: New Leighlin<br/><a href="/richard-ii/instruments/Instrument5.html">View the submission text</a>');

	var Ins5HenryBekirton = [
		[52.68563576496434, -1.8303309315376164],
		[52.73585151137786, -6.977905724552096]
	];

	var Wit5c = L.polyline(Ins5HenryBekirton, {color: '#f7dc6f'}).bindPopup('<i>Instrument 5</i><br/>Submission of the followers of Art MacMurrough<br/><strong>Witnesses:</strong> Fergal O&apos;Kurryn; Robert de Orrey; <strong>Henry Bekirton</strong><br/>Submission site: New Leighlin<br/><a href="/richard-ii/instruments/Instrument5.html">View the submission text</a>');

// Instrument 6: Tadhg O'Meagher and Turloch O'Conor Don, Kilkenny Dominican Priory
var Ins6R2 = [
		[51.48398083527779, -0.6044134311929068],
		[52.653899031468974, -7.257574029379863]
];

var Auth6 = L.polyline(Ins6R2, {color: '#8e44ad', offset: -1}).bindPopup('<i>Instrument 6</i><br/>Submission of Tadhg O&apos;Meagher and Turloch O&apos;Conor Don<br/><strong>Authority:</strong> Richard II<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument6.html">View the submission text</a>');

var Ins6TadhgOMeagher = [
	[52.87305674403316, -7.830682165940664],
	[52.653899031468974, -7.257574029379863]
];

var Sub6a = L.polyline(Ins6TadhgOMeagher, {color: '#e67e22'}).bindPopup('<i>Instrument 6</i><br/><strong>Submitting parties:</strong> <strong>Tadhg O&apos;Meagher</strong> and Turloch O&apos;Conor Don<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument6.html">View the submission text</a>');

var Ins6TurlochOConorDon = [
	[53.722734056115634, -8.415850491520471],
	[52.653899031468974, -7.257574029379863]
];

var Sub6b = L.polyline(Ins6TurlochOConorDon, {color: '#e67e22'}).bindPopup('<i>Instrument 6</i><br/><strong>Submitting parties:</strong> Tadhg O&apos;Meagher and <strong>Turloch O&apos;Conor Don</strong><br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument6.html">View the submission text</a>');

var Ins6JohnMalachy = [
	    [53.34345533225444, -6.27106020218046],
	    [52.653899031468974, -7.257574029379863]
	];

var Int6 = L.polyline(Ins6JohnMalachy, {color: '#27ae60'}).bindPopup('<i>Instrument 6</i><br/>Submission of Tadhg O&apos;Meagher and Turloch O&apos;Conor Don<br/><strong>Interpreter:</strong> John Malachy<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument6.html">View the submission text</a>');

// Witnesses: Tideman, Bishop of Llandaff; Robert, Bishop of Lismore and Waterford; John Holland; William Scrope
var Ins6TidemanBpLlandaff = [
		[51.49581515376926, -3.217197702793551],
		[52.653899031468974, -7.257574029379863]
];

var Wit6a = L.polyline(Ins6TidemanBpLlandaff, {color: '#f7dc6f'}).bindPopup('<i>Instrument 6</i><br/>Submission of Tadhg O&apos;Meagher and Turloch O&apos;Conor Don<br/><strong>Witnesses:</strong> <strong>Tideman, Bishop of Llandaff</strong>; Robert, Bishop of Lismore and Waterford; John Holland; William Scrope<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument6.html">View the submission text</a>');

var Ins6RobertBpLismoreWaterford = [
		[52.26005051914892, -7.107510486891409],
		[52.653899031468974, -7.257574029379863]
];

var Wit6b = L.polyline(Ins6RobertBpLismoreWaterford, {color: '#f7dc6f'}).bindPopup('<i>Instrument 6</i><br/>Submission of Tadhg O&apos;Meagher and Turloch O&apos;Conor Don<br/><strong>Witnesses:</strong> Tideman, Bishop of Llandaff; <strong>Robert, Bishop of Lismore and Waterford</strong>; John Holland; William Scrope<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument6.html">View the submission text</a>');

var Ins6JohnHolland = [
		[51.48398083527779, -0.6044134311929068],
		[52.653899031468974, -7.257574029379863]
];

var Wit6c = L.polyline(Ins6JohnHolland, {color: '#f7dc6f'}).bindPopup('<i>Instrument 6</i><br/>Submission of Tadhg O&apos;Meagher and Turloch O&apos;Conor Don<br/><strong>Witnesses:</strong> Tideman, Bishop of Llandaff; Robert, Bishop of Lismore and Waterford; <strong>John Holland</strong>; William Scrope<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument6.html">View the submission text</a>');

var Ins6WilliamScrope = [
		[51.499673068298016, -0.12474482944096953],
		[52.653899031468974, -7.257574029379863]
];

var Wit6d = L.polyline(Ins6WilliamScrope, {color: '#f7dc6f'}).bindPopup('<i>Instrument 6</i><br/>Submission of Tadhg O&apos;Meagher and Turloch O&apos;Conor Don<br/><strong>Witnesses:</strong> Tideman, Bishop of Llandaff; Robert, Bishop of Lismore and Waterford; John Holland; <strong>William Scrope</strong><br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument6.html">View the submission text</a>');

// Instrument 7: Tadhg MacCarthy Mor, Drogheda Dominican Priory
	// Richard II
	var Ins7R2 = [
			[51.48398083527779, -0.6044134311929068],
			[53.71799324577726, -6.351336075629299]
	];

	var Auth7 = L.polyline(Ins7R2, {color: '#8e44ad', offset: -1}).bindPopup('<i>Instrument 7</i><br/>Submission of Tadhg MacCarthy Mor<br/><strong>Authority:</strong> Richard II<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument7.html">View the submission text</a>');
	// Tadhg MacCarthy Mor
	var Ins7TadhgMacCarthyMor = [
		[51.94903099242467, -10.258605292800087],
		[53.71799324577726, -6.351336075629299]
	];

	var Sub7 = L.polyline(Ins7TadhgMacCarthyMor, {color: '#e67e22'}).bindPopup('<i>Instrument 7</i><br/><strong>Submitting party:</strong> Tadhg MacCarthy Mor<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument7.html">View the submission text</a>');
	// Witnesses: Richard, Bishop of Chichester; John Golafre
	var Ins7RichardBpChichester = [
			[50.836444616933846, -0.7806593023080537],
			[53.71799324577726, -6.351336075629299]
	];

	var Wit7a = L.polyline(Ins7RichardBpChichester, {color: '#f7dc6f'}).bindPopup('<i>Instrument 7</i><br/>Submission of Tadhg MacCarthy Mor<br/><strong>Witnesses:</strong> <strong>Richard, Bishop of Chichester</strong>; John Golafre<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument7.html">View the submission text</a>');

	var Ins7JohnGolafre = [
			[51.499673068298016, -0.12474482944096953],
			[53.71799324577726, -6.351336075629299]
	];

	var Wit7b = L.polyline(Ins7JohnGolafre, {color: '#f7dc6f', offset: 1}).bindPopup('<i>Instrument 7</i><br/>Submission of Tadhg MacCarthy Mor<br/><strong>Witnesses:</strong> Richard, Bishop of Chichester; <strong>John Golafre</strong><br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument7.html">View the submission text</a>');

// Instrument 8: Niall Og O'Neill, DroghedaDom
		// Richard II
		var Ins8R2 = [
				[51.48398083527779, -0.6044134311929068],
				[53.71799324577726, -6.351336075629299]
		];

		var Auth8 = L.polyline(Ins8R2, {color: '#8e44ad', offset: -3}).bindPopup('<i>Instrument 8</i><br/>Submission of Niall Og O&apos;Neill<br/><strong>Authority:</strong> Richard II<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument8.html">View the submission text</a>');
		// Niall Og O'Neill
		var Ins8NiallOgONeill = [
			[54.5063072522902, -6.768650213215768],
			[53.71799324577726, -6.351336075629299]
		];

		var Sub8 = L.polyline(Ins8NiallOgONeill, {color: '#e67e22'}).bindPopup('<i>Instrument 8</i><br/><strong>Submitting party:</strong> Niall Og O&apos;<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument8.html">View the submission text</a>');
		// Thomas O'Locheran
		var Ins8ThomasOLocheran = [
				[54.531210748889556, -6.81312025513508],
				[53.71799324577726, -6.351336075629299]
		];

		var Int8 = L.polyline(Ins8ThomasOLocheran, {color: '#27ae60'}).bindPopup('<i>Instrument 8</i><br/>Submission of Niall Og O&apos;Neill<br/><strong>Interpreter:</strong> Thomas O&apos;Locheran<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument8.html">View the submission text</a>');
		// Witnesses: Thomas, Archbishop of York; John, Archbishop of Armagh; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; William Scrope
		var Ins8ThomasAbpYork = [
		    [53.96261321710904, -1.082564232319088],
		    [53.71799324577726, -6.351336075629299]
		];

		var Wit8a = L.polyline(Ins8ThomasAbpYork, {color: '#f7dc6f'}).bindPopup('<i>Instrument 8</i><br/>Submission of Niall Og O&apos;Neill<br/><strong>Witnesses:</strong> <strong>Thomas, Archbishop of York;</strong>John, Archbishop of Armagh; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument8.html">View the submission text</a>');
		var Ins8JohnAbpArmagh = [
		    [54.348037876849645, -6.656671080518698],
		    [53.71799324577726, -6.351336075629299]
		];

		var Wit8b = L.polyline(Ins8JohnAbpArmagh, {color: '#f7dc6f'}).bindPopup('<i>Instrument 8</i><br/>Submission of Niall Og O&apos;Neill<br/><strong>Witnesses:</strong> Thomas, Archbishop of York;<strong>John, Archbishop of Armagh;</strong> Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument8.html">View the submission text</a>');
		var Ins8RobertBpLondon = [
		    [51.51391872458704, -0.09835060227396925],
		    [53.71799324577726, -6.351336075629299]
		];

		var Wit8c = L.polyline(Ins8RobertBpLondon, {color: '#f7dc6f'}).bindPopup('<i>Instrument 8</i><br/>Submission of Niall Og O&apos;Neill<br/><strong>Witnesses:</strong> Thomas, Archbishop of York;John, Archbishop of Armagh; <strong>Robert, Bishop of London;</strong> Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument8.html">View the submission text</a>');
		var Ins8TidemanBpLlandaff = [
		    [51.49581515376926, -3.217197702793551],
		    [53.71799324577726, -6.351336075629299]
		];

		var Wit8d = L.polyline(Ins8TidemanBpLlandaff, {color: '#f7dc6f'}).bindPopup('<i>Instrument 8</i><br/>Submission of Niall Og O&apos;Neill<br/><strong>Witnesses:</strong> Thomas, Archbishop of York;John, Archbishop of Armagh; Robert, Bishop of London; Richard, Bishop of Chichester; <strong>Tideman, Bishop of Llandaff;</strong> Thomas Mowbray; Thomas Percy; William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument8.html">View the submission text</a>');
		var Ins8ThomasMowbray = [
				[53.52635679996112, -0.8166546393819635],
				[53.71799324577726, -6.351336075629299]
		];

		var Wit8e = L.polyline(Ins8ThomasMowbray, {color: '#f7dc6f'}).bindPopup('<i>Instrument 8</i><br/>Submission of Niall Og O&apos;Neill<br/><strong>Witnesses:</strong> Thomas, Archbishop of York;John, Archbishop of Armagh; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; <strong>Thomas Mowbray;</strong> Thomas Percy; William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument8.html">View the submission text</a>');
		var Ins8ThomasPercy = [
				[51.48398083527779, -0.6044134311929068],
				[53.71799324577726, -6.351336075629299]
		];

		var Wit8f = L.polyline(Ins8ThomasPercy, {color: '#f7dc6f', offset: 1}).bindPopup('<i>Instrument 8</i><br/>Submission of Niall Og O&apos;Neill<br/><strong>Witnesses:</strong> Thomas, Archbishop of York;John, Archbishop of Armagh; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; <strong>Thomas Percy;</strong> William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument8.html">View the submission text</a>');
		var Ins8WilliamScrope = [
				[51.499673068298016, -0.12474482944096953],
				[53.71799324577726, -6.351336075629299]
		];

		var Wit8g = L.polyline(Ins8WilliamScrope, {color: '#f7dc6f', offset: 3}).bindPopup('<i>Instrument 8</i><br/>Submission of Niall Og O&apos;Neill<br/><strong>Witnesses:</strong> Thomas, Archbishop of York;John, Archbishop of Armagh; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; <strong>Thomas Percy</strong>; William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument8.html">View the submission text</a>');

// Instrument 9: Maurice Magennis, Drogheda Dominican Priory
var Ins9R2 = [
		[51.48398083527779, -0.6044134311929068],
		[53.71799324577726, -6.351336075629299]
];

var Auth9 = L.polyline(Ins9R2, {color: '#8e44ad', offset: -3, stroke: 2}).bindPopup('<i>Instrument 9</i><br/>Submission of Maurice Magennis<br/><strong>Authority:</strong> Richard II<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument9.html">View the submission text</a>');


var Ins9MauriceMagennis = [
		[54.26405024505779, -5.844814792025816],
		[53.71799324577726, -6.351336075629299]
];

var Sub9 = L.polyline(Ins9MauriceMagennis, {color: '#e67e22'}).bindPopup('<i>Instrument 9</i><br/><strong>Submitting party:</strong> Maurice Magennis<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument9.html">View the submission text</a>');

var Ins9StephenGarnon = [
		[53.89242273355447, -6.402687121143925],
		[53.71799324577726, -6.351336075629299]
];

var Int9 = L.polyline(Ins9StephenGarnon, {color: '#27ae60'}).bindPopup('<i>Instrument 9</i><br/>Submission of Maurice Magennis<br/><strong>Interpreter:</strong> Stephen Garnon<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument9.html">View the submission text</a>');

var Ins9ThomasAbpYork = [
		[53.96261321710904, -1.082564232319088],
		[53.71799324577726, -6.351336075629299]
];

var Wit9a = L.polyline(Ins9ThomasAbpYork, {color: '#f7dc6f'}).bindPopup('<i>Instrument 9</i><br/>Submission of Maurice Magennis<br/><strong>Witnesses:</strong><strong>Thomas, Archbishop of York;</strong> Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument9.html">View the submission text</a>');

var Ins9RobertBpLondon = [
		[51.51391872458704, -0.09835060227396925],
		[53.71799324577726, -6.351336075629299]
];

var Wit9b = L.polyline(Ins9RobertBpLondon, {color: '#f7dc6f'}).bindPopup('<i>Instrument 9</i><br/>Submission of Maurice Magennis<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; <strong>Robert, Bishop of London;</strong> Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument9.html">View the submission text</a>');

var Ins9RichardBpChichester = [
		[50.836444616933846, -0.7806593023080537],
		[53.71799324577726, -6.351336075629299]
];

var Wit9c = L.polyline(Ins9RichardBpChichester, {color: '#f7dc6f'}).bindPopup('<i>Instrument 9</i><br/>Submission of Maurice Magennis<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; Robert, Bishop of London; <strong>Richard, Bishop of Chichester;</strong> Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument9.html">View the submission text</a>');

var Ins9TidemanBpLlandaff = [
	[51.49581515376926, -3.217197702793551],
	[53.71799324577726, -6.351336075629299]
]

var Wit9d = L.polyline(Ins9TidemanBpLlandaff, {color: '#f7dc6f'}).bindPopup('<i>Instrument 9</i><br/>Submission of Maurice Magennis<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; <strong>Tideman, Bishop of Llandaff;</strong> Thomas Mowbray; Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument9.html">View the submission text</a>');

var Ins9ThomasMowbray = [
		[53.52635679996112, -0.8166546393819635],
		[53.71799324577726, -6.351336075629299]
];

var Wit9e = L.polyline(Ins9ThomasMowbray, {color: '#f7dc6f'}).bindPopup('<i>Instrument 9</i><br/>Submission of Maurice Magennis<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; <strong>Thomas Mowbray;</strong> Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument9.html">View the submission text</a>');

var Ins9ThomasPercy = [
		[51.48398083527779, -0.6044134311929068],
		[53.71799324577726, -6.351336075629299]
];

var Wit9f = L.polyline(Ins9ThomasPercy, {color: '#f7dc6f', offset: 1}).bindPopup('<i>Instrument 9</i><br/>Submission of Maurice Magennis<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; <strong>Thomas Percy;</strong> and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument9.html">View the submission text</a>');

var Ins9WilliamScrope = [
		[51.499673068298016, -0.12474482944096953],
		[53.71799324577726, -6.351336075629299]
];

var Wit9g = L.polyline(Ins9WilliamScrope, {color: '#f7dc6f', offset: 3}).bindPopup('<i>Instrument 9</i><br/>Submission of Maurice Magennis<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; and <strong>William Scrope</strong><br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument9.html">View the submission text</a>');

// Instrument 10: Niall O'Hanlon, Drogheda Dominican Priory
	// Richard II
	var Ins10R2 = [
	    [51.48398083527779, -0.6044134311929068],
	    [53.71799324577726, -6.351336075629299]
	];

	var Auth10 = L.polyline(Ins10R2, {color: '#8e44ad', offset: -3, stroke: 2}).bindPopup('<i>Instrument 10</i><br/>Submission of Niall O&apos;Hanlon<br/><strong>Authority:</strong> Richard II<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument10.html">View the submission text</a>');
	// Niall O'Hanlon
	var Ins10NiallOHanlon = [
	    [54.35333661014168, -6.417615938831388],
	    [53.71799324577726, -6.351336075629299]
	];

	var Sub10 = L.polyline(Ins10NiallOHanlon, {color: '#e67e22'}).bindPopup('<i>Instrument 10</i><br/><strong>Submitting party:</strong> Niall O&apos;Hanlon<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument10.html">View the submission text</a>');
	// Thomas Talbot
	var Ins10ThomasTalbot = [
	    [53.343059024832215, -6.267460588689023],
	    [53.71799324577726, -6.351336075629299]
	];

	var Int10 = L.polyline(Ins10ThomasTalbot, {color: '#27ae60'}).bindPopup('<i>Instrument 10</i><br/>Submission of Niall O&apos;Hanlon<br/><strong>Interpreter:</strong> Thomas Talbot<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument10.html">View the submission text</a>');
	// Witnesses: Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; William Scrope
	var Ins10ThomasAbpYork = [
	    [53.96261321710904, -1.082564232319088],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit10a = L.polyline(Ins10ThomasAbpYork, {color: '#f7dc6f'}).bindPopup('<i>Instrument 10</i><br/>Submission of Niall O&apos;Hanlon<br/><strong>Witnesses:</strong><strong>Thomas, Archbishop of York;</strong> Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument10.html">View the submission text</a>');

	var Ins10RobertBpLondon = [
	    [51.51391872458704, -0.09835060227396925],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit10b = L.polyline(Ins10RobertBpLondon, {color: '#f7dc6f'}).bindPopup('<i>Instrument 10</i><br/>Submission of Niall O&apos;Hanlon<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; <strong>Robert, Bishop of London;</strong> Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument10.html">View the submission text</a>');

	var Ins10RichardBpChichester = [
	    [50.836444616933846, -0.7806593023080537],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit10c = L.polyline(Ins10RichardBpChichester, {color: '#f7dc6f'}).bindPopup('<i>Instrument 10</i><br/>Submission of Niall O&apos;Hanlon<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; Robert, Bishop of London; <strong>Richard, Bishop of Chichester;</strong> Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument10.html">View the submission text</a>');

	var Ins10TidemanBpLlandaff = [
		[51.49581515376926, -3.217197702793551],
		[53.71799324577726, -6.351336075629299]
	]

	var Wit10d = L.polyline(Ins10TidemanBpLlandaff, {color: '#f7dc6f'}).bindPopup('<i>Instrument 10</i><br/>Submission of Niall O&apos;Hanlon<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; <strong>Tideman, Bishop of Llandaff;</strong> Thomas Mowbray; Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument10.html">View the submission text</a>');

	var Ins10ThomasMowbray = [
	    [53.52635679996112, -0.8166546393819635],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit10e = L.polyline(Ins10ThomasMowbray, {color: '#f7dc6f'}).bindPopup('<i>Instrument 10</i><br/>Submission of Niall O&apos;Hanlon<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; <strong>Thomas Mowbray;</strong> Thomas Percy; and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument10.html">View the submission text</a>');

	var Ins10ThomasPercy = [
	    [51.48398083527779, -0.6044134311929068],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit10f = L.polyline(Ins10ThomasPercy, {color: '#f7dc6f', offset: 1}).bindPopup('<i>Instrument 10</i><br/>Submission of Niall O&apos;Hanlon<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; <strong>Thomas Percy;</strong> and William Scrope<br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument10.html">View the submission text</a>');

	var Ins10WilliamScrope = [
	    [51.499673068298016, -0.12474482944096953],
	    [53.71799324577726, -6.351336075629299]
	];

	var Wit10g = L.polyline(Ins10WilliamScrope, {color: '#f7dc6f', offset: 3}).bindPopup('<i>Instrument 10</i><br/>Submission of Niall O&apos;Hanlon<br/><strong>Witnesses:</strong>Thomas, Archbishop of York; Robert, Bishop of London; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Thomas Mowbray; Thomas Percy; and <strong>William Scrope</strong><br/>Submission site: Drogheda Dominican Priory<br/><a href="/richard-ii/instruments/Instrument10.html">View the submission text</a>');

// Instrument 11: Adam Tobyn, Kilkenny Dominican Priory
	// Richard II
	var Ins11R2 = [
	    [51.48398083527779, -0.6044134311929068],
	    [52.653899031468974, -7.257574029379863]
	];

	var Auth11 = L.polyline(Ins11R2, {color: '#8e44ad', stroke: 2}).bindPopup('<i>Instrument 11</i><br/>Submission of Adam Tobyn<br/><strong>Authority:</strong> Richard II<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument11.html">View the submission text</a>');
	// Adam Tobyn
	var Ins11AdamTobyn = [
	    [52.476269, -7.444880],
	    [52.653899031468974, -7.257574029379863]
	];

	var Sub11 = L.polyline(Ins11AdamTobyn, {color: '#e67e22'}).bindPopup('<i>Instrument 11</i><br/><strong>Submitting party:</strong> Adam Tobyn<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument11.html">View the submission text</a>');
	// Witnesses: Robert, Archbishop of Dublin; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Robert, Bishop of Lismore and Waterford
	var Ins11RobertAbpDublin = [
			[53.34345533225444, -6.27106020218046],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit11a = L.polyline(Ins11RobertAbpDublin, {color: '#f7dc6f'}).bindPopup('<i>Instrument 11</i><br/>Submission of Adam Tobyn<br/><strong>Witnesses:</strong><strong>Robert, Archbishop of Dublin;</strong> Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; and Robert, Bishop of Lismore and Waterford<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument11.html">View the submission text</a>');

	var Ins11RichardBpChichester = [
			[50.836444616933846, -0.7806593023080537],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit11b = L.polyline(Ins11RichardBpChichester, {color: '#f7dc6f'}).bindPopup('<i>Instrument 11</i><br/>Submission of Adam Tobyn<br/><strong>Witnesses:</strong>Robert, Archbishop of Dublin; <strong>Richard, Bishop of Chichester;</strong> Tideman, Bishop of Llandaff; and Robert, Bishop of Lismore and Waterford<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument11.html">View the submission text</a>');

	var Ins11TidemanBpLlandaff = [
			[51.49581515376926, -3.217197702793551],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit11c = L.polyline(Ins11TidemanBpLlandaff, {color: '#f7dc6f'}).bindPopup('<i>Instrument 11</i><br/>Submission of Adam Tobyn<br/><strong>Witnesses:</strong>Robert, Archbishop of Dublin; Richard, Bishop of Chichester; <strong>Tideman, Bishop of Llandaff;</strong> and Robert, Bishop of Lismore and Waterford<br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument11.html">View the submission text</a>');

	var Ins11RobertBpLismoreWaterford = [
			[52.26005051914892, -7.107510486891409],
			[52.653899031468974, -7.257574029379863]
	];

	var Wit11d = L.polyline(Ins11RobertBpLismoreWaterford, {color: '#f7dc6f'}).bindPopup('<i>Instrument 11</i><br/>Submission of Adam Tobyn<br/><strong>Witnesses:</strong>Robert, Archbishop of Dublin; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; and <strong>Robert, Bishop of Lismore and Waterford</strong><br/>Submission site: Kilkenny Dominican Priory<br/><a href="/richard-ii/instruments/Instrument11.html">View the submission text</a>');
// Instrument 12: Maurice FitzMaurice and Thomas MacShane, Kilkenny Dominican Priory
	// Richard II
	// Maurice FitzMaurice
	// Thomas MacShane
	// Witnesses: Robert, Archbishop of Dublin; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Robert, Bishop of Lismore and Waterford; Edward, Earl of Cork and Rutland

// Instrument 13: William and Maeduc Carragh Barrett, Kilkenny Dominican Priory
	// Richard II
	// William Barrett
	// Maeduc Carragh Barrett
	// Witnesses: Robert, Archbishop of Dublin; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Robert, Bishop of Lismore and Waterford; Edward, Earl of Cork and Rutland (same as 12)

// Instrument 14: Bernardus O'Brien, Monastery of St. Thomas the Martyr
	// Richard II
	// Bernardus O'Brien
	// Witnesses: Richard Scrope; William Arundel

// Instrument 15: Parlay at Carlow

// Instrument 16: Niall Og O'Neill and John MacDonald, Drogheda Franciscan Friary
	// Richard II
	// Niall Og O'Niall
	// John MacDonald
	// Witnesses: William Scrope; Baldwin Bereford

// Instrument 17: Turloch O'Conor Don, Burkes, O'Kennedys, Waterford Franciscan Friary

// Instrument 18: Bernardus O'Brien, Monastery of St. Thomas the Martyr
 	// Richard II
	// Bernardus O'Brien
	// James, Earl of Ormond
	// Witnesses: Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Robert, Bishop of Lismore and Waterford; Thomas Mowbray; Edward, Earl of Cork and Rutland; James, Earl of Ormond; William Scrope; John Golafre

// Instrument 19: Tadhg O'Carroll and Tadhg O'Kelly, Kilkenny Dominican Priory

// Instrument 20: Tadhg and William O'Carroll, Kilkenny Dominican Priory
	// Richard II
	// Tadhg O'Carroll
	// William O'Carroll
	// Witnesses: Robert, Archbishop of Dublin; Thomas Merke

// Instrument 21: Cologh Magennis, Adam MacGilmore, MacMahons, MacCabe, Dundalk Franciscan Church
// Instrument 22: Art Og MacMurrough, O'Brenan's Cross
// Instrument 23: Turloch O'Conor Don, William de Burgo, Walter Bermingham, aboard the Trinity
// Instrument 24: Malachy O'More, O'Kellys, O'Toole, Franciscan church at Castledermot
// Instrument 25: O'Farrels, Mageoghegan, O'Molloy , Drogheda Dominican Priory
// Instrument 26: Shane MacMahon, Drogheda Dominican Priory
// Instrument 27: Dermot O'Conor, Cormac O'Melaghlin, Kilkenny Dominican Priory
// Instrument 28: Thomas Carragh Kavanagh, David Mor O'Murchadha, Gillapatrick Rua O'More, Donal O'Nolan, meadow by Carlow Castle

// Instrument 29: Niall O'Neill and Niall Og O'Neill, Drogheda Dominican Priory
	// Richard II
	// Niall O'Neill
	// Niall Og O'Niall
	// Witnesses: John, Archbishop of Armagh; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Robert, Bishop of Lismore and Waterford

// Instrument 30: Tadhg MacCarthy Mor and Donal MacCarthy Reagh, Kilkenny Dominican Priory
	// Richard II
	// Tadhg MacCarthy Mor
	// Donal MacCarthy Reagh
	// Maurice FitzMaurice
	// Witnesses: Robert, Archbishop of Dublin; Richard, Bishop of Chichester; Tideman, Bishop of Llandaff; Robert, Bishop of Lismore and Waterford; Edward, Earl of Cork and Rutland; John Holland; William Scrope

// Instrument 31: Murchadh O'Conor Faly, Conall Abbey
// Instrument 32: Malachy O'Kelly, Drogheda Dominican Priory
// Instrument 33: Turloch O'Brien, Thomas O'Dwyer, Philip O'Kennedy, Niall O'Molloy, Kilkenny Dominican Priory

// Instrument 34: Turloch O'Conor Don, Kilkenny Dominican Priory

// Instrument 35: Cormac mac Diarmait MacCarthy and Cormac mac Domhnaill MacCarthy, Kilkenny Dominican Priory

// Instrument 36: Donal Morghysson, Monastery of St. Thomas Martyr
// Instrument 37: Magawley, Murichertach Mageoghegan, Schynagh, Thomas MacHegh, Drogheda Dominican Priory
// Instrument 38: Conor O'Melaghlin, Gilla-Isa O'Reilly, Maolmuire O'Reilly, Thomas O'Farrell, Drogheda Dominican Priory

// People filters
		var witnesses = L.layerGroup([ThomasAbpYork, RobertBpLondon, RichardBpChichester, ThomasMowbray, ThomasPercy, WilliamScrope, ThomasSparkeford, RobertAbpDublin, RobertBpLismoreWaterford, SimonFelbryge, BaldwinBereford, ThomasMareward, DavidBertevyll, PeterAbpCashel, TidemanBpLlandaff, AlexanderBpMeath, RichardBpOssory, ThomasBpElphin, JohnBpLeighlin, MilesBpCloyne, EdwardCorkRutland, RogerMarchUlster, JohnHolland, RobertdeOrrey, HenryBekirton, RobertBoleyne, JohnGolafre, JohnAbpArmagh, RichardScrope, WilliamArundel, JohnMelton, LawrenceVerkerell, JohnGreyly, NicholasSlake, GalfredoVale, WilliamFaryndon, ThomasClynton, NicholasLangford, ThomasIlketsale, ThomasPykworth, AlanPenynton, JohnBrassebrig, EdwardPerys, WalterBytterly, WilliamDrayton, JohnDrayton, RobertLey, DavidWogan, JamesOrmond, ThomasMerke, JohnBorghulle]).addTo(map);
		var authorities = L.layerGroup([RichardII], ThomasMowbray).addTo(map);
		var interpreters = L.layerGroup([ThomasTalbot, WilliamScrope, FergalOKurryn, ThomasOLocheran, EdmundVale, JamesOrmond, MauriceFitzMaurice, WilliamOCormacan, ThomasKildare, JohnGalwey]).addTo(map);
		var submitters = L.layerGroup([JohnMacDonald, CatholicusOHanlon, ArtODempsey, WilliamBeg, JohnNicholson, MauriceAdalagh, MalachyCam, JohnGlasmorgh, TurlochOConorDon, TadhgMacCarthyMor, NiallOgONeill, MauriceMagennis, NiallOHanlon, AdamTobyn, ThomasMacShane, WilliamBarrett, MaeducCarraghBarrett, BernardusOBrien, MalachyOMore, LugaidhOgOMore, ShaneOMore, ArtOgMacMurrough, MurchadhOConorFaly, GeoffreyOBrenan, FinghinMacGillapatrick, ThomasCarraghKavanagh, LeynaghFerssonOConor, OToole, BernardOBrien, DormiciusOBrien, OdoOKennedyFinn, ThomasOKennedyDon, TheobaldFitzWalter, DavidGallBurke, TadhgOCarroll, WilliamOCarroll, WalterBermingham, GillapatrickRuaOMore, NiallONeill, MauriceFitzMaurice, DonalMacCarthy, PhilipOKennedy, CormacDermotMacCarthy, CormacDonalMacCarthy, MuirchertachMageoghegan, GillaIsaOReilly, MaolmuireOReilly, ThomasOFarrell]).addTo(map);
// Place filters
		var secularSites = L.layerGroup([WindsorCastle, Dungannon, DublinCastle, Tandragee, Ballykean, Ferns, Ballintober, Ballycarbery, Dundrum, Glin, Ballina, ClonroadMore, Dunamase, Rathangan, Castlecomer, Aghaboe, Powerscourt, Gowran, Nenagh, Castleconnell, Gaulstown, Leap, Athenry, Lixnaw, Kilbrittain, KingJohns, Macroom, Reginalds, Geoghegan, Tullymongan, Lissardowlan, Ballygory, CarlowCastle, OBrenansCross, TrinityShip, CarlowCastleMeadow]).addTo(map);
		var eccSites = L.layerGroup([YorkMinster, OldStPauls, ChichesterCath, WellsCath, ChristChurchDub, ChristChurchWat, RockCashel, LlandaffCath, CathPeterPaul, StCaniceCath, StMaryCath, StLaserianCath, StColmanCath, StMullins, CoventryCath, LichfieldCath, ElyCath, Donaghmore, StPatrickCath, LincolnCath, Hospitaller, WestminsterAbbey, ClonfertCath, DroghedaDom, KilkennyDom, StThomasMartyr, CastledermotFran, DroghedaFran, WaterfordFran, DundalkFran, LeighlinCarm, ConallAbbey]).addTo(map);
		var submissionSites = L.layerGroup([DublinCastle, DroghedaDom, KilkennyDom, StThomasMartyr, CastledermotFran, DroghedaFran, WaterfordFran, DundalkFran, LeighlinCarm, ConallAbbey, Ballygory, CarlowCastle, OBrenansCross, TrinityShip, CarlowCastleMeadow]).addTo(map);
// Notarial instrument filters
		var instrument1 = L.layerGroup([RichardII, JohnMacDonald, ThomasTalbot, ThomasAbpYork, RobertBpLondon, RichardBpChichester, ThomasMowbray, ThomasPercy, WilliamScrope, Auth1, Sub1, Int1, Wit1a, Wit1b, Wit1c, Wit1d, Wit1e, Wit1f, DroghedaDom, Dungannon, WindsorCastle, ChichesterCath, DublinCastle, YorkMinster, OldStPauls, EpworthCastle]);
		var instrument2 = L.layerGroup([RichardII, CatholicusOHanlon, ThomasTalbot, ThomasAbpYork, RobertBpLondon, RichardBpChichester, ThomasMowbray, ThomasPercy, WilliamScrope, Auth2, Sub2, Int2, Wit2a, Wit2b, Wit2c, Wit2d, Wit2e, Wit2f, DroghedaDom, WindsorCastle, Tandragee, DublinCastle, YorkMinster, OldStPauls, ChichesterCath, EpworthCastle]);
		var instrument3 = L.layerGroup([RichardII, DonnchadhOByrne, RobertAbpDublin, RichardBpChichester, RobertBpLismoreWaterford, WilliamScrope, SimonFelbryge, BaldwinBereford, ThomasMareward, DavidBertevyll, Auth3, Sub3, Wit3a, Wit3b, Wit3c, Wit3d, Wit3e, Wit3f, Wit3g, Wit3h, DublinCastle]);
		var instrument4 = L.layerGroup([RichardII, ArtODempsey, JohnMalachy, RobertAbpDublin, PeterAbpCashel, RichardBpChichester, TidemanBpLlandaff, AlexanderBpMeath, RobertBpLismoreWaterford, RichardBpOssory, ThomasBpElphin, JohnBpLeighlin, MilesBpCloyne, EdwardCorkRutland, RogerMarchUlster, JohnHolland, Auth4, Sub4, Int4, Wit4a, Wit4b, Wit4c, Wit4d, Wit4e, Wit4f, Wit4g, Wit4h, Wit4i, Wit4j, Wit4k, Wit4l, Wit4m, KilkennyDom]);
		var instrument5 = L.layerGroup([RichardII, JohnStanley, WilliamBeg, JohnNicholson, MauriceAdalagh, MalachyCam, JohnGlasmorgh, FergalOKurryn, RobertdeOrrey, HenryBekirton, Auth5, Sub5, Int5, Wit5a, Wit5b, Wit5c, NewLeighlin]);
		var instrument6 = L.layerGroup([RichardII, TadhgOMeagher, TurlochOConorDon, JohnMalachy, TidemanBpLlandaff, RobertBpLismoreWaterford, JohnHolland, WilliamScrope, Auth6, Sub6a, Sub6b, Int6, Wit6a, Wit6b, Wit6c, Wit6d, KilkennyDom]);
		var instrument7 = L.layerGroup([RichardII, TadhgMacCarthyMor, RichardBpChichester, JohnGolafre, Auth7, Sub7, Wit7a, Wit7b, DroghedaDom]);
		var instrument8 = L.layerGroup([RichardII, NiallOgONeill, ThomasOLocheran, ThomasAbpYork, JohnAbpArmagh, RobertBpLondon, RichardBpChichester, TidemanBpLlandaff, ThomasMowbray, ThomasPercy, WilliamScrope, Auth8, Sub8, Int8, Wit8a, Wit8b, Wit8c, Wit8d, Wit8e, Wit8f, Wit8g, DroghedaDom]);
		var instrument9 = L.layerGroup([RichardII, MauriceMagennis, StephenGarnon, ThomasAbpYork, RobertBpLondon, RichardBpChichester, TidemanBpLlandaff, ThomasMowbray, ThomasPercy, WilliamScrope, Auth9, Sub9, Int9, Wit9a, Wit9b, Wit9c, Wit9d, Wit9e, Wit9f, Wit9g, DroghedaDom]);
		var instrument10 = L.layerGroup([RichardII, NiallOHanlon, ThomasTalbot, ThomasAbpYork, RobertBpLondon, RichardBpChichester, TidemanBpLlandaff, ThomasMowbray, ThomasPercy, WilliamScrope, Auth10, Sub10, Int10, Wit10a, Wit10b, Wit10c, Wit10d, Wit10e, Wit10f, Wit10g, DroghedaDom]);
		var instrument11 = L.layerGroup([RichardII, AdamTobyn, RobertAbpDublin, RichardBpChichester, TidemanBpLlandaff, RobertBpLismoreWaterford, Auth11, Sub11, Wit11a, Wit11b, Wit11c, Wit11d, KilkennyDom]);
		var instrument12 = L.layerGroup([RichardII, MauriceFitzMaurice, ThomasMacShane, RobertAbpDublin, RichardBpChichester, TidemanBpLlandaff, RobertBpLismoreWaterford, EdwardCorkRutland]);
		var instrument13 = L.layerGroup([RichardII, WilliamBarrett, MaeducCarraghBarrett, RobertAbpDublin, RichardBpChichester, TidemanBpLlandaff, RobertBpLismoreWaterford, EdwardCorkRutland]);
		var instrument14 = L.layerGroup([RichardII, BernardusOBrien, RichardScrope, WilliamArundel, RochesterCastle]);
//		var instrument15 = L.layerGroup([GeraldOByrne, ThomasMowbray, JohnMelton, EdmundVale, JohnBpLeighlin, JohnGolafre, LawrenceVerkerell, JohnGreyly, GalfredoVale, DavidWogan, WilliamFaryndon, ThomasClynton, NicholasLangford, ThomasIlketsale, ThomasPykworth, AlanPenynton, JohnBrassebrig, EdwardPerys, WalterBytterly, WilliamDrayton, JohnDrayton, RobertLey, MalachyOMore, LugaidhOgOMore, ShaneOMore, ArtOgMacMurrough, MurchadhOConorFaly, LeynaghFerssonOConor, OToole, DonnchadhOByrne, GuyLenfaunt, JohnMalachy]);
		var instrument16 = L.layerGroup([RichardII, NiallOgONeill, JohnMacDonald, MauriceMagennis, WilliamScrope, BaldwinBereford]);
//		var instrument17 = L.layerGroup([RichardII, TurlochOConorDon, WilliamdeBurgo, BernardOBrien, DormiciusOBrien, JamesOrmond, RobertAbpDublin, RichardBpChichester, TidemanBpLlandaff, RichardBpOssory, RobertBpLismoreWaterford, WilliamOCormacan, EdwardCorkRutland, JohnHolland, ThomasMowbray, OdoOKennedyFinn, ThomasOKennedyDon, GeraldTallon, TheobaldFitzWalter, DavidGallBurke, WilliamScrope]);
		var instrument18 = L.layerGroup([RichardII, BernardusOBrien, JamesOrmond, RichardBpChichester, TidemanBpLlandaff, RobertBpLismoreWaterford, ThomasMowbray, EdwardCorkRutland, WilliamScrope, JohnGolafre]);
//		var instrument19 = L.layerGroup([RichardII, TadhgOCarroll, TadhgOKelly, WilliamOCormacan, RobertAbpDublin, PeterAbpCashel, RichardBpChichester, TidemanBpLlandaff, AlexanderBpMeath, RobertBpLismoreWaterford, RichardBpOssory, ThomasBpElphin, JohnBpLeighlin, MilesBpCloyne, EdwardCorkRutland, RogerMarchUlster, JohnHolland]);
		var instrument20 = L.layerGroup([RichardII, TadhgOCarroll, WilliamOCarroll, RobertAbpDublin, ThomasMerke]);
//		var instrument21 = L.layerGroup([RichardII, CologhMagennis, AdamMacGilmore, JohnFaltagh, ThomasAbpYork, RobertBpLondon, RichardBpChichester, ThomasPercy, WilliamScrope, PhilipMacMahon, MacCabe, WalterTeling]);
//		var instrument22 = L.layerGroup([RichardBpOssory,ArtOgMacMurrough, FergalOKurryn, RobertShortal, JohnSaykyn]);
//		var instrument23 = L.layerGroup([RichardII, TurlochOConorDon, WilliamdeBurgo, WalterBermingham, JohnBoor, JohnBorghulle, ThomasMerke]);
//		var instrument24 = L.layerGroup([RichardII, MalachyOMore, TuathalOKelly, PhilipOKelly, OToole, GuyLenfaunt, RichardBpChichester, Tideman, JohnHolland, ThomasPercy, WilliamScrope]);
//		var instrument25 = L.layerGroup([RichardII, MurchadhBanOFarrell, RossOFarrell, MelaghlinMageoghegan, NiallOMolloy, JohnBocombe, ThomasAbpYork, RobertBpLondon, RichardBpChichester, ThomasPercy, WilliamStormy, JohnRoche]);
//		var instrument26 = L.layerGroup([RichardII, ShaneMacMahon, StephenGarnon, RichardBpChichester, Tideman, WilliamScrope, HughLutterell]);
//		var instrument27 = L.layerGroup([RichardII, DermotOConor, CormacOMelaghlin, JohnDesmond, TidemanBpLlandaff, RobertBpLismoreWaterford, JohnHolland, WilliamScrope]);
//		var instrument28 = L.layerGroup([RichardII, ThomasCarraghKavanagh, DavidMorOMurchadha, GillapatrickRuaOMore, RichardNelgan, RichardBpChichester, TidemanBpLlandaff, JohnHolland, ThomasPercy, WilliamScrope, DonalONolan, SimonVale]);
		var instrument29 = L.layerGroup([RichardII, NiallONeill, NiallOgONeill, JohnAbpArmagh, RichardBpChichester, TidemanBpLlandaff, RobertBpLismoreWaterford]);
		var instrument30 = L.layerGroup([RichardII, TadhgMacCarthyMor, DonalMacCarthy, MauriceFitzMaurice, RobertAbpDublin, RichardBpChichester, TidemanBpLlandaff, RobertBpLismoreWaterford, EdwardCorkRutland, JohnHolland, WilliamScrope]);
//		var instrument31 = L.layerGroup([RichardII, MurchadhOConorFaly, WilliamWellesley, RichardBpChichester, TidemanBpLlandaff, WilliamScrope, HughLutterell]);
//		var instrument32 = L.layerGroup([RichardII, MalachyOKelly, TidemanBpLlandaff, WilliamScrope]);
//		var instrument33 = L.layerGroup([RichardII, TurlochOBrien, WilliamOCormacan, RichardBpChichester, TidemanBpLlandaff, MilesBpCloyne, RobertBpLismoreWaterford, RogerMarchUlster, ThomasMowbray, JohnHolland]);
		var instrument34 = L.layerGroup([RichardII, TurlochOConorDon, NicholasSlake, ThomasMerke]);
		var instrument35 = L.layerGroup([RichardII, CormacDermotMacCarthy, WilliamScrope, RobertAbpDublin, RichardBpChichester, TidemanBpLlandaff, RobertBpLismoreWaterford, EdwardCorkRutland, JohnHolland, CormacDonalMacCarthy, JohnGalwey]);
//		var instrument36 = L.layerGroup([RichardII, DonalMorghysson, RobertBpLismoreWaterford, WilliamdeAngel, WilliamClynton]);
//		var instrument37 = L.layerGroup([RichardII, Magawley, MuirchertachMageoghegan, Schynagh, ThomasMacHegh, JohnBocombe, ThomasAbpYork, RobertBpLondon, RichardBpChichester, ThomasMowbray, ThomasPercy, WilliamStormy, JohnRoche]);
//		var instrument38 = L.layerGroup([RichardII, ConorOMelaghlin, GillaIsaOReilly, MaolmuireOReilly, ThomasOFarrell, JohnBocombe, ThomasAbpYork, RobertBpLondon, RichardBpChichester, ThomasMowbray, ThomasPercy, WilliamStormy, JohnRoche, TidemanBpLlandaff]);

var entityTree = {
	label: '<strong><i>People and Places</i></strong>',
	selectAllCheckbox: 'Un/select all',
	children: [
		{
				label: '<strong>People</strong>',
				selectAllCheckbox: true,
				children: [
						{ label: 'Submitting Parties', layer: submitters },
						{	label: 'Witnesses', layer: witnesses },
						{	label: 'Interpreters', layer: interpreters },
						{ label: 'Authorities', layer: authorities }
					]
				},
		{
			label: '<strong>Places</strong>',
			selectAllCheckbox: true,
			children: [
				{ label: 'Secular Sites', layer: secularSites },
				{	label: 'Ecclesiastical Sites', layer: eccSites },
				{	label: 'Submission Sites', layer: submissionSites },
			]
		}
	]
};

L.control.layers.tree(null, entityTree).addTo(map);

var submissionsTree = {
	label: '<strong><i>Submissions</i></strong>',
	selectAllCheckbox: 'Un/select all',
	children: [
			{ label: 'Instrument 1:<br/> <i>John MacDonald</i>', layer: instrument1 },
			{ label: 'Instrument 2:<br/> <i>Catholicus O&apos;Hanlon</i>', layer: instrument2 },
			{ label: 'Instrument 3:<br/> <i>Donnchadh O&apos;Byrne</i>', layer: instrument3 },
			{ label: 'Instrument 4:<br/> <i>Art O&apos;Dempsey</i>', layer: instrument4},
  		{ label: 'Instrument 5:<br/> <i>Followers of Art MacMurrough</i>', layer: instrument5},
  		{ label: 'Instrument 6:<br/> <i>Tadhg O&apos;Meagher and Turloch O&apos;Conor Don</i>', layer: instrument6},
			{ label: 'Instrument 7:<br/> <i>Tadhg MacCarthy Mor</i>', layer: instrument7},
			{ label: 'Instrument 8:<br/> <i>Niall Og O&apos;Neill</i>', layer: instrument8},
  		{ label: 'Instrument 9:<br/> <i>Maurice Magennis</i>', layer: instrument9},
			{ label: 'Instrument 10:<br/> <i>Niall O&apos;Hanlon</i>', layer: instrument10},
			{ label: 'Instrument 11:<br/> <i>Adam Tobyn</i>', layer: instrument11},
			{ label: 'Instrument 12:<br/> <i>Maurice FitzMaurice and Thomas MacShane</i>', layer: instrument12},
			{ label: 'Instrument 13:<br/> <i>William Barrett and Maeduc Carragh Barrett</i>', layer: instrument13},
			{ label: 'Instrument 14:<br/> <i>Bernardus O&apos;Brien</i>', layer: instrument14},
//		{ label: 'Instrument 15: ', layer: instrument15}
			{ label: 'Instrument 16:<br/> <i>Niall Og O&apos;Neill, John MacDonald, and Maurice Magennis</i>', layer: instrument16},
//		{ label: 'Instrument 17: ', layer: instrument17}
			{ label: 'Instrument 18:<br/> <i>Bernardus O&apos;Brien</i>', layer: instrument18},
//		{ label: 'Instrument 19: ', layer: instrument19}
			{ label: 'Instrument 20:<br/> <i>Tadhg O&apos;Carroll and William O&apos;Carroll</i>', layer: instrument20},
//		{ label: 'Instrument 21: ', layer: instrument21}
//		{ label: 'Instrument 22: ', layer: instrument22}
//		{ label: 'Instrument 23: ', layer: instrument23}
//		{ label: 'Instrument 24: ', layer: instrument24}
//		{ label: 'Instrument 25: ', layer: instrument25}
//		{ label: 'Instrument 26: ', layer: instrument26}
//		{ label: 'Instrument 27: ', layer: instrument27}
//		{ label: 'Instrument 28: ', layer: instrument28}
			{ label: 'Instrument 29:<br/> <i>Niall O&apos;Neill and Niall Og O&apos;Neill</i>', layer: instrument29},
			{ label: 'Instrument 30:<br/> <i>Tadhg MacCarthy Mor and Donal MacCarthy [Reagh]</i>', layer: instrument30},
//		{ label: 'Instrument 31: ', layer: instrument31}
//		{ label: 'Instrument 32: ', layer: instrument32}
//		{ label: 'Instrument 33: ', layer: instrument33}
			{ label: 'Instrument 34:<br/> <i>Turloch O&apos;Conor Don</i>', layer: instrument34},
			{ label: 'Instrument 35:<br/> <i>Cormac MacCarthy [Muskerry] and Cormac MacCarthy [Reagh]</i>', layer: instrument35},
//		{ label: 'Instrument 36: ', layer: instrument36}
//		{ label: 'Instrument 37: ', layer: instrument37}
//		{ label: 'Instrument 38: ', layer: instrument38}
			]
		};

L.control.layers.tree(null, submissionsTree).addTo(map);

	</script>
	<footer>
		<?php include "./footer.html" ?>
</footer>
</body>
