<?php $title = 'Gallery' ?>

<?php
  require( '../../config.php' );
  require( TEMPLATES_PATH . '/header.php' );
?>

<div class="email-container clearfix">
  <div class="email-info">
    <h2>Plant A Tree Foundation</h2>
    <ul>
      <li><p>My first html email, I made this based on a tutorial by <a href="http://webdesign.tutsplus.com/articles/build-an-html-email-template-from-scratch--webdesign-12770">Nicole Merlin</a>. Plant A Tree Foundation is a fictional non-profit organization that wanted to recruit more volunteers to staff their growing tree planting operations.</p></li>
    </ul>
    <div><a href="https://github.com/ozywuli/emails/blob/master/gallery/plant_a_tree/plant.html">See the source code on Github</a>.</div>
  </div>
  <div class="email-image">
    <img src="../../img/plant_screenshot.png" alt="">
  </div>
</div>


<?php require( TEMPLATES_PATH . '/footer.php' ); ?>