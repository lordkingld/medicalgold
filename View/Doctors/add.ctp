<div class="doctors form">
<?php echo $this->Form->create('Doctor'); ?>
	<fieldset>
		<legend><?php echo __('Add Doctor'); ?></legend>
	<?php
		echo $this->Form->input('cedula');
		echo $this->Form->input('name');
		echo $this->Form->input('especialidad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Doctors'), array('action' => 'index')); ?></li>
	</ul>
</div>
