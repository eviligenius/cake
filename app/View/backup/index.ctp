<div class="images index">
	<h2><?php echo __('Images'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('image_caption',__('Title')); ?></th>
			
		<th class="actions"><?php echo __(''); ?></th>
	</tr>
	<?php foreach ($images as $image): ?>
	<tr>
               <td><?php echo h($image['Image']['image_caption']) ?></td>
	
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $image['Image']['image_id'])); ?>
<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $image['Image']['image_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $image['Image']['image_id']), null, __('Are you sure you want to delete # %s?', $image['Image']['image_id'])); ?>

			</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Image Hosting'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Upload Image'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link('Admin', '/admins/login', array('class' => 'button')); ?> </li>	
</ul>
</div>
