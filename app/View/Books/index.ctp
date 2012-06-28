<div class="main-container">
  <header>
    <h1><a href="index.html">Busca cultura</a></h1>
    <p id="tagline"><strong>Donde encontrarás tu próximo libro</strong></p>
  </header>
</div>
<div class="main-container">
  <div id="sub-headline">
    <div class="tagline_left"><p id="tagline2">Tel: 123 333 4444 | Mail: <a href="mailto:email@website.com">email@website.com</a></p></div>
    <div class="tagline_right">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Busca un libro&hellip;"   onfocus="if (this.value == 'Busca un libro&hellip;') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Busca un libro&hellip;';}" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<?php echo $this->element('menu', array('cache' => true)); ?>
<div class="main-container">
  <div class="container1">
  



    <article class="box" id="home_featured21">

<div class="books index">
	<h2><?php echo __('Libros');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('id_google');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('autores');?></th>
			<th><?php echo $this->Paginator->sort('isbn');?></th>

			<th><?php echo $this->Paginator->sort('editorial');?></th>
			<th><?php echo $this->Paginator->sort('fechapub');?></th>
			<th><?php echo $this->Paginator->sort('calif_google');?></th>
			<th><?php echo $this->Paginator->sort('calif_prom');?></th>
			<th class="actions"><?php echo __('Administrar');?></th>
	</tr>
	<?php
	foreach ($books as $book): ?>
	<tr>
		<td><?php echo h($book['Book']['id']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['id_google']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['autores']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['isbn']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['editorial']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['fechapub']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['calif_google']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['calif_prom']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $book['Book']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $book['Book']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $book['Book']['id']), null, __('Esta seguro que quiere eliminar el libro # %s?', $book['Book']['id'])); ?>
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
		<?php echo $this->Html->link(__('Nuevo libro'), array('action' => 'add')); ?></p>
		<?php echo $this->Html->link(__('Lista de Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </p>
		<?php echo $this->Html->link(__('Nuevo Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </p>
</div>


</div>

      <div class="clear"></div>
    </article>
    
 </div>
 
<br /><br />

 
 
 <footer>
    <p class="tagline_left">Copyright &copy; 2011 - All Rights Reserved - </p>
    <p class="tagline_right">Desarrollada por <a title="Pecorari & Schwindt" >Pecorari & Schwindt</a></p>
    <br class="clear" />
  </footer>

<br />
<br />


