<?php

  include 'inseven.php';

  head("Game Play");
  navigation("/apps/gameplay/");

?>

<div class="full-width texture">
  <div class="container-narrow">
    <div class="jumbotron">
      <img src="/images/hdr_gameplay.png" />
      <h1 class="logo">Game Play</h1><br/>
      <p class="lead tagline">Play Game Boy games on your iPhone 5.</p>
      <a href="app/" role="button" class="btn btn-primary" onclick="_gaq.push(['_trackEvent', 'Play Now', 'clicked']);">Play Now</a>
    </div>
  </div>
</div>

<div class="container-narrow">

  <div class="features">
    <div class="row-fluid">
      <div class="span6">
        <div class="feature">
          <h4><i class="icon-eye-open"></i> Beautiful Cover Art</h4>
          <p>Game Play automatically identifies cover art stored alongside your ROMs and shows it on beautifully rendered cartridges. Simply drop a JPEG or PNG file with the same name as your game into Google Drive and Game Play does the rest.</p>
        </div>
      </div>
      <div class="span6">
        <div class="feature">
          <h4><i class="icon-hdd"></i> Google Drive</h4>
          <p>Store all your Game Boy ROMs and cover art in Google Drive.  Adding a game to Game Play is as simple as dragging-and-dropping it into your Google Drive and opening the game library.</p>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span6">
        <div class="feature">
          <h4><i class="icon-remove"></i> Offline Support</h4>
          <p>Game Play makes use of the HTML 5 application cache and databases to provide complete offline support.  Play your games wherever and whenever you want.</p>
        </div>
      </div>
      <div class="span6">
        <div class="feature">
          <h4><i class="icon-github"></i> Open Source</h4>
          <p>Licensed under the GPL and available on <a href="https://github.com/jbmorley/gameplay">Github</a>, Game Play is open source through-and-through.  Game Boy emulation uses the <a href="http://www.codebase.es/jsgb/">JSGB</a> emulator core.</p>
        </div>
     </div>
    </div>
    <hr />
  </div>

  <div class="container-narrow">
    <div class="features">
        <div class="row-fluid">
        <div class="span12">
          <div class="feature">
            <h4 id="faq"><i class="icon-question-sign"></i> FAQ</h4>
            <ol>
              <li>
                <h5>Why does Game Play not work on my iPhone 4/4S?</h5>
                <p>Game Play performance is currently quite poor on the iPhone 4 and iPhone 4S, so we've restricted it to the iPhone 5 for initial release.</p>
              </li>
              <li>
                <h5>Why am I getting an 'Unknown memory bank controller' error?</h5>
                <p>Game Play does not currently support Game Boy Color ROMs.  Support will be coming in future releases.</p>
              </li>
              <li>
                <h5>Why can't I play my Pokemon ROMs?</h5>
                <p>See the previous answer.</p>
              </li>
            </ol>
            </ul>
          </div>
        </div>
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
