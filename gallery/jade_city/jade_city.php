<?php $title = 'Gallery' ?>

<?php
  require( '../../config.php' );
  require( TEMPLATES_PATH . '/header.php' );
?>

<div class="email-container clearfix">
  <div class="email-info">
    <h2>Jade City Buffet</h2>
    <ul>
      <li><p>I made this HTML email while going through the video tutorial at Lynda called <a href="http://www.lynda.com/HTML-tutorials/Creating-Responsive-HTML-Email/135374-2.html">"Creating a Responsive HTML Email</a>. Jade City Buffet is a fictional Chinese restaurant.</p></li>
    </ul>
    <div><a href="https://github.com/ozywuli/emails/blob/master/gallery/ink/ink.html">See the source code on Github</a>.</div>
  </div>
  <div class="email-image">
    <img src="../../img/jade_city.jpg" alt="">
  </div>
</div>


<?php require( TEMPLATES_PATH . '/footer.php' ); ?>