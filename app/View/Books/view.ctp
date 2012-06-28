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

        <div class="books view">
<div style="float:right"><img src="<?php echo h($book['Book']['thumbnail']); ?>" alt="<?php echo h($book['Book']['titulo']); ?>"title="<?php echo h($book['Book']['titulo']); ?>"></img></div>
<h2><?php echo h($book['Book']['titulo']); ?></h2>
<h5><?php echo h($book['Book']['subtitulo']); ?></h5>
<a><?php echo h($book['Book']['autores']); ?></a>
<h2></h2><span><b>Género: </b><?php echo h($book['Book']['categoria']); ?></span>
<h2></h2><span><b>Resumen: </b><?php echo h($book['Book']['resumen']); ?></span>
<p><b>Calificación google: </b><?php echo h($book['Book']['calif_google']); ?></p>
<p><b>Calificación promedio: </b><?php echo h($book['Book']['calif_prom']); ?></p>
<p><b>Fecha publicación: </b><?php echo h($book['Book']['fechapub']); ?></p>
<p><b>Editorial: </b><?php echo h($book['Book']['editorial']); ?></p>
<p><b>Tags relacionados: </b> 	<?php if (!empty($book['Tag'])):
		$i = 0;
		foreach ($book['Tag'] as $tag): ?>
			<?php echo $tag['nombre'];?>		
	<?php endforeach; ?>

<?php endif; ?> </p>	<br />
<p>ISBN: <?php echo h($book['Book']['isbn']); ?></p>
<p><?php echo h($book['Book']['pags']); ?> páginas</p>
<p>Idioma: <?php echo h($book['Book']['idioma']); ?></p>

</div><br />
<br />
<div class="actions">
	<h3>Administrar</h3>


			<?php  echo $this->Html->link(__('Editar Libro'), array('class'=>'more','action' => 'edit', $book['Book']['id'])); ?></p>
			<?php  echo $this->Form->postLink(__('Eliminar Libro'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id']));?></p>
			<?php echo $this->Html->link(__('Lista de Libros'), array('action' => 'index'));?></p>
			<?php echo $this->Html->link(__('Nuevo Libro'), array('action' => 'add'));?></p>
			<?php echo $this->Html->link(__('Lista de Tags'), array('controller' => 'tags', 'action' => 'index'));?></p>
			<?php echo $this->Html->link(__('Nuevo Tag'), array('controller' => 'tags', 'action' => 'add'));?></p>
			
</div>
<div class="related">
	<h6>Tags relacionados</h6>
	<?php if (!empty($book['Tag'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($book['Tag'] as $tag): ?>
		<tr>
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


