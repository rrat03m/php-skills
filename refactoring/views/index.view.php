<!DOCTYPE html>
<html>
<head>
	<title>Classes</title>
</head>
<body>



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