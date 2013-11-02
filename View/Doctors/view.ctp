<div class="doctors view">
<h2><?php echo __('Doctor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especialidad'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['especialidad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doctor'), array('action' => 'edit', $doctor['Doctor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doctor'), array('action' => 'delete', $doctor['Doctor']['id']), null, __('Are you sure you want to delete # %s?', $doctor['Doctor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
