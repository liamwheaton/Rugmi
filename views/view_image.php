<div class="container">

	<div class="single-image-container card">
		<?php $images = new Pictures_Collection(['id' => $image_id, 'deleted' => '0']); ?>
			<ul>
				<? foreach($images->items as $image): ?>
					<li>

						<img src="<?= 'assets/uploads/'.$image->url ?>	" alt="">
		
					</li>
				<? endforeach; ?>
			</ul>
	</div>


	<div class="comments-{container card">
		<h3>Comments</h3>
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
	
		<?= Form::open("add_comment.php?image_id=".$image_id, 'post', ['class' => 'pure-form pure-form-stacked comment-form']) ?>

			<div class="row">
				<?= Form::label('content', 'New Comment') ?>
				<?= Form::textarea('content') ?>
			</div>

			<?= Form::submit('Submit', ['class' => 'pure-button button-submit']) ?>
		<?= Form::close() ?>


</div>

