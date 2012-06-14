<div class="books view">
<h2><?php  echo __('Book');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Google'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id_google']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($book['Book']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtitulo'); ?></dt>
		<dd>
			<?php echo h($book['Book']['subtitulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autores'); ?></dt>
		<dd>
			<?php echo h($book['Book']['autores']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($book['Book']['categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resumen'); ?></dt>
		<dd>
			<?php echo h($book['Book']['resumen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechapub'); ?></dt>
		<dd>
			<?php echo h($book['Book']['fechapub']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Editorial'); ?></dt>
		<dd>
			<?php echo h($book['Book']['editorial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isbn'); ?></dt>
		<dd>
			<?php echo h($book['Book']['isbn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pags'); ?></dt>
		<dd>
			<?php echo h($book['Book']['pags']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idioma'); ?></dt>
		<dd>
			<?php echo h($book['Book']['idioma']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calif Google'); ?></dt>
		<dd>
			<?php echo h($book['Book']['calif_google']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calif Prom'); ?></dt>
		<dd>
			<?php echo h($book['Book']['calif_prom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calif Cant'); ?></dt>
		<dd>
			<?php echo h($book['Book']['calif_cant']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail'); ?></dt>
		<dd>
			<?php echo h($book['Book']['thumbnail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($book['Book']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Google'); ?></dt>
		<dd>
			<?php echo h($book['Book']['link_google']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tags');?></h3>
	<?php if (!empty($book['Tag'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($book['Tag'] as $tag): ?>
		<tr>
			<td><?php echo $tag['id'];?></td>
			<td><?php echo $tag['nombre'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $tag['id']), null, __('Are you sure you want to delete # %s?', $tag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
