<?php

  include 'inseven.php';

  head();
  navigation();

?>

<div class="full-width texture">
  <div class="container-narrow">
  
    <div class="jumbotron">
      <h1 class="logo">InSeven</h1>
    </div>

    <div class="jumbotron">
      <div class="row-fluid">
      <!--
        <div class="span2"></div>
        <div class="span4">
          <div class="icon lead tagline">
            <a href="/apps/gameplaycolor/"><div class="appicon gameplaycolor"></div></a><br/>
	    <p class="bright">Game Play Color</p>
          </div>
        </div>
        <div class="span4">
	-->
	<div class="span12">
          <div class="icon lead tagline">
            <a href="/apps/gameplay/"><div class="appicon gameplay"></div></a><br/>
	    <p class="bright">Game Play</p>
          </div>
        </div>
	<!--
        <div class="span2"></div>
	-->
      </div>
    </div>

  </div>
</div>

<div class="container-narrow">
  <div class="features">
    <div class="row-fluid">
      <div class="span12">
        <div class="feature">
	  <i class="feature-icon fa fa-heart"></i>
          <h4 id="great-apps">Great Apps</h4>
          <p>InSeven Limited build great apps like <!-- <a href="apps/gameplaycolor/">Game Play Color</a> and --> <a href="apps/gameplay/">Game Play</a>.</p>
	  <p>Sign up to our <a href="#mailing-list">mailing list</a> to find out about future releases.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="full-width sketchpad">
  <div class="container-narrow">
    <div class="row-fluid marketing">
    </div>
  </div>
</div>

<?php

  details();
  footer();

?>