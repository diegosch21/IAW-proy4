<div class="main-container">
  <div class="container1">
  



    <article class="box" id="home_featured21">

<div class="books index">
	<h2><?php echo __('Libros');?></h2>
		<div>
			<div id="resultados">
				<?php foreach ($books as $book): ?>
	
					<div id="resultado">
						<div class="libro"> 
						<div class="info">
							<div class="resultadoTitulo"><?php echo $this->Html->link(__(h($book['Book']['titulo'])), array('action' => 'view', $book['Book']['id'])); ?></div>
							<div class="resultadoAnio"><?php echo h($book['Book']['autores']); ?></div>
						</div>		
							<img class="imagenresult" src="<?php echo h($book['Book']['thumbnail']); ?>" alt="Tapa" />
							<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $book['Book']['id'])); ?>
							<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $book['Book']['id']), null, __('Esta seguro que quiere eliminar el libro # %s?', $book['Book']['id'])); ?>
						</div>
					</div>
					
				<?php endforeach; ?>
				
			</div>
		</div>	
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
		<?php echo $this->Html->link(__('Nuevo libro'), array('action' => 'add')); ?></p>
		<?php echo $this->Html->link(__('Lista de Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </p>
		<?php echo $this->Html->link(__('Nuevo Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </p>
</div>


</div>

      <div class="clear"></div>
    </article>
    
 </div>
 
<br /><br />