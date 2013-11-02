<div class="appointments index">
	<h2><?php echo __('Appointments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>id</th>
			<th>paciente</th>
			<th>especialista</th>
			<th>fecha</th>
			<th>place</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($appointments as $appointment): ?>
	<tr>
		<td><?php echo h($appointment['Appointment']['id']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['paciente']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['especialista']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['place']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $appointment['Appointment']['id']), null, __('Are you sure you want to delete # %s?', $appointment['Appointment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Appointment'), array('action' => 'add')); ?></li>
	</ul>
</div>
