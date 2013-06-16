<div class="sites form">
<?php echo $this->Form->create('Site'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Site'); ?></legend>
	<?php
		echo $this->Form->input('tableId');
		echo $this->Form->input('Location');
		echo $this->Form->input('SiteName');
		echo $this->Form->input('SiteType');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Site.tableId')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Site.tableId'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('action' => 'index')); ?></li>
	</ul>
</div>
