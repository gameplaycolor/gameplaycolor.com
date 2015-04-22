<?php

require_once(__DIR__ . '/header.php');
require_once(__DIR__ . '/../common/inseven.php');

head("FAQ");
navigation("https://gameplaycolor.com/");

?>

<div class="full-width wood">
  <div class="container-narrow">
    <div class="jumbotron">
      <h1 class="logo">Game Play 
        <span class="color-title"><span class="pink">C</span><span class="purple">O</span><span class="lime">L</span><span class="yellow">O</span><span class="cyan">R</span></span></h1><br/>
    </div>
  </div>
</div>

<div class="full-width pay">
  <div class="container-narrow">
    <div class="row-fluid">
      <div class="span12 container-faq">

        <h2>FAQ</h2>
        <ol>
          <li><a href="#games">Where can I download games?</a></li>
          <li><a href="#signout">How do I sign out of Google Drive?</a></li>
          <li><a href="#devices">Are there any plans to add <em>Game Boy Advance</em> or <em>Nintendo DS</em> support?</a></li>
          <li><a href="#multiplayer">Are there any plans to add <em>multiplayer</em> and <em>link cable</em> support?</a></li>
        </ol>
        <hr />
        <a id="games"></a>
        <h3>Downloading Games</h3>
        <p>While we cannot officially recommend any single site for downloading <em>Game Boy</em> and <em>Game Boy Color</em> ROMs, we suggest using <em>Google</em> to search for ROMs by title<sup> 2</sup>.</p>
        <hr />
        <a id="signout"></a>
        <h3>How do I sign out of Google Drive?</h3>
        <p>It's not currently possible to sign out of Google Drive in-app (<a href="https://github.com/jbmorley/gameplay/issues/20">issue #20</a>).</p>
        <p>Instead, you can sign out using the Google Drive website:</p>
        <ol>
          <li>Navigate to <a href="https://drive.google.com" target="_blank">https://drive.google.com</a> in your web browser.</li>
          <li>Sign in using the account you wish to disconnect from Game Play.</li>
          <li>Click the <em>Gear</em> icon in the top right corner, and then click <em>Settings</em>.<br /><img src="/images/faq_drive_settings.png" width="201px" height="261px" /></li>
          <li>Select <em>Managing Apps</em>.<br /><img src="/images/faq_drive_settings_apps.png" width="782px" height="426px" /></li>
          <li>Identify <em>Game Play</em> in the list of apps, click the <em>Options</em> button, and then click <em>Disconnect from Drive</em>.<br /><img src="/images/faq_drive_settings_apps_disconnect.png" width="782px" height="426px" /><br /><em>If you can't find Game Play listed, it's possible you used a signed in with a different Google Drive account.</em></li>
          <li>Click <em>Disconnect</em> to confirm.<br /><img src="/images/faq_drive_disconnect_app.png" width="546px" height="247px" /></li>
        </ol>
        <p>Next time you launch Game Play, you will be presented with the sign in screen again.</p>
        <hr />
        <a id="devices">
        <h3></a>Additional Device Support</h3>
        <p>We're received a lot of requests for <em>Game Boy Advance</em>, <em>Nintendo DS</em> and even some for <em>Nintendo 64</em> support in Game Play Color.</p>
        <p>We've got our hands full at the moment with the current feature set of Game Play Color but we'll certainly consider additional device support for future products and releases. Obviously we're limited to what's performs well running in JavaScript on a phone so, for example, Nintendo 64 support looks highly unlikely, while Game Boy Advance support might seem more realistic.</p>
        <hr />
        <a id="multiplayer">
        <h3></a>Multiplayer / Link Cable Support</h3>
        <p>We'd absolutely love to add this feature but we're fairly limited by the environment provided to web apps today (there's no support for peer-to-peer networking). When the appropriate technologies become available, we'll be sure to look again.</p>
      </div>
    </div>

    <?php include "boilerplate.php"; ?>

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
