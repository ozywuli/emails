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
        <a href="gallery/ink/ink.php">
          <img src="img/ink_screenshot.png" alt="">
        </a>
      </li>
      <li class="box">
        <a href="">
          <img src="http://placehold.it/350x150">
        </a>
      </li>
    </ul>


<?php require( TEMPLATES_PATH . '/footer.php' ); ?>