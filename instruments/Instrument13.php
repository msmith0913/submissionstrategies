<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Margaret K. Smith">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instrument 13: The Submission of William and Maeduc Carragh Barrett</title>
  <link rel="stylesheet" href="https://submissionstrategies.com/css/r2.css">
</head>

<body>
  <header>
    <?php include "../header.html" ?>
  </header>
  <main>
    <h1>Notarial Instrument 13</h1>
    <h2>The Submission of William and Maeduc Carragh Barrett</h2>
    <h3>Submission text (English, translated by Edmund Curtis)</h3>
    <p>Notarial Instrument XIII records that: on the same day, April 6th, and place as the foregoing, in the presence of the King, &c. William Barret and Mayv [Maeduc] Carragh Barret, Englishmen born in Ireland and rebels, appeared with cords around their necks, &c., [as in Instrument XI], having sought and obtained pardon for their offences, through the prayers of the Archbishop of Dublin.</p>
    <button onclick="oathexpand()">+</button>
    <div id="oath" style="display: none; border-style: solid;"><h4><i>Oath from <a href="../instruments/Instrument11.php">Instrument 11</a></i></h4>
    <p>Adam, son of Richard syn Tobyn [“de sancto Albano”] of Cashel diocese, an Englishman of Ireland and a rebel, fell before his feet with bended knees and his head bowed to earth and a cord bound about his neck, fearing justly to be condemned to death, and confessing himself on account of his offences worthy to be punished by death; submitting also his body and all his goods movable and immovable to the royal will, asking for mercy and grace. </p>
  </div>
  <script>
  function oathexpand() {
  var x = document.getElementById("oath");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  }
  </script>
<p>Whereupon the King granted them life with the hope of doing things acceptable to him and his heirs, and requested the notary to make a public instrument.</p>
<p>Witnesses: the Archbishop of Dublin and others as in foregoing instrument.
</p>
<button onclick="witnessexpand()">+</button>
<div id="witness" style="display: none; border-style: solid;">
  <h4><i>Witnesses from <a href="../instruments/Instrument12.php">Instrument 12</a></i></h4>
<p>Witnesses: the Archbishop of Dublin, the bishops of Chichester, Llandaff, and Waterford-Lismore, the Earl of Huntingdon, and the Earl of Rutland and Cork.</p>
</div>
<script>
function witnessexpand() {
var x = document.getElementById("witness");
if (x.style.display === "none") {
  x.style.display = "block";
} else {
  x.style.display = "none";
}
}
</script>
    <h3>Submission text (Latin, transcribed by Edmund Curtis)</h3>
    <p></p>
  </main>
  <footer>
    <?php include "../footer.html" ?>
  </footer>
</body>

</html>
