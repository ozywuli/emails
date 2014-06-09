<?php $title = 'Gallery' ?>

<?php
  require( '../../config.php' );
  require( TEMPLATES_PATH . '/header.php' );
?>

<div class="email-container clearfix">
  <div class="email-info">
    <h2>Cha Leafs</h2>
    <ul>
      <li><p>My first HTML Email made with the help of <a href="http://zurb.com/ink/">Foundation's Ink</a> email framework.</p></li>
    </ul>
    <div><a href="https://github.com/ozywuli/emails/blob/master/gallery/cha/index.html">See the source code on Github</a>.</div>
  </div>
  <div class="email-image">
    <img src="../../img/chaleafs.jpg" alt="">
  </div>
</div>

<?php require( TEMPLATES_PATH . '/footer.php' ); ?>
