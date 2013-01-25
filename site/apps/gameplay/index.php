<?php
  include '../../header.php';
  include '../../navigation.php';

  head();
  navigation();

?>

<div class="full-width">
  <div class="shadow bottom"></div>
  <div class="container-narrow">
    <div class="jumbotron">
      <!-- <a class="btn btn-large btn-success" href="#">Sign up today</a> -->
      <img src="images/phones.png" />
      <!-- <h1>Game Play</h1> -->
      <p class="lead tagline">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Install Now</a>
    </div>
  </div>
</div>

<div class="container-narrow gameplay">

  <div class="row-fluid features">
    <div class="span6">

      <div class="feature">
        <h4><i class="icon-eye-open"></i> Beautiful Cover Art</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in odio ac tellus semper venenatis. Integer sed consectetur augue. Aliquam blandit viverra risus quis dignissim. Donec et magna at sem laoreet faucibus vel et nibh. Aenean fermentum nunc non felis venenatis molestie.</p>
      </div>

      <div class="feature">
        <h4><i class="icon-remove"></i> Offline Support</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in odio ac tellus semper venenatis. Integer sed consectetur augue. Aliquam blandit viverra risus quis dignissim. Donec et magna at sem laoreet faucibus vel et nibh. Aenean fermentum nunc non felis venenatis molestie.</p>
      </div>
      
    </div>

    <div class="span6">

      <div class="feature">
        <h4><i class="icon-hdd"></i> Google Drive</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in odio ac tellus semper venenatis. Integer sed consectetur augue. Aliquam blandit viverra risus quis dignissim. Donec et magna at sem laoreet faucibus vel et nibh. Aenean fermentum nunc non felis venenatis molestie.</p>
      </div>
      
      <div class="feature">
        <h4><i class="icon-github"></i> Open Source</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in odio ac tellus semper venenatis. Integer sed consectetur augue. Aliquam blandit viverra risus quis dignissim. Donec et magna at sem laoreet faucibus vel et nibh. Aenean fermentum nunc non felis venenatis molestie.</p>
      </div>

    </div>
  </div>
  
</div>

<div class="full-width tetris">
  <div class="container-narrow">
    <div class="row-fluid marketing">
    </div>
  </div>
</div>

<!-- <div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="active item"><img src="/images/tetris_screenshot.png" /></div>
    <div class="item"><img src="/images/tetris_screenshot.png" /></div>
    <div class="item"><img src="/images/tetris_screenshot.png" /></div>
  </div>
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div> -->

<?php include '../../details.php'; ?>
<?php include '../../footer.php'; ?>
