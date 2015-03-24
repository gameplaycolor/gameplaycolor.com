<?php

include 'inseven.php';

head("Game Play Color");
navigation("/apps/gameplaycolor/");

?>

<div class="full-width wood">
  <div class="container-narrow">
    <div class="jumbotron">
      <div class="image_hdr_gameplaycolor"></div>
      <h1 class="logo">Game Play 
        <span class="color-title"><span class="pink">C</span><span class="purple">O</span><span class="lime">L</span><span class="yellow">O</span><span class="cyan">R</span></span></h1><br/>
      <p class="lead tagline">Game Boy Color* games on your iPhone and iPad.</p>
      <a href="app/" role="button" class="btn btn-primary" onclick="_gaq.push(['_trackEvent', 'Play Now', 'clicked']);">Play Now</a>
    </div>
  </div>
</div>

<div class="full-width pay">
  <div class="container-narrow">
    <div class="row-fluid">
      <div class="span8">
        <p>Game Play Color is available free of charge. If you love it, consider paying something to say thanks.</p>
      </div>
      <div class="span4">

        <form class="navbar-form pull-left">
          <input id="pay_value" class="input-pay" type="text" class="span2" value="5">
          <button id="pay_button" class="btn btn-large">Pay</button>
        </form>

        <script>

        $(document).ready(function() {

          var handler = StripeCheckout.configure({
            key: 'pk_test_aeBNlZkIpwgR77CpOhC2zcAt',
            image: '/images/stripe_icon.png',
            token: function(token) {
              // Use the token to create the charge with a server-side script.
              // You can access the token ID with `token.id`
            }
          });

          $('#pay_button').on('click', function(e) {

            e.preventDefault();

            var dollars = parseFloat($("#pay_value").val());
            if (isNaN(dollars)) {
              alert("Invalid number");
              return;
            }
            var cents = dollars * 100;

            handler.open({
              name: 'Game Play Color',
              amount: cents
            });

          });

          // Close Checkout on page navigation
          $(window).on('popstate', function() {
            handler.close();
          });

        });

        </script>

      </div>
    </div>
  </div>
</div>

<div class="container-narrow">

  <div class="features">
    <div class="row-fluid">
      <div class="span6">
        <div class="feature">
          <i class="feature-icon fa fa-image fx-fw"></i>
          <h4>Beautiful Cover Art</h4>
          <p>Game Play Color automatically identifies cover art stored alongside your ROMs and shows it on beautifully rendered cartridges.</p>
	  <p class="detail">Simply drop a JPEG or PNG file with the same name as your game into Google Drive and Game Play does the rest.</p>
        </div>
      </div>
      <div class="span6">
        <div class="feature">
	  <i class="feature-icon fa fa-google fa-fw"></i>
          <h4>Google Drive</h4>
          <p>Store all your Game Boy and Game Boy Color ROMs** and cover art in Google Drive.</p>
	  <p class="detail">Adding a game to Game Play Color is as simple as dragging-and-dropping it into your Google Drive and opening the game library.</p>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span6">
        <div class="feature">
          <h4>Offline Support</h4>
	  <i class="feature-icon fa fa-plane fa-fw"></i>
	  <p>Play your games wherever and whenever you want, even without signal.</p>
          <p class="detail">Game Play makes use of the HTML 5 application cache and databases to provide complete offline support.</p>
        </div>
      </div>
      <div class="span6">
        <div class="feature">
	        <i class="feature-icon fa fa-github fa-fw"></i>
          <h4>Open Source</h4>
          <p>Licensed under the GPL and available on <a href="https://github.com/jbmorley/gameplay">GitHub</a>, Game Play is open source through-and-through.</p>
	        <p class="detail">Game Boy emulation uses the <a href="https://github.com/grantgalitz/GameBoy-Online">GameBoy-Online</a> emulator core.</p>
        </div>
     </div>
    </div>

    <div class="row-fluid">
      <div class="span6">
        <div class="feature">
          <i class="feature-icon fa fa-volume-up fa-fw"></i>
          <h4>Audio</h4>
          <p>Enjoy your games in full, rich 8-bit audio.</p>
        </div>
      </div>
      <div class="span6">
        <div class="feature">
          <i class="feature-icon fa fa-floppy-o fa-fw"></i>
          <h4>Saved Games</h4>
          <p></p>
        </div>
     </div>
    </div>

    <div class="row-fluid">
      <div spann="span12">
        * <em>Game Boy</em> and <em>Game Boy Color</em> are trademarks of <em>Nintendo Co., Ltd.</em>. All rights reserved.<br />
        ** Downloading copied ROMs is illegal: only use ROM images you have created and own yourself.
      </div>
    </div>

  </div>
  
</div>

<div class="full-width mario">
  <div class="container-narrow">
    <div class="row-fluid marketing">
    </div>
  </div>
</div>


<?php

details();
footer();

?>
