<div class="tags view">
<h2><?php  echo __('Tag');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tag'), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tag'), array('action' => 'delete', $tag['Tag']['id']), null, __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Books');?></h3>
	<?php if (!empty($tag['Book'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Id Google'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Subtitulo'); ?></th>
		<th><?php echo __('Autores'); ?></th>
		<th><?php echo __('Categoria'); ?></th>
		<th><?php echo __('Resumen'); ?></th>
		<th><?php echo __('Fechapub'); ?></th>
		<th><?php echo __('Editorial'); ?></th>
		<th><?php echo __('Isbn'); ?></th>
		<th><?php echo __('Pags'); ?></th>
		<th><?php echo __('Idioma'); ?></th>
		<th><?php echo __('Calif Google'); ?></th>
		<th><?php echo __('Calif Prom'); ?></th>
		<th><?php echo __('Calif Cant'); ?></th>
		<th><?php echo __('Thumbnail'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Link Google'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tag['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id'];?></td>
			<td><?php echo $book['id_google'];?></td>
			<td><?php echo $book['titulo'];?></td>
			<td><?php echo $book['subtitulo'];?></td>
			<td><?php echo $book['autores'];?></td>
			<td><?php echo $book['categoria'];?></td>
			<td><?php echo $book['resumen'];?></td>
			<td><?php echo $book['fechapub'];?></td>
			<td><?php echo $book['editorial'];?></td>
			<td><?php echo $book['isbn'];?></td>
			<td><?php echo $book['pags'];?></td>
			<td><?php echo $book['idioma'];?></td>
			<td><?php echo $book['calif_google'];?></td>
			<td><?php echo $book['calif_prom'];?></td>
			<td><?php echo $book['calif_cant'];?></td>
			<td><?php echo $book['thumbnail'];?></td>
			<td><?php echo $book['image'];?></td>
			<td><?php echo $book['link_google'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'books', 'action' => 'delete', $book['id']), null, __('Are you sure you want to delete # %s?', $book['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
