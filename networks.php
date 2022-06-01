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
	<title>Networks</title>
</head>

<body>
	<header>
		<?php include "./header.html" ?>
</header>
<main>
	<h1>Networks</h1>
	<p>These network graphs show the connections between parties documented in the sources. They are constructed in <a href="www.observablehq.com">Observable</a> using the D3.js library.</p>
	<p>Like the map, these networks are based on data extracted and cleaned from the submissions - but it's important to note that data cleaning is not clear-cut. The process involves a series of decisions about what data to include, what and how to
		standardize, how to interpret silences or lacunae, and more. For that reason, the completed site will include both the text of the submissions (as transcribed and translated by Edmund Curtis) and my own spreadsheets so that you can see my editorial decisions and
		interventions.</p>
		<h2> How to navigate the networks</h2>
		<p>The first network graph shows the instruments as green nodes, connected to all the people (represented as blue nodes) who were present at the submission event. Hover over a node to see the name or instrument number. Click on a node to access a link to the person or instrument's authority file. Click on any node to dismiss the popup.</p>
		<p>The second graph shows links directly between people and allows you to filter the graph according to the type of relationship. As with the first graph, hover over the node to see the name and click on it to see the link to the authority file. Use the dropdown bar above the chart to change relationship type.</p>
		<p>Under both graphs, find a link to the Observable notebook, which you can fork to make your own visualizations.</p>
	<h2>Instruments</h2>
	<iframe width="100%" height="764" frameborder="0" src="https://observablehq.com/embed/fa4da716a717246a?cells=chart"></iframe>
	<h2>Relationship Types</h2>
	<iframe width="100%" height="814" frameborder="0" src="https://observablehq.com/embed/a9ff25917d9168b2?cells=viewof+reltype%2Cfilteredlinkchart"></iframe>
</main>
<footer>
	<?php include "./footer.html" ?>
</footer>
</body>
