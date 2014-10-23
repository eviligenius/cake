<div class="images view">

<h2><?php echo __('Image'); ?></h2>
	<dl>
		<dt><?php echo __('Image Id'); ?></dt>
		<dd>
			<?php echo h($image['Image']['image_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Caption'); ?></dt>
		<dd>
			<?php echo h($image['Image']['image_caption']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Cover'); ?></dt>
		<dd>
			<?php if($image['Image']['image_cover']) echo $this->Html->image($image['Image']['image_cover']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Image Hosting'); ?></h3>
	<ul>


		<li><?php echo $this->Html->link(__('Home'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Upload Image'), array('action' => 'add')); ?> </li>
	</ul>
</div>
