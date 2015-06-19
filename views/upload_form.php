<div class="container">
	<div class="form-container">
		
	<?= Form::open_upload('post',['class' => 'pure-form pure-form-stacked']) ?>
		<h3>Upload Image</h3>

		<?= Form::label('file', 'File:') ?>
		<?= Form::file() ?>

		<?= Form::label('caption', 'Caption') ?>
		<?= Form::textarea('caption', '') ?>

		<?= Form::submit('Submit', ['class' => 'pure-button button-submit']) ?>
	<?= Form::close() ?>



	</div>

</div>