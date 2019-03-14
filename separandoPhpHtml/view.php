<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style type="text/css">
		header{
			padding: 2em;
			background-color: #e3e3e3;
			text-align: center;
		}
	</style>
</head>
<body>


		<ul>
			<?php foreach($nomes as $name) : ?>

				<li><?= $name ?></li>

			<?php endforeach ?>
		</ul>


</body>
</html>