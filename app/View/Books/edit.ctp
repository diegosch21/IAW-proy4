﻿<div class="main-container">
  <div class="container1">
  



    <article class="box" id="home_featured21">

        <div class="books view">
		<h3><?php echo __('Editar Libro'); ?></h3>
<div class="books form">
<?php echo $this->Form->create('Book');?>
	<fieldset>
		<legend><?php echo __('Edit Book'); ?></legend>
	<?php
		echo $this->Form->input('id');
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
		echo $this->Form->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<br />
<br />
<div class="actions">
	<h3><?php echo __('Administrar'); ?></h3>
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Book.id')), null, __('Esta seguro que quiere eliminar el libro # %s?', $this->Form->value('Book.id'))); ?></p>
		<?php echo $this->Html->link(__('Lista de libros'), array('action' => 'index'));?></p>
		<?php echo $this->Html->link(__('Lista de Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </p>
		<?php echo $this->Html->link(__('Nuevo Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </p>

</div>


</div>

      <div class="clear"></div>
    </article>
    
 </div>
 
<br /><br />