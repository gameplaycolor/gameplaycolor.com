<?php

  include 'inseven.php';

  head();
  navigation();

?>

<div class="full-width texture">
  <div class="container-narrow">
  
    <div class="jumbotron">
      <h1 class="logo">InSeven Limited.</h1>
    </div>
    <div class="jumbotron">
      <p class="lead tagline bright">InSeven build <a href="#great-apps">great apps</a> and offer <a href="#bespoke-development">bespoke development and consultancy</a>.<br />  We specialise in mobile software, with a particular focus on iOS and Android.</p>
    </div>

    <div class="jumbotron" id="great-apps">
      <div class="row-fluid">
        <div class="span2"></div>
        <div class="span4">
          <div class="icon lead tagline">
            <a href="/apps/gameplay/"><img src="/images/ico_gameplay.png" /></a><br/>
          </div>
        </div>
        <div class="span4">
          <div class="icon lead tagline">
            <a href="/apps/learn/"><img src="/images/ico_learn.png" /></a><br/>
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
          <h4 id="bespoke-development"><i class="icon-comments"></i> Bespoke Development and Consultancy</h4>
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