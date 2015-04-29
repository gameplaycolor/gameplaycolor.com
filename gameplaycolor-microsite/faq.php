<?php

require_once(__DIR__ . '/header.php');
require_once(__DIR__ . '/common.php');

head("FAQ");
navigation("/faq/");

?>

<div class="full-width pay">
  <div class="container-narrow">
    <div class="row-fluid">
      <div class="span12">
        <h1 style="text-align: center;">Frequently Asked Questions</h1>
      </div>
    </div>
  </div>
</div>

<div class="full-width pay">
  <div class="container-narrow">
    <div class="row-fluid">
      <div class="span12 container-faq">
        <ol>
          <li><a href="#games">Where can I download games?</a></li>
          <li><a href="#color">How do I change the console color?</a></li>
          <li><a href="#signout">How do I sign out of Google Drive?</a></li>
          <li><a href="#devices">Are there any plans to add Game Boy Advance or Nintendo DS support?</a></li>
          <li><a href="#multiplayer">Are there any plans to add multiplayer and link cable support?</a></li>
        </ol>
        <hr />
        <a id="games"></a>
        <h3>Where can I download games?</h3>
        <p>While we cannot officially recommend any single site for downloading Game Boy and Game Boy Color ROMs, we suggest using <a href="https://google.com" target="_blank">Google</a> to search for ROMs by title<sup> <a href="#2">2</a></sup>.</p>
        <hr />
        <a id="color"></a>
        <h3>How do I change the console color?</h3>
        <p><img src ="/images/ss_colors.png" /></p>
        <p>Like the original Game Boy Color, Game Play Color is available in a range of colors: simply shake your iPhone, iPod or iPad.</p>
        <hr />
        <a id="signout"></a>
        <h3>How do I sign out of Google Drive?</h3>
        <p>It's not currently possible to sign out of Google Drive in-app (<a href="https://github.com/jbmorley/gameplay/issues/20">issue #20</a>).</p>
        <p>Instead, you can sign out using the Google Drive website:</p>
        <ol>
          <li>Navigate to <a href="https://drive.google.com" target="_blank">https://drive.google.com</a> in your web browser.</li>
          <li>Sign in using the account you wish to disconnect from Game Play.</li>
          <li>Click the <strong>Gear</strong> icon in the top right corner, and then click <strong>Settings</strong>.<br /><img src="/images/faq_drive_settings.png" width="201px" height="261px" /></li>
          <li>Select <strong>Managing Apps</strong>.<br /><img src="/images/faq_drive_settings_apps.png" width="782px" height="426px" /></li>
          <li>Identify <strong>Game Play</strong> in the list of apps, click the <strong>Options</strong> button, and then click <strong>Disconnect from Drive</strong>.<br /><img src="/images/faq_drive_settings_apps_disconnect.png" width="782px" height="426px" /><br /><em>If you can't find Game Play listed, it's possible you used a signed in with a different Google Drive account.</em></li>
          <li>Click <strong>Disconnect</strong> to confirm.<br /><img src="/images/faq_drive_disconnect_app.png" width="546px" height="247px" /></li>
        </ol>
        <p>Next time you launch Game Play, you will be presented with the sign in screen again.</p>
        <hr />
        <a id="devices"></a>
        <h3>Are there any plans to add Game Boy Advance or Nintendo DS support?</a></h3>
        <p>We're received a lot of requests for Game Boy Advance, Nintendo DS and even some for Nintendo 64 support in Game Play Color.</p>
        <p>We've got our hands full at the moment with the current feature set of Game Play Color but we'll certainly consider additional device support for future products and releases. Obviously we're limited to what's performs well running in JavaScript on a phone so, for example, Nintendo 64 support looks highly unlikely, while Game Boy Advance support might seem more realistic.</p>
        <hr />
        <a id="multiplayer"></a>
        <h3>Are there any plans to add multiplayer and link cable support?</h3>
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
