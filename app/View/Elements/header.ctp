﻿<div class="main-container">
  <header>
    <h1><a href="index.html">Busca cultura</a></h1>
    <p id="tagline"><strong>Donde encontrarás tu próximo libro</strong></p>
  </header>
</div>

<div class="main-container">
  <div id="sub-headline">
    <div class="tagline_left"><p id="tagline2">Proyecto 4 | <a href="http://cs.uns.edu.ar/~dcm/iaw">Ing. Aplicaciones Web (UNS, 2012)</a></p></div>
    <div class="tagline_right">

      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Busca un libro&hellip;"  id="query" onfocus="if (this.value == 'Busca un libro&hellip;') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Busca un libro&hellip;';}" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>

<?php echo $this->element('menu', array('cache' => true)); ?>

