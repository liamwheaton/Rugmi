<div class="container">

	<?php $id = $_GET['id']; ?>

	<?php $user = new User(); ?>

	<?php $user->load($id); ?>
	
	<h1>User profile</h1>

	<?php $images = New Images_Collection([
			'deleted' => '0'
		]); 
	?>
	
	<div class="flex flex-wrap space-between">

		<?php foreach ($images->items as $user_image): ?>

			<div class="image_container flex flex-column">

				<img class ="image" src="../public/assets/uploads/test.jpg" alt="">
				
				<div class="caption"><p><?= $user_image->caption ?></p></div>
				
				<div class="controls">

					<a href="delete_image.php?id=<?= $user_image->id ?>" class="delete">Delete</a>
					<a href="edit_image.php?id=<?= $user_image->id ?>" class="edit">Edit</a>
					
				</div>

			</div>
			
		<?php endforeach ?>

	</div>

</div>