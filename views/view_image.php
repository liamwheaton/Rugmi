<div class="container">
	<div class="image-container">
	
		<?php $images = new Images_Collection([
					'id' => $image_id,
					'deleted' => '0'
				]); ?>

					<ul>
						<? foreach($images->items as $image): ?>
							<li>

								<img src="<?= 'assets/uploads/'.$image->url ?>	" alt="">
				
							</li>
						<? endforeach; ?>
					</ul>

	</div>

	<div class="">

		<?php $comments = new Comments_Collection([
					'image_id' => $image_id,
					'deleted' => '0'
				]); ?>

					<ul>
						<? foreach($comments->items as $comment): ?>
							<li>
								<?= $comment->content; ?>				
							</li>
						<? endforeach; ?>
					</ul>
	</div>

	<div class="">

		<?= Form::open("add_comment.php?image_id=".$image_id) ?>

			<div class="row">
				<?= Form::label('content', 'New Comment') ?>
				<?= Form::textarea('content') ?>
			</div>

			<?= Form::submit() ?>
		<?= Form::close() ?>

	</div>

	



</div>

