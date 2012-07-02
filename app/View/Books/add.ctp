<div class="main-container">
  <div class="container1">
  
<input type='text' id='book_title' role='textbox' ></input>
<input value='Autocompletar' type='submit' name='go' id='buttonCompletar'></input>
                            



    <article class="box" id="home_featured21">

<div class="books form">
<h3><?php echo __('Agregar Libro'); ?></h3>
<?php echo $this->Form->create('Book');?>
	<fieldset>
		<legend><?php echo __('Add Book'); ?></legend>
	<?php
		echo $this->Form->input('id_google',array('type' => 'text','label'=>'ID Google Books: '));
		echo $this->Form->input('titulo',array('type' => 'text', 'label'=>'Titulo: '));
		echo $this->Form->input('subtitulo',array('type' => 'text', 'label'=>'Subtitulo: '));
		echo $this->Form->input('autores',array('type' => 'text', 'label'=>'Autor(es): '));
		echo $this->Form->input('categoria',array('type' => 'text', 'label'=>'Categoria: '));
		echo $this->Form->input('resumen',array('type' => 'textarea', 'label'=>'Resumen: '));
		echo $this->Form->input('fechapub',array('type' => 'text', 'label'=>'Fecha de publicación: '));
		echo $this->Form->input('editorial',array('type' => 'text', 'label'=>'Editorial: '));
		echo $this->Form->input('isbn',array('type' => 'text', 'label'=>'ISBN: '));
		echo $this->Form->input('pags',array('label'=>'Cant. de páginas: '));
		echo $this->Form->input('idioma',array('type' => 'text', 'label'=>'Idioma: '));
		echo $this->Form->input('calif_google',array('type' => 'text', 'label'=>'Calficación Google Books: '));
		echo $this->Form->input('calif_prom',array('type' => 'text', 'label'=>'Rating Busca Cultura: '));
		echo $this->Form->input('calif_cant',array('type' => 'text', 'label'=>'Cantidad de ratings: '));
		echo $this->Form->input('thumbnail',array('type' => 'text', 'label'=>'URL thumbnail: '));
		echo $this->Form->input('image',array('type' => 'text', 'label'=>'URL imagen: '));
		echo $this->Form->input('link_google',array('type' => 'text', 'label'=>'URL GoogleBooks: '));
		echo $this->Form->input('RBook',array('label'=>'Libros relacionados: '));
		echo $this->Form->input('Tag',array('label'=>'Tags: '));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<br />
<br />
<div class="actions">
	<h3><?php echo __('Administrar'); ?></h3>
		<?php echo $this->Html->link(__('Lista de Libros'), array('action' => 'index'));?></p>
		<?php echo $this->Html->link(__('Lista de Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </p>
		<?php echo $this->Html->link(__('Nuevo Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </p>

</div>

</div>

      <div class="clear"></div>
    </article>
    
 </div>
 
<br /><br />