<div class="container">
	<div class="panel" id="form-signin">
		<h2 class="text-center">Login to you account</h2>
		<?= $this->Form->create(); ?>

		<div class="form-group input-group">
			<span class="input-group-addon" title="Username"><i class="glyphicon glyphicon-user"></i></span>
			<?= $this->Form->input('email', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Username')); ?>
		</div>

		<div class="form-group input-group">
			<span class="input-group-addon" title="Password"><i class="glyphicon glyphicon-lock"></i></span>
			<?= $this->Form->input('password', array('type' => 'password', 'label' => false, 'class' => 'form-control', 'placeholder' => 'Password')); ?>
		</div>
		<?= $this->Form->submit('Login', array('class' => 'btn btn-lg btn-default btn-block')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>
