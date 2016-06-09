<div class="container-fluid uView ">

<?php 
if (!$contacted)
{

echo $this->Form->create('User'); 
echo $this->Form->end('Intent to Contact?');

}

?>
<h2><?php echo 'Team: '.($user['User']['team']); ?></h2>
<div class="about row row-centered">
	<div class="col-xs-8 col-cenetered">
		<h3>About:</h3>
		<h4><?php echo $this->Html->link($user['Category']['name'], array('controller' => 'categories', 'action' => 'view', $user['Category']['id'])); ?> </h4> </br>
		<h4>Keywords: <?php foreach($user['Keyword'] as $keyword)
		{
			echo $this->Html->link($keyword['name'], array('controller' => 'keywords', 'action' => 'view', $keyword['id'])).'  '; 
		}
		?>&nbsp; </h4>
	</div>
</div>
		<dd>
			<?php echo $this->Html->link($user['Category']['name'], array('controller' => 'categories', 'action' => 'view', $user['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($user['User']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Keywords'); ?></h3>
	<?php if (!empty($user['Keyword'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Keyword'] as $keyword): ?>
		<tr>
			<td><?php echo $keyword['id']; ?></td>
			<td><?php echo $keyword['name']; ?></td>

		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
