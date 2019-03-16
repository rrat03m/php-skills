<!DOCTYPE html>
<html>
<head>
	<title>Classes</title>
</head>
<body>

	<nav>
		
		<ul>
				
			<li><a href="about">About</a></li>
			<li><a href="contact">Contact</a></li>

		</ul>

	</nav>


	<h1>My Tasks</h1>


	<ul>
		
		<?php foreach($tasks as $task) :?>

			
			<!--<li>

				<?php if ($task->completed) : ?>

					<strike>

				<?php endif; ?>



				<?= $task->description;?>



				<?php if ($task->completed) : ?>

					</strike>

				<?php endif; ?>

			</li> -->



			<li>

				<?php if($task->completed) : ?>
					

					<strike><?= $task->description;?></strike>


				<?php else: ?>


					<?= $task->description;?>


				<?php endif; ?>

			</li>			


		<?php endforeach; ?>

	</ul>



</body>
</html>