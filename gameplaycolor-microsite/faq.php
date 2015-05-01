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
          <li><a href="#add">How do I add games to Game Play Color?</a></li>
          <li><a href="#artwork">How do I add artwork to Game Play Color?</a></li>
          <li><a href="#color">How do I change the console color?</a></li>
          <li><a href="#signout">How do I sign out of Google Drive?</a></li>
          <li><a href="#devices">Are there any plans to add Game Boy Advance or Nintendo DS support?</a></li>
          <li><a href="#multiplayer">Are there any plans to add multiplayer and link cable support?</a></li>
        </ol>
        <hr />
        <a id="games"></a>
        <h3>Where can I download games?</h3>
        <p>While we cannot officially recommend any single site for downloading Game Boy and Game Boy Color ROMs, we suggest using <a href="https://google.com" target="_blank">Google</a> to search for ROMs by title<sup> <a href="#2">2</a></sup>.</p>
        <p class="faq-top"><a href="#">&#8613; Back to the top</a></p>
        <hr />

        <a id="add"></a>
        <h3>How do I add games to Game Play Color?</h3>
        <p>You can add games to Game Play Color by one of two mechanisms:</p>
        <ol>
          <li>
            <p><strong>Using a Mac or PC</strong></p>
            <ol type="i">
              <li><a href="#games">Download</a> or create an image of the ROM you wish to play.<br /><img src="/images/ss_add_download.png" width="855px" height="522px"></img></li>
              <li>If the ROM is compressed (usually indicated by a <strong>.zip</strong> extension) double-click it to extract it. This should leave you with a <strong>.gb</strong> or <strong>.gbc</strong> file.<br /><img src="/images/ss_add_extract.png" width="855px" height="522px"></img></li>
              <li>Sign in to <a href="https://drive.google.com" target="_blank">Google Drive</a> on your Mac or PC.<br /><img src="/images/ss_add_drive.png" width="855px" height="522px"></img></li>
              <li>Drag-and-drop your downloaded ROM (<strong>Shantae.gbc</strong> in our example) into Google Drive.<br /><img src="/images/ss_add_upload.png" width="855px" height="522px"></li>
              <li>Google Drive should show a progress bar during the upload and a message when it has completed (e.g. <strong>Shantae.gbc has been uploaded to Games</strong> in our example).<br /><img src="/images/ss_add_complete.png" width="855px" height="522px"></li>
              <li>Launch Game Play Color on your iOS device by tapping the <strong>Game Play</strong> icon on your home screen. Sign in to Google Drive if prompted.</li>
              <li>Show the game library by tapping on the emulator screen. Your newly uploaded game should be visible in the library.<br /><img src="/images/ss_add_library_new.png" width="375px" height="667px"></li>
              <li>Tap the game once to start downloading. A spinner will appear to indicate that the download is in progress.<br /><img src="/images/ss_add_library_download.png" width="375px" height="667px"></li>
              <li>When the download is complete, the game will change colour and the spinner will disappear.<br /><img src="/images/ss_add_library_downloaded.png" width="375px" height="667px"></li>
              <li>Tap the game to again to start playing.<br /><img src="/images/ss_add_play.png" width="375px" height="667px"></li>
            </ol>
          </li>
          <li>
            <p><strong>Using your iPhone, iPod or iPad</strong></p>
            <p>The great guys over at <a href="https://www.youtube.com/channel/UCrSGNNsPxE-qsqoqnkFZHBg" target="_blank">OPERATIONiDROID</a> and <a href="http://iemulators.com" target="_blank">iEmulators</a> have produced a video explaining one of the many techniques available for getting ROMs into Game Play Color using just your iOS device:</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Eoaq6HVvxY0" frameborder="0" allowfullscreen></iframe>
          </li>
        </ol>
        <p class="faq-top"><a href="#">&#8613; Back to the top</a></p>
        <hr />

        <a id="artwork"></a>
        <h3>How do I add artwork to Game Play Color?</h3>
        <ol>
          <li>Add some ROMs to Game Play Color as described <a href="#add">above</a>.</li>
          <li>Download a <strong>JPEG</strong> (.jpg) of the cover art for your ROM you wish to add artwork to.<br /><img src="/images/ss_artwork_download.png" width="855px" height="522px"></img></li>
          <li>Rename the file to match the name of the ROM.<br />In our example, our ROM file is entitield <strong>Shantae.gbc</strong>, so we rename the artwork to <strong>Shantae.jpg</strong>.<br /><img src="/images/ss_artwork_rename.png" width="855px" height="522px"></img></li>
          <li>Sign in to <a href="https://drive.google.com" target="_blank">Google Drive</a>.</li>
          <li>Drag-and-drop the artwork file into Google Drive.<br /><img src="/images/ss_artwork_upload.png" width="855px" height="522px"></li>
          <li>Google Drive should show a progress bar during the upload and a message when it has completed (e.g. <strong>Shantae.jpg has been uploaded to Games</strong> in our example).<br /><img src="/images/ss_artwork_uploaded.png" width="855px" height="522px"></li>
          <li>Launch Game Play Color on your iOS device and show the game library by tapping on the emulator screen. After a few moments, your ROM should display the game artwork.<br /><img src="/images/ss_artwork_complete.png" width="375px" height="667px"></li>
        </ol>
        <p class="faq-top"><a href="#">&#8613; Back to the top</a></p>
        <hr />

        <a id="color"></a>
        <h3>How do I change the console color?</h3>
        <p><img src ="/images/ss_colors.png" /></p>
        <p>Like the original Game Boy Color, Game Play Color is available in a range of colors: simply shake your iPhone, iPod or iPad.</p>
        <p class="faq-top"><a href="#">&#8613; Back to the top</a></p>        
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
        <p class="faq-top"><a href="#">&#8613; Back to the top</a></p>
        <hr />

        <a id="devices"></a>
        <h3>Are there any plans to add Game Boy Advance or Nintendo DS support?</a></h3>
        <p>We're received a lot of requests for Game Boy Advance, Nintendo DS and even some for Nintendo 64 support in Game Play Color.</p>
        <p>We've got our hands full at the moment with the current feature set of Game Play Color but we'll certainly consider additional device support for future products and releases. Obviously we're limited to what's performs well running in JavaScript on a phone so, for example, Nintendo 64 support looks highly unlikely, while Game Boy Advance support might seem more realistic.</p>
        <p class="faq-top"><a href="#">&#8613; Back to the top</a></p>
        <hr />

        <a id="multiplayer"></a>
        <h3>Are there any plans to add multiplayer and link cable support?</h3>
        <p>We'd absolutely love to add this feature but we're fairly limited by the environment provided to web apps today (there's no support for peer-to-peer networking). When the appropriate technologies become available, we'll be sure to look again.</p>
        <p class="faq-top"><a href="#">&#8613; Back to the top</a></p>

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
