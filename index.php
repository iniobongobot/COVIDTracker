<!DOCTYPE html>
<html>
<head>
	<title>COVID Tracker</title>
</head>
<body>
	<main>
		<h1>Our data powers crucial reporting and research. Here are just a few of the organizations that rely on our dataset.</h1>
		<h1 id="tally">2</h1>
		<button onclick="tally()"></button>
	</main>

</body>
</html>
<style>
	body{
		background-color: hotpink;
	}
	main 
</style>
<script>
	function tally(){
		var tal = parseFloat(document.getElementById('tally').innerHTML);
		var tall = tal+1;
		document.getElementById('tally').innerHTML = tall;
	}
</script>