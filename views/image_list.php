<div class="container flex flex-wrap">
	
	<!-- Get all the uploaded images from the database & display them -->
	<?php $images = New New_Uploads_Collection(['deleted' => '0']); ?>
	<?php foreach ($images->items as $user_image): ?>


		<div class="card flex flex-column">
			
			<div class="image-container">

				<a href="single_view.php?image_id=<?= $user_image->id ?>"><img class ="image" src="assets/uploads/<?= $user_image->url ?>" alt=""></a>

			</div>

			<p class = 'date'>posted <?= $user_image->date_posted ?> hours ago</p>

			<div class="controls flex flex-j-between">
				
				<a href="" class="flat-button-grey">3 comments</a>
				
			</div>
		</div>
			
	<?php endforeach ?>
</div>