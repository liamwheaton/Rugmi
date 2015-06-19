
<div class="container flex flex-wrap">

	<?php 

		$id = $_GET['id'];
		$user = new User();
		$user->load($id); 

	?>
	
	<!-- <h1><?= $user->username ?>'s profile</h1> -->

	<?php $images = New Pictures_Collection([
			'deleted' => '0'
		]); 
	?>

		<?php foreach ($images->items as $user_image): ?>
			
			<div class="card flex flex-column">
			
				<div class="image-container">

					<img class ="image" src="assets/uploads/<?= $user_image->url ?>" alt="">

				</div>

				<p class = 'date'>posted <?= $user_image->date_posted ?> hours ago</p>	
				<div class="caption"><p><?= $user_image->caption ?></p></div>
					
				<div class="controls flex flex-j-between">
					
					<a href="" class="flat-button-grey">3 comments</a>
					<div>
						<a href="delete_image.php?id=<?= $user_image->id ?>" class="delete "><i class="fa fa-times"></i></a>
						<a href="edit_image.php?id=<?= $user_image->id ?>" class="edit"><i class="fa fa-pencil"></i></a>
					</div>
					
				</div>

			</div>
			
		<?php endforeach ?>

</div>
