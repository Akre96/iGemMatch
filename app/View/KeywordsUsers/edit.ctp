<div class="keywordsUsers form">
<?php echo $this->Form->create('KeywordsUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Keywords User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('keyword_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('KeywordsUser.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('KeywordsUser.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Keywords Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Keywords'), array('controller' => 'keywords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keyword'), array('controller' => 'keywords', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
