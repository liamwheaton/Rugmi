<div class="container">

	<div class="form-container">
		<h1>Sign Up</h1>
		<?= Form::open() ?>
			<div class="form-row">
				<?= Form::label('username', 'Username') ?>
				<?= Form::text('username') ?>
			</div>
			<div class="form-row">
				<?= Form::label('email', 'Email') ?>
				<?= Form::text('email') ?>
			</div>
			<div class="form-row">
				<?= Form::label('password', 'Password') ?>
				<?= Form::text('password') ?>
			</div>
			<div class="form-row">
				<?= Form::submit('Sign Up') ?>
			</div>
		<?= Form::close() ?>
	</div>
</div>