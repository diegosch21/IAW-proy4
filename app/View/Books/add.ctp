<div class="books form">
<?php echo $this->Form->create('Book');?>
	<fieldset>
		<legend><?php echo __('Add Book'); ?></legend>
	<?php
		echo $this->Form->input('id_google');
		echo $this->Form->input('titulo');
		echo $this->Form->input('subtitulo');
		echo $this->Form->input('autores');
		echo $this->Form->input('categoria');
		echo $this->Form->input('resumen');
		echo $this->Form->input('fechapub');
		echo $this->Form->input('editorial');
		echo $this->Form->input('isbn');
		echo $this->Form->input('pags');
		echo $this->Form->input('idioma');
		echo $this->Form->input('calif_google');
		echo $this->Form->input('calif_prom');
		echo $this->Form->input('calif_cant');
		echo $this->Form->input('thumbnail');
		echo $this->Form->input('image');
		echo $this->Form->input('link_google');
		echo $this->Form->input('RBook');
		echo $this->Form->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New R Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
