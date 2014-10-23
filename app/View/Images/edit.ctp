<div class="images form">
<?php echo $this->Form->create('Image',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Image'); ?></legend>
	<?php
		echo $this->Form->input('image_id');
		echo $this->Form->input('image_caption');
		echo $this->Form->input('image_cover',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Image.image_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Image.image_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?></li>
	</ul>
</div>
