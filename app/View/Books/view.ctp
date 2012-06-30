
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


<div class="books index">
<h3 id="lbr">Libros relacionados por google books</h3>

		<div>
			<div id="resultadosRelacionados">

				
			</div>
			<script>
var API_KEY= "AIzaSyAj8Kt71AflXd97wZWbnT2qu0GsZf-VH_8";
var BASE_URI= "https://www.googleapis.com/books/v1/";
var url=BASE_URI+'volumes?q=<?php echo h($book['Book']['autores']); ?>&key='+API_KEY;

$.ajax({
	url: url,   
	type:"GET",
	dataType: "jsonp",
	success: function( data ) {
				if(data.items[0].volumeInfo.imageLinks==undefined)
					$("#lbr").html("");
				else{
				$("#resultadosRelacionados").html("<div id='resultadoRelacionado'><div class='libro'><div class='info'><div class='resultadoTitulo'>"+data.items[0].volumeInfo.title+"</div><div class='resultadoAnio'>"+data.items[0].volumeInfo.authors[0]+"</div><img class='imagenresult' src="+data.items[0].volumeInfo.imageLinks.thumbnail+" alt='Tapa' /></div></div>");
				$("#resultadosRelacionados").append("<div id='resultadoRelacionado'><div class='libro'><div class='info'><div class='resultadoTitulo'>"+data.items[1].volumeInfo.title+"</div><div class='resultadoAnio'>"+data.items[1].volumeInfo.authors[0]+"</div><img class='imagenresult' src="+data.items[1].volumeInfo.imageLinks.thumbnail+" alt='Tapa' /></div></div>");
				$("#resultadosRelacionados").append("<div id='resultadoRelacionado'><div class='libro'><div class='info'><div class='resultadoTitulo'>"+data.items[2].volumeInfo.title+"</div><div class='resultadoAnio'>"+data.items[2].volumeInfo.authors[0]+"</div><img class='imagenresult' src="+data.items[2].volumeInfo.imageLinks.thumbnail+" alt='Tapa' /></div></div>");
				$("#resultadosRelacionados").append("<div id='resultadoRelacionado'><div class='libro'><div class='info'><div class='resultadoTitulo'>"+data.items[3].volumeInfo.title+"</div><div class='resultadoAnio'>"+data.items[3].volumeInfo.authors[0]+"</div><img class='imagenresult' src="+data.items[3].volumeInfo.imageLinks.thumbnail+" alt='Tapa' /></div></div>");
}
	}
});
</script>
		</div>
</div>
</p>




<div class="related">

	<?php if (!empty($book['RBook'])):?>
	<h3><?php echo __('Libros relacionados por Busca Cultura');?></h3>
	<div>
			<div id="resultados">
				<?php foreach ($book['RBook'] as $rBook): ?>
	
					<div id="resultado">
						<div class="libro"> 
						<div class="info">
							<div class="resultadoTitulo"><?php echo $this->Html->link(__(h($rBook['titulo'])), array('action' => 'view', $rBook['id'])); ?></div>
							<div class="resultadoAnio"><?php echo h($rBook['autores']); ?></div>
						</div>		
							<img class="imagenresult" src="<?php echo h($rBook['thumbnail']); ?>" alt="Tapa" />
							<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $rBook['id'])); ?>
							<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $rBook['id']), null, __('Esta seguro que quiere eliminar el libro # %s?', $rBook['id'])); ?>
						</div>
					</div>
					
				<?php endforeach; ?>
				
			</div>
		</div>	
	<p>
<?php endif; ?>
<br /><br />
<div class="related">

	<?php if (!empty($book['Tag'])):?>
		<h3><?php echo __('Tags relacionados');?></h3>

	<?php
		$i = 0;
		
		foreach ($book['Tag'] as $tag): ?>

				<div  id="tag"><div  style="padding-top:6px;">&nbsp;&nbsp;<?php echo $this->Html->link(__($tag['nombre']), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>&nbsp;&nbsp;</div></div>
			
	<?php endforeach; ?>

<?php endif; ?>


</div>
<p>
</div>

<div class="actions">
	<h3>Administrar</h3>


			<?php  echo $this->Html->link(__('Editar Libro'), array('action' => 'edit', $book['Book']['id'])); ?></p>
			<?php  echo $this->Form->postLink(__('Eliminar Libro'), array('action' => 'delete', $book['Book']['id']), null, __('Esta seguro que quiere eliminar el libro # %s?', $book['Book']['id']));?></p>
			<?php echo $this->Html->link(__('Lista de Libros'), array('action' => 'index'));?></p>
			<?php echo $this->Html->link(__('Nuevo Libro'), array('action' => 'add'));?></p>
			<?php echo $this->Html->link(__('Lista de Tags'), array('controller' => 'tags', 'action' => 'index'));?></p>
			<?php echo $this->Html->link(__('Nuevo Tag'), array('controller' => 'tags', 'action' => 'add'));?></p>
			<?php echo $this->Html->link(__('Nuevo libro relacionado'), array('controller' => 'books', 'action' => 'add'));?>
</div>
<br /><br />


      <div class="clear"></div>
    </article>
    
 </div>
 
<br /><br />
<script type="text/javascript">
$(document).ready(function() {
	$('#star1').rating('../votar', {maxvalue: 5, curvalue:0, id:<?php echo h($book['Book']['id']); ?>});
});
</script>