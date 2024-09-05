<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Principal</title>
	<link rel="stylesheet" type="text/css" href="./style/main.css" />
	<script href="https://releases.jquery.com/git/jquery-git.js"></script>
	<script href="main.js"></script>
</head>

<body>
	<img src="./images/umPonto.png" width="70px" height="60px" class="spamado">
	<div id="container">
		<?php
		
			include_once("./menu.php");

		?>
		<div id="content">
			<div id="imgContext">
				<img src="./images/fotinha.png" width="200px" height="200px" style="border: 2px solid black">
			</div>
			<div id="alunoContext">
				<div id="alunoPivot">
				<h1>Carlos Augusto Lopes Ramos</h1>
				<h2>24202942</h2>
				<p>Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. 
					Nam non sollicitudin ligula, 
					eu gravida sapien. Etiam finibus augue sit amet ullamcorper euismod. 
					Pellentesque neque sem, euismod eu ex ac, accumsan rhoncus ex. 
					Cras nec vestibulum velit, a faucibus nulla. Vestibulum ex dui, bibendum nec leo ac, 
					mollis placerat velit.</p>
					</div>
			</div>
		</div>
	</div>
</body>

</html>