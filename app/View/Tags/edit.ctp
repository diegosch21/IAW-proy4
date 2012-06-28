<div class="main-container">
  <div class="container1">
  



    <article class="box" id="home_featured21">
<h3><?php echo __('Editar Tag'); ?></h3>
<div class="tags form">
<?php echo $this->Form->create('Tag');?>
	<fieldset>
		<legend><?php echo __('Edit Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('Book');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<br /><br />

<div class="actions">
	<h3><?php echo __('Administrar'); ?></h3>

		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Tag.id')), null, __('Esta seguro que quiere eliminar el tag # %s?', $this->Form->value('Tag.id'))); ?></p>
		<?php echo $this->Html->link(__('Lista de Tags'), array('action' => 'index'));?></p>
		<?php echo $this->Html->link(__('Lista de Libros'), array('controller' => 'books', 'action' => 'index')); ?> </p>
		<?php echo $this->Html->link(__('Nuevo Libro'), array('controller' => 'books', 'action' => 'add')); ?> </p>

</div>



</div>

      <div class="clear"></div>
    </article>
    
 </div>
 
<br /><br />
