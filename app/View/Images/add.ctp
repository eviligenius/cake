<div class="images form">
<?php echo $this->Form->create('Image',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Upload Image'); ?></legend>
	<?php
		echo $this->Form->input('image_caption');
		echo $this->Form->input('image_cover',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Image Hosting'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Home'), array('action' => 'index')); ?></li>
	</ul>
</div>
