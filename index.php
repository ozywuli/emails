<?php $title = 'Home' ?>

<?php
  require( 'config.php' );
  require( TEMPLATES_PATH . '/header.php' );
?>


    <ul class="boxes clearfix">
      <li class="box">
        <a href="gallery/plant_a_tree/plant.php">
          <img src="img/plant_screenshot.png" alt="">
        </a>
      </li>
      <li class="box">
        <a href="gallery/jade_city/jade_city.php">
          <img src="img/jade_city.jpg" alt="">
        </a>
      </li>
      <li class="box">
        <a href="gallery/cha/index.php">
          <img src="img/chaleafs.jpg" alt="">
        </a>
      </li>
    </ul>


<?php require( TEMPLATES_PATH . '/footer.php' ); ?>