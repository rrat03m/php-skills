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
				
			<li>

				<strong>Name: </strong><?= $tasks['title']; ?>
					
			</li>

			<li>

				<strong>Due Date: </strong><?= $tasks['due']; ?>
					
			</li>			

			<li>

				<strong>Personal Responsible: </strong><?= $tasks['assigned_to']; ?>
					
			</li>

			<li>

				<strong>Status: </strong><?= $tasks['complete'] ? 'complete' : 'Incomplete'; ?>
					
			</li>					
		</ul>

		<ul>
			
			<?php foreach($tasks as $heading => $value) : ?>

				<li>

					<strong><?= ucwords($heading); ?>: </strong> <?= $value; ?>

				</li>

			<?php endforeach; ?>
		</ul>

</body>
</html>