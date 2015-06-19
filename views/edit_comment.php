<div class="container">

	<div class="image-container">
	
		<?php $images = new Picture([
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

		<?= Form::open("add_comment.php?image_id=".$image_id) ?>

			<div class="row">
				<?= Form::label('content', 'New Comment') ?>
				<?= Form::textarea('content' $comment->content) ?>
			</div>

			<?= Form::submit() ?>
		<?= Form::close() ?>

	</div>

</div
