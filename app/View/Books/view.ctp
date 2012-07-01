
<div class="main-container">
  <div class="container1">
  



    <article class="box" id="home_featured21">

        <div class="books view">
<div id='megusta' >
  		<fb:like href="http://www.localhost.com/IAW-proy4/books/view/<?php echo h($book['Book']['id']); ?>" send="true" layout="button_count" width="450" show_faces="false" font="verdana"></fb:like>
  	</div></p>
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

</div><br /><br />
<br />
 	<div id='comments'>
		<div class="fb-comments" data-href="http://www.localhost.com/IAW-proy4/books/view/<?php echo h($book['Book']['id']); ?>" data-num-posts="2" data-width="500"></div>
	</div>

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
							<?php
								if ($authUser) {
 									echo $this->Html->link(__('Editar'), array('action' => 'edit', $rBook['id'])); 
									echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $rBook['id']), null, __('Esta seguro que quiere eliminar el libro # %s?', $rBook['id'])); } ?>
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
<?php
if ($authUser) {
echo '<div class="actions"><h3>Administrar</h3>';


			  echo $this->Html->link(__('Editar Libro'), array('action' => 'edit', $book['Book']['id'])) .'</p>';
			  echo $this->Form->postLink(__('Eliminar Libro'), array('action' => 'delete', $book['Book']['id']), null, __('Esta seguro que quiere eliminar el libro # %s?', $book['Book']['id'])).'</p>';
			 echo $this->Html->link(__('Lista de Libros'), array('action' => 'index')).'</p>';
			 echo $this->Html->link(__('Nuevo Libro'), array('action' => 'add')).'</p>';
			 echo $this->Html->link(__('Lista de Tags'), array('controller' => 'tags', 'action' => 'index')).'</p>';
			 echo $this->Html->link(__('Nuevo Tag'), array('controller' => 'tags', 'action' => 'add')).'</p>';
			 echo $this->Html->link(__('Nuevo libro relacionado'), array('controller' => 'books', 'action' => 'add'));
echo '</div><br /><br />';
}

?>


      <div class="clear"></div>
    </article>
    
 </div>

	<div id="fb-root"></div> 
<br /><br />

<script type="text/javascript">
$(document).ready(function() {
	$('#star1').rating('../votar', {maxvalue: 5, curvalue:0, id:<?php echo h($book['Book']['id']); ?>});
});

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>