
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Places: Kilbrittain</title>
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
  </style>
</head>
<body>
  <header>
    <?php include "../header.html" ?>
</header>

  <h1>Kilbrittain</h1>
  <h3 style="text-align: center;"><a href="https://www.logainm.ie/en/8185">Kilbrittain, Co. Cork</a></h3>
  <h4>Associated People</h4>
    <p><a href="/people/MacCarthyReagh.php#DonalMacCarthyReagh">Donal MacCarthy Reagh</a></p>
    <p><a href="/people/MacCarthyReagh.php#CormacMacCarthyReagh">Cormac MacCarthy Reagh</a></p>
  <h4>Coordinates:</h4><p>51.67552178247685, -8.679032758580476</p>
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
    L.marker([51.67552178247685, -8.679032758580476], {icon: castleIcon}).bindPopup('<strong>Location: Kilbrittain</strong>').addTo(map);
    </script>
  <h4>How was it located?</h4>
<p>Although likely a de Courcey castle originally, Kilbrittain Castle was the seat of the MacCarthy Reagh lordship of Carbery for most of the late fifteenth century. It was probably Donal himself who took it in the course of his aggressive expansion, although it is impossible to say exactly when (and whether it was prior to the 1395 submissions). It is clear that Donal used Kilbrittain, as he died there in 1414. However, he was buried in Rosscarbery, suggesting that Kilbrittain did not immediately become Carbery's center of lordly authority. Like many properties of Gaelic lords, Kilbrittain was confiscated and regranted multiple times in the 17th century, and from the eighteenth to early twentieth century, it was owned by the Stawell family, who lost it in bankruptcy proceedings. In 1920, it was burned - part of a wave of "big house" burnings during the Irish Revolution. A few days later, it was reported in the <i>Cork Examiner</i> that "Kilbrittain Castle, recently burned, was to be occupied by military, according to an official report from Dublin Castle." The castle was restored in 1969 and continues as a residence.</p>
  <h4>Sources and Further Reading</h4>
  <p><a href="https://maps.archaeology.ie/historicenvironment/?SMRS=CO124-025001-">Site record for Kilbrittain</a> in the National Monuments Service Historic Environment Viewer, derived from the <i>Archaeological Inventory of County Cork</i>, Volume 1: West Cork (Dublin: Stationery Office, 1992).</p>
  <p>"Kilbrittain Castle," <i>The Cork Examiner</i>, 31 May 1920.</p>
  <p><a href="https://www.corkhist.ie/wp-content/uploads/jfiles/1920/b1920-011.pdf">W. Butler, "Notes and Queries: Kilbrittain Castle completely destroyed by Fire," <i>Journal of the Cork Historical and Archaeological Society</i> 26, no. 123 (1920): 39.</a></p>
  <p><a href="https://www.corkhist.ie/wp-content/uploads/jfiles/1920/b1920-037.pdf">W.F. Butler, "Notes and Queries: Kilbrittain Castle," <i>Journal of the Cork Historical and Archaeological Society</i> 26, no. 124 (1920): 81.</a></p>
  <p>Tim Cahill-O'Brien, "A history of Kilbrittain Castle," <i>Bandon Historical Journal</i> 17 (2001): 56-64. - <i>Note that this is almost entirely a reprint of Coakley's article below.</i></p>
  <p><a href="https://www.corkhist.ie/wp-content/uploads/jfiles/1920/b1920-003.pdf">C. Coakley, "Kilbrittain Castle," <i>Journal of the Cork Historical and Archaeological Society</i> 26, no. 123 (1920): 18-23.</a></p>
  <p>Terence Dooley, <i>Burning the Big House</i> (New Haven: Yale University Press, 2022).</p>
    <br/>
  <h2>Contributors</h2>
    <p>Margaret K. Smith</p>
    <footer>
      <?php include "../footer.html" ?>
  </footer>
  </body>
  </html>
