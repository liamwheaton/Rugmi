<div class="container">
	<div class="form-container">
		
	<?= Form::open_upload() ?>
		<h3>Upload Image</h3>

		<?= Form::label('file', 'File:') ?>
		<?= Form::file() ?>

		<?= Form::label('caption', 'Caption') ?>
		<?= Form::textarea('caption', '') ?>

		<?= Form::submit() ?>
	<?= Form::close() ?>



	</div>

</div>