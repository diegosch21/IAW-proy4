<script type="text/javascript">
$(document).ready(function() {
	$('#star1').rating('../votar', {maxvalue: 5, curvalue:0, id:<?php echo h($book['Book']['id']); ?>});
});
</script>
<div class="main-container">
  <div class="container1">
  



    <article class="box" id="home_featured21">

        <div class="books view">
<div style="float:right; width:23%;"><img src="<?php echo h($book['Book']['thumbnail']); ?>" alt="<?php echo h($book['Book']['titulo']); ?>"title="<?php echo h($book['Book']['titulo']); ?>"></img></div>
<div style="float:left; width:77%;"><h2><?php echo h($book['Book']['titulo']); ?>
<h5><?php echo h($book['Book']['subtitulo']); ?></h5><a><?php echo h($book['Book']['autores']); ?></a>
</div>
<div style="float:right;height:10px!important;" id="star1" class="rating">&nbsp;</div></h2>

<h5>&nbsp;</h5>
<div><span><b>Género: </b><?php echo h($book['Book']['categoria']); ?></span></div>
<div style="width:70%;"><h2></h2><span><b>Resumen: </b><?php echo h($book['Book']['resumen']); ?></span></div>
<p><b>Calificación google: </b><?php echo h($book['Book']['calif_google']); ?></p>
<p><b>Calificación promedio: </b><?php echo h($book['Book']['calif_prom']); ?></p>
<p><b>Link GoogleBooks: </b><a href="<?php echo h($book['Book']['link_google']); ?>"><?php echo h($book['Book']['link_google']); ?></a></p>
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


			<?php  echo $this->Html->link(__('Editar Libro'), array('action' => 'edit', $book['Book']['id'])); ?></p>
			<?php  echo $this->Form->postLink(__('Eliminar Libro'), array('action' => 'delete', $book['Book']['id']), null, __('Esta seguro que quiere eliminar el libro # %s?', $book['Book']['id']));?></p>
			<?php echo $this->Html->link(__('Lista de Libros'), array('action' => 'index'));?></p>
			<?php echo $this->Html->link(__('Nuevo Libro'), array('action' => 'add'));?></p>
			<?php echo $this->Html->link(__('Lista de Tags'), array('controller' => 'tags', 'action' => 'index'));?></p>
			<?php echo $this->Html->link(__('Nuevo Tag'), array('controller' => 'tags', 'action' => 'add'));?></p>
			
</div>
<div class="related">
	<h3><?php echo __('Related Books');?></h3>
	<?php if (!empty($book['RBook'])):?>
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
		foreach ($book['RBook'] as $rBook): ?>
		<tr>
			<td><?php echo $rBook['id'];?></td>
			<td><?php echo $rBook['id_google'];?></td>
			<td><?php echo $rBook['titulo'];?></td>
			<td><?php echo $rBook['subtitulo'];?></td>
			<td><?php echo $rBook['autores'];?></td>
			<td><?php echo $rBook['categoria'];?></td>
			<td><?php echo $rBook['resumen'];?></td>
			<td><?php echo $rBook['fechapub'];?></td>
			<td><?php echo $rBook['editorial'];?></td>
			<td><?php echo $rBook['isbn'];?></td>
			<td><?php echo $rBook['pags'];?></td>
			<td><?php echo $rBook['idioma'];?></td>
			<td><?php echo $rBook['calif_google'];?></td>
			<td><?php echo $rBook['calif_prom'];?></td>
			<td><?php echo $rBook['calif_cant'];?></td>
			<td><?php echo $rBook['thumbnail'];?></td>
			<td><?php echo $rBook['image'];?></td>
			<td><?php echo $rBook['link_google'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'books', 'action' => 'view', $rBook['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'books', 'action' => 'edit', $rBook['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'books', 'action' => 'delete', $rBook['id']), null, __('Are you sure you want to delete # %s?', $rBook['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New R Book'), array('controller' => 'books', 'action' => 'add'));?> </li>
		</ul>
	</div>
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

      <div class="clear"></div>
    </article>
    
 </div>
 
<br /><br />