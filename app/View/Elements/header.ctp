<div class="main-container">
  <header>
    <h1><a href="index.html">Busca cultura</a></h1>
    <p id="tagline"><strong>Donde encontrarás tu próximo libro</strong></p>
  </header>
</div>

<div class="main-container">

  <div id="sub-headline">
    <div class="tagline_left"><p id="tagline2">Proyecto 4 <br/> <a href="http://cs.uns.edu.ar/~dcm/iaw">Ing. Aplicaciones Web (UNS, 2012)</a></p></div>
    <div class="tagline_right" >
		<fieldset>
	<?php echo $this->Form->create('Book', array('action' => 'search'));
	
		echo $this->Form->input('query', array('class' => 'search', 'type' => 'text', 'value' => 'Busca un libro...', 'label' => false, 'onfocus' =>'if (this.value == "Busca un libro...") {this.value = "";}', 'onblur'=>'if (this.value == "") {this.value = "Busca un libro...";}'));
		echo $this->Form->end(__('Buscar'), array('class' => 'submit'));?>
</fieldset>


    </div>
    <div class="tagline_center" align="center">
	
      <?php
      	if ($authUser)
			{
				echo '<p id="tagline3" style="padding:10px 10px 10px 10px;">'	;
			    	echo "Bienvenido Admin | ";
			    echo $this->Html->link('Logout','/users/logout');
				echo '  </p>';
			}
      ?>
    </div>
    <br class="clear" />
  </div>
</div>

<?php echo $this->element('menu', array('cache' => true)); 

?>

