<div class="appointments view">
<h2><?php echo __('Appointment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['paciente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especialista'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['especialista']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['place']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Appointment'), array('action' => 'edit', $appointment['Appointment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Appointment'), array('action' => 'delete', $appointment['Appointment']['id']), null, __('Are you sure you want to delete # %s?', $appointment['Appointment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('action' => 'add')); ?> </li>
	</ul>
</div>
