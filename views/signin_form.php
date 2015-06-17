<div class="container">
	<div class="form-container">

	<?= Form::open('','post', ['class' => 'pure-form pure-form-stacked']) ?>

		<legend><h3>SIGN IN</h3></legend>
		<div class="form-row">
			<?= Form::label('username', 'Username') ?>
			<?= Form::text('username') ?>
		</div>
		<div class="form-row">
			<?= Form::label('password', 'Password') ?>
			<?= Form::password('password') ?>
		</div>
		<div class="form-row">
			<?= Form::submit('Submit', ['class' => 'pure-button button-submit']) ?>
		</div>

	<?= Form::close() ?>
	</div>
</div>