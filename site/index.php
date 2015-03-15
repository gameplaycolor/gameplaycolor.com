<?php

  include 'inseven.php';

  head();
  navigation();

?>

<div class="full-width texture">
  <div class="container-narrow">
  
    <div class="jumbotron">
      <h1 class="logo">InSeven Limited</h1>
    </div>
    <div class="jumbotron">
      <p class="lead tagline bright">We build <a href="#great-apps">great apps</a> and offer <a href="#bespoke-development">bespoke development and consultancy</a>.</p>
    </div>

    <div class="jumbotron">
      <div class="row-fluid">
        <div class="span2"></div>
        <div class="span4">
          <div class="icon lead tagline">
            <a href="/apps/gameplaycolor/"><div class="appicon gameplaycolor"></div></a><br/>
          </div>
        </div>
        <div class="span4">
          <div class="icon lead tagline">
            <a href="/apps/gameplay/"><div class="appicon gameplay"></div></a><br/>
          </div>
        </div>
        <div class="span2"></div>
      </div>
    </div>

  </div>
</div>

<div class="container-narrow">

  <div class="features">

    <div class="row-fluid">
      <div class="span12">
        <div class="feature">
          <h4 id="great-apps">Great Apps</h4>
          <p>InSeven Limited build great apps like <a href="apps/gameplay/">Game Play</a>. Sign up to our <a href="#mailing-list">mailing list</a> to find out about future releases.</p>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="feature">
          <h4 id="bespoke-development">Bespoke Development and Consultancy</h4>
          <p>With over 10 years experience in the mobile industry, InSeven Limited provide world class bespoke application development and software consultancy. Contact us at <a href="mailto:contact@inseven.co.uk">contact@inseven.co.uk</a> for more information.</p>
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