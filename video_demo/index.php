<?php 
	session_start();
?>

<html>
<head>
	<title>AJAX is kewl</title>
	<script type="text/javascript" src = 'http://code.jquery.com/jquery-1.10.2.min.js'></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('form').submit(function(){
				//this will handle form data, but not the actual form
				//scraping function
				$.post($(this).attr('action'),$(this).serialize(), function(data){
					$('#names').append(data.name +" was here! <br> and s/he ate " + data.food + "<br>");
					console.log(data);
				}, 'json');
				return false;
			})
		})
	</script>
</head>
<body>
	<form action="process.php" method='post'>
		<input type="text" name='name' placeholder='name'>
		<input type="text" name='food' placeholder='food'>
		<input type="submit" value="say your name">
	</form>

	<div id='names'>
		<h3>Names will go here</h3>
<!-- used to have a foreach loop here -->
	</div>

</body>
</html>