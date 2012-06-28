<div class="books index">
	<h2><?php echo __('Books');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_google');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('subtitulo');?></th>
			<th><?php echo $this->Paginator->sort('autores');?></th>
			<th><?php echo $this->Paginator->sort('categoria');?></th>
			<th><?php echo $this->Paginator->sort('resumen');?></th>
			<th><?php echo $this->Paginator->sort('fechapub');?></th>
			<th><?php echo $this->Paginator->sort('editorial');?></th>
			<th><?php echo $this->Paginator->sort('isbn');?></th>
			<th><?php echo $this->Paginator->sort('pags');?></th>
			<th><?php echo $this->Paginator->sort('idioma');?></th>
			<th><?php echo $this->Paginator->sort('calif_google');?></th>
			<th><?php echo $this->Paginator->sort('calif_prom');?></th>
			<th><?php echo $this->Paginator->sort('calif_cant');?></th>
			<th><?php echo $this->Paginator->sort('thumbnail');?></th>
			<th><?php echo $this->Paginator->sort('image');?></th>
			<th><?php echo $this->Paginator->sort('link_google');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($books as $book): ?>
	<tr>
		<td><?php echo h($book['Book']['id']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['id_google']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['subtitulo']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['autores']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['categoria']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['resumen']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['fechapub']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['editorial']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['isbn']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['pags']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['idioma']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['calif_google']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['calif_prom']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['calif_cant']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['thumbnail']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['image']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['link_google']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $book['Book']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $book['Book']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New R Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
