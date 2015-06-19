<div class="container">
	<div class="card single-view-image flex flex-column">
		<div class="single-image-container">
			<?php $images = new Pictures_Collection(['id' => $image_id, 'deleted' => '0']); ?>

			<? foreach($images->items as $image): ?>
				<img src="<?= 'assets/uploads/'.$image->url ?>	" alt="">
					
		</div>

		<div class="caption">
			<p><strong><?= $image->caption ?></strong></p>
			<p><?= $image->date ?></p>
		</div>
		<? endforeach; ?>
	</div>

	<?php $comments = new Comments_Collection(['image_id' => $image_id, 'deleted' => '0']); ?>

		
	<? foreach($comments->items as $comment): ?>
		<? $user = new User(); ?>
		<? $user->load($comment->user_id); ?>
		<div class="comments-container card">
			<p><strong><?= $user->username; ?></strong></p>
			<p><?= $comment->content; ?></p>
			<p class="date"><?= $comment->date; ?></p>
		</div>
							
	<? endforeach; ?>


	<?= Form::open("add_comment.php?image_id=".$image_id, 'post', ['class' => 'pure-form pure-form-stacked comment-form']) ?>

		<div class="row">
			<?= Form::textarea('content', '', ['placeholder' => 'add a new comment']) ?>
		</div>

		<?= Form::submit('Submit', ['class' => 'pure-button button-submit']) ?>
	<?= Form::close() ?>
</div>

