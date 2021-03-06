<?php if (validation_errors()): ?>
	<script>
		var validation_errors = <?php echo json_encode(validation_errors()); ?>;
		$.toast({
			heading: 'Login Error:',
		    text: validation_errors,
		    showHideTransition: 'fade',
		    icon: 'error',
		    position: {
		        left: 490,
		        top: 90
		    },
		    stack: false, 
		    hideAfter: 9000
		});
	</script>
<?php endif ?>
<div class="row" id="login-form">
	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-lg-4 col-lg-offset-4">
		<ul class="nav nav-tabs">
			<li role="presentation" class="active login-form-btn-li"><a href="<?php echo base_url('user/login'); ?>" class="login-form-btn">Login</a></li>
		  	<li role="presentation" class="login-form-btn-li"><a href="<?php echo base_url('user/register'); ?>" class="login-form-btn">Register</a></li>
		</ul>
		<?php $attributes = array('role' => 'form', 'class' => 'login'); echo form_open('user/login_user', $attributes); ?>	
			<div class="form-group">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<?php $attributes = array('name' => 'username', 'placeholder' => 'Enter Username', 'class' => 'form-control', 'autocomplete' => 'off'); echo form_input($attributes); ?>	
			</div>
			<div class="form-group">
				<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
				<?php $attributes = array('name' => 'password', 'placeholder' => 'Enter Password', 'class' => 'form-control', 'autocomplete' => 'off'); echo form_password($attributes); ?>	
			</div>
			<div class="row">
				<div class="col-xs-12 col-xs-offset-6 col-sm-12 col-sm-offset-7 col-md-12 col-lg-12 col-lg-offset-7">
					<?php $attributes = array('class' => 'btn btn-default', 'id' => 'btn-login', 'value' => 'Login'); echo form_submit($attributes); ?>
				</div>
			</div>	
		<?php echo form_close(); ?>
	</div>	
</div>
<script>
	var login_failed = "<?php echo $this->session->flashdata('login_failed'); ?>";
	if (login_failed) {
		$.toast({
			heading: 'Login Failed:',
		    text: login_failed,
		    showHideTransition: 'fade',
		    icon: 'error',
		    position: {
		        left: 485,
		        top: 110
		    },
		    stack: false, 
		    hideAfter: 9000
		});
	};
</script>