<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("books", "0");

      function initialize() {
        var viewer = new google.books.DefaultViewer(document.getElementById('viewerCanvas'));
        viewer.load('ISBN:0738531367');
      }

      google.setOnLoadCallback(initialize);
    </script>

<div class="main-container">
  <div class="container1">
<h1>README</h1>
    
 </div>
 
<div class="callout"> 
    <div class="calloutcontainer"> 
        <div class="container_12"> 
            <div class="grid"> 
                <ul id="list">
                	<li># Login para administraci&oacute;n (se accede con el link en la homepage): user <b>admin</b>, pass <b>admin</b></li>
                	<li># Debido a falta de tiempo, no terminamos de ajustar varios detalles est&eacute;ticos de la p&aacute;gina, y algunos agregados (como el slider de la p&aacute;gina principal) quedaron con contenido est&aacute;tico</li>
                	<li># El diseño gr&aacute;fico fue facilitado por un <b>template HTML5</b> descargado de internet</li>
                	<li># <b>Web service: Google Books.</b> Lo utilizamos para obtener libros relacionados en cada vista de libro (los 4 primeros resultados con el mismo autor); y para autocompletar el formulario de agregado o edici&oacute;n de un libro. Presionando repetidas veces en Autocompletar se cargan distinta informaci&oacute;n de libros.</li>
                	<li># <b>B&uacute;squeda:</b> las palabras ingresadas en el campo de b&uacute;squeda se buscan como t&iacute;tulo, subt&iacute;tulos, autores, y categor&iacute;a de los libros presentes en la base de datos</li>
                	<li># <b></b>Tags:</B> Al hacer click en el tag de un libro, se puede ver la lista de libros con ese tag (la vista no se alcanz&oacute; a mejorarla) </li>
                	<li># <b>Administraci&oacute;n:</b> mediante el m&oacute;dulo de autenticaci&oacute;n de CakePHP, s&oacute;lo se puede agregar, editar o eliminar libros o tags estando logueado.</li>
                </ul>
            </div> 
            <div class="clear"></div> 
        </div> 
        <div class="calloutoverlay"></div> 
        <div class="calloutoverlaybottom"></div> 
    </div> 
</div> 
<br /><br />
<div class="callout"> 
    <div class="calloutcontainer"> 
        <div class="container_12"> 
            <div class="grid"> 
                <div class="alignleft">
                    <h3>Previsualizaci&oacute;n de libros</h3> 
                    <h4>Aqu&iacute; un ejemplo:</h4>
                    <h5>(se presenta en los libros cuyo id_google posee previsualizaci&oacute;n)</h5>
                </div> 
        <div id="viewerCanvas" style="width: 600px; height: 400px"></div>
            </div> 
            <div class="clear"></div> 
        </div> 
        <div class="calloutoverlay"></div> 
        <div class="calloutoverlaybottom"></div> 
    </div> 
</div>
</div>  