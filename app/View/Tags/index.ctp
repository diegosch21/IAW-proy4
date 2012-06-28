<div class="main-container">
  <div class="container1">
  



    <article class="box" id="home_featured21">

<div class="tags index">
	<h2><?php echo __('Tags');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th class="actions"><?php echo __('Administrar');?></th>
	</tr>
	<?php
	foreach ($tags as $tag): ?>
	<tr>
		<td><?php echo h($tag['Tag']['id']); ?>&nbsp;</td>
		<td><?php echo h($tag['Tag']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tag['Tag']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tag['Tag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $tag['Tag']['id']), null, __('Esta seguro que quiere eliminar el tag # %s?', $tag['Tag']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} resultados de {:count}, empezando por el resultado {:start} hasta el {:end}.')
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
<br /><br />
<div class="actions">
	<h3><?php echo __('Administrar'); ?></h3>
		<?php echo $this->Html->link(__('Nuevo Tag'), array('action' => 'add')); ?></p>
		<?php echo $this->Html->link(__('Lista de Libros'), array('controller' => 'books', 'action' => 'index')); ?> </p>
		<?php echo $this->Html->link(__('Nuevo Libro'), array('controller' => 'books', 'action' => 'add')); ?> </p>
</div>


</div>

      <div class="clear"></div>
    </article>
    
 </div>
 
<br /><br />