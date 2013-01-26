<?php

  include '../../inseven.php';

  head("Game Play");
  navigation("/apps/gameplay");

?>

<div class="full-width">
  <div class="container-narrow">
    <div class="jumbotron">
      <img src="/images/hdr_gameplay.png" />
      <p class="lead tagline">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Play Now</a>
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


<?php

  details();
  footer();

?>
