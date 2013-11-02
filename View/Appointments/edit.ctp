<div class="appointments form">
<?php echo $this->Form->create('Appointment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Appointment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('paciente');
		echo $this->Form->input('especialista');
		echo $this->Form->input('fecha');
		echo $this->Form->input('place');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Appointment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Appointment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?></li>
	</ul>
</div>
