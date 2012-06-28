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

	<div class="tags view">
<h2><?php  echo __('Tag');?></h2>

		<b><?php echo __('Id: '); ?></b>

			<?php echo h($tag['Tag']['id']); ?>
			&nbsp;</p>
		
		<b><?php echo __('Nombre: '); ?></b>

			<?php echo h($tag['Tag']['nombre']); ?>
			&nbsp;</p>

</div>
<br /><br />
<div class="actions">
	<h3><?php echo __('Administrar'); ?></h3>
		<?php echo $this->Html->link(__('Editar Tag'), array('action' => 'edit', $tag['Tag']['id'])); ?> </p>
		<?php echo $this->Form->postLink(__('Eliminar Tag'), array('action' => 'delete', $tag['Tag']['id']), null, __('Esta seguro que quiere eliminar el tag # %s?', $tag['Tag']['id'])); ?> </p>
		<?php echo $this->Html->link(__('Lista de Tags'), array('action' => 'index')); ?> </p>
		<?php echo $this->Html->link(__('Nuevo Tag'), array('action' => 'add')); ?> </p>
		<?php echo $this->Html->link(__('Lista de Libros'), array('controller' => 'books', 'action' => 'index')); ?> </p>
		<?php echo $this->Html->link(__('Nuevo Libro'), array('controller' => 'books', 'action' => 'add')); ?> </p>
</div><br />
<div class="related">
	<h6><?php echo __('Libros Relacionados');?></h6>
	<?php if (!empty($tag['Book'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Id Google'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Autores'); ?></th>
		<th><?php echo __('Categoria'); ?></th>
		<th><?php echo __('Fechapub'); ?></th>
		<th><?php echo __('Editorial'); ?></th>
		<th><?php echo __('Isbn'); ?></th>
		<th><?php echo __('Idioma'); ?></th>
		<th><?php echo __('Calif Google'); ?></th>
		<th><?php echo __('Calif Prom'); ?></th>
		<th><?php echo __('Calif Cant'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tag['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id'];?></td>
			<td><?php echo $book['id_google'];?></td>
			<td><?php echo $book['titulo'];?></td>
			<td><?php echo $book['autores'];?></td>
			<td><?php echo $book['categoria'];?></td>
			<td><?php echo $book['fechapub'];?></td>
			<td><?php echo $book['editorial'];?></td>
			<td><?php echo $book['isbn'];?></td>
			<td><?php echo $book['idioma'];?></td>
			<td><?php echo $book['calif_google'];?></td>
			<td><?php echo $book['calif_prom'];?></td>
			<td><?php echo $book['calif_cant'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'books', 'action' => 'delete', $book['id']), null, __('Esta seguro que quiere eliminar el libro # %s?', $book['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
	
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






