<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://submissionstrategies.com/css/r2.css" />
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
	</style>
	<meta charset="UTF-8">
	<meta name="title" content="Submission Strategies: The Submissions to Richard II, 1395">
	<meta name="description" content="An interactive visualization of the spatial and social networks in 14th century Ireland">	<meta name="author" content="Margaret K. Smith">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data</title>
</head>

<body>
	<header>
		<?php include "./header.html" ?>
</header>
<main>
	<h1>Project Data</h1>
<p>This project was designed to be collaborative at every level. I'd love for you to contribute to the Submission Strategies website itself or spin off your own projects. All data is freely available under a non-commercial attribution Creative Commons license. As the footer says, you're welcome to use it, adapt it, and share it further so long as you include attribution to me and the Submission Strategies site.</p>
<p>Eventually, the data will be available in several formats. Currently, I've provided TSVs, a text file that uses the tab character to delimit columns in a table. You can open them in a text editor or in a spreadsheet tool like Excel or Google Sheets. You can also import them into visualization tools like Palladio or Observable. As of launching this project (June 2022), the tables are still incomplete, particularly the Places table. I'm chipping away at them, so check back or, if you have any insights, feel free to send me corrections and additions!</p>
<p>The TSV is the format I use for working documents that I'm still editing regularly. You'll find that the copies linked here are stored in GitHub, which provides built-in version control - that is, you can see the edits I've made to any given file and look at previous versions of it. That's crucial for citations and for project sustainability. It ensures that when you use this site, even while it's in development, you can always access a snapshot of the materials as they were when you viewed them. If you'd like to be notified of changes, you can follow the repository on GitHub and set up alerts.</p>
<p>Future iterations of this page will offer different data formats, including a JSON for network visualizations and a prepackaged Palladio file (also a JSON). (A preliminary JSON is available below, but it needs further cleaning.) If you create a derivative file and would like to make it available here, please <a href="/contact.php">get in touch</a>!</p>
<h3>Files</h3>
<p><strong><a href="https://github.com/msmith0913/submissionstrategies/blob/main/data/people.txt">People: </a></strong>This TSV contains the names, titles, and roles of each individual named in the submissions. I've also assigned standardized names and an ID number that I use as a key across all tables.</p>
<p><strong><a href="https://github.com/msmith0913/submissionstrategies/blob/main/data/instruments.txt">Instruments: </a></strong>This TSV provides the locations (both text and coordinates) and dates of each submission event as recorded in the notarial instruments. It also assigns each instrument an ID that is referenced in the Relations table. In the case of instruments that record multiple submission events, I have subdivided them.</p>
<p><strong><a href="https://github.com/msmith0913/submissionstrategies/blob/main/data/relations.txt">Relations: </a></strong>This TSV links the people and instruments tables, using the PersonID and DocID. It breaks down the participants by the role they played in the event (e.g. submitter, interpreter, etc.).</p>
<p><strong><a href="https://github.com/msmith0913/submissionstrategies/blob/main/data/places.txt">Places: </a></strong>This TSV contains the places I've assigned to each participant. Where a place is mentioned in the text, no matter how vague, I have noted it. I also provide the placename and coordinates of the location I've assigned. Geolocating medieval figures, especially non-elites or middling elites, is a complicated and often frustrating process that doesn't always produce reliable results. I've therefore also included columns that describe what kind of location it is (a residence, a place the person owned, a place they worked), the precision with which I can locate them (a specific building, a lordship, a diocese), and the certainty I ascribe to the location in general. Very certain indicates that I have a primary or reliable secondary source that places them in that place in the right period. Moderately certain indicates that there are sources partially attesting to the data, but one or more categories is uncertain or unattested. (For instance, perhaps I can place the family in a particular castle in the fifteenth century, but it's unclear whether they were in posession of it in the fourteenth.) Moderately uncertain indicates that the connection is more peripheral. For instance, the location I have may relate to a different sept or to the individual's overlord. Very uncertain indicates that I have been unable to find a location in any available sources and the location provided represents a best guess based on much later or more unreliable evidence.</p>
<p><strong><a href="https://github.com/msmith0913/submissionstrategies/blob/main/data/PersonRelations.json">Observable Data: </a></strong>This JSON contains the data used to create the network visualizations. It requires further cleaning, but it's a useful document if you want to experiment with visualizations. You can fork my network viz, or you can create your own.</p>
</main>
<footer>
	<?php include "./footer.html" ?>
</footer>
</body>
