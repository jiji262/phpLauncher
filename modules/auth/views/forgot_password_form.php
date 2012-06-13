
<div class="row">
	<div class="span10">

		<?php
		$login = array(
				'name'	=> 'login',
				'id'	=> 'login',
				'value' => set_value('login'),
				'maxlength'	=> 80,
				'size'	=> 30,
		);
		if ($this->config->item('use_username', 'tank_auth')) {
			$login_label = '用户名/邮箱';
		} else {
			$login_label = '邮箱';
		}
		?>
		<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table">
			<tr>
				<td><?php echo form_label($login_label, $login['id']); ?></td>
				<td><?php echo form_input($login); ?></td>
				<td style="color: red;"><?php echo form_error($login['name']); ?> <?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><?php echo form_submit('reset', '设置新密码'); ?></td>
				<td></td>
			</tr>
		</table>
		<?php echo form_close(); ?>

	</div>
</div>
