<div class="container flex flex-wrap">
	
	<!-- Get all the uploaded images from the database & display them -->
	<?php $images = New Images_Collection(['deleted' => '0']); ?>
	<?php foreach ($images->items as $user_image): ?>

		<div class="image-container">

			<a href="single_view.php?image_id=<?= $user_image->id ?>"><img class ="image" src="assets/uploads/<?= $user_image->url ?>" alt=""></a>

		</div>
			
	<?php endforeach ?>
</div>