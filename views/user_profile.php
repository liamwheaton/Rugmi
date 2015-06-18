<div class="container">

	<?php 

	$id = $_GET['id'];
	$user = new User();
	$user->load($id); 

	?>
	
	<h1><?= $user->username ?>'s profile</h1>

	<?php $images = New Images_Collection([
			'deleted' => '0'
		]); 
	?>
	
	<div class="flex flex-wrap space-between">

		<?php foreach ($images->items as $user_image): ?>

			<div class="image-container flex flex-column">

				<img class ="image" src="<?= $user_image->url ?>" alt="">

			</div>

				
			<div class="caption"><p><?= $user_image->caption ?></p></div>
				
			<div class="controls">

				<a href="delete_image.php?id=<?= $user_image->id ?>" class="delete">Delete</a>
				<a href="edit_image.php?id=<?= $user_image->id ?>" class="edit">Edit</a>
				
			</div>

			
			
		<?php endforeach ?>

	</div>

</div>