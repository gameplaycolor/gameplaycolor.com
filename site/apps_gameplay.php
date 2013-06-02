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
                <h5>Which games work with Game Play?<h5>
                <p>Game Play supports a wide range of Game Boy original ROMs.  Games that are known to work include: <strong>Adventure Island</strong>, <strong>Adventure Island 2</strong>, <strong>Bionic Commando</strong>, <strong>Bram Stoker's Dracula</strong>, <strong>Castle Quest</strong>, <strong>Castlevania 2 - Belmont's Revenge</strong>, <strong>Dr. Mario</strong>, <strong>Duck Tales 1</strong>, <strong>Duck Tales 2</strong>, <strong>Fist of the North Star</strong>, <strong>Kirby's Dream Land</strong>, <strong>Mega Man 1</strong>, <strong>Mega Man 2</strong>, <strong>Mega Man 3</strong>, <strong>Mystical Ninja</strong>, <strong>Ninja Boy 1</strong>, <strong>Ninja Boy 2</strong>, <strong>Ninja Gaiden Shadow</strong>, <strong>Othello</strong>, <strong>Ren &amp; Stimpy Space Cadet Advenutres</strong>, <strong>Super Mario World</strong>, <strong>Tale Spin</strong>, <strong>Tecmo Bowl</strong>, <strong>The Castlevania Adventure ('86)</strong>, <strong>The Flash</strong>, <strong>The Lion King</strong>, <strong>The Little Mermaid</strong>, <strong>The Pagemaster</strong>, <strong>The Real Ghostbusters</strong>, <strong>Tiny Toon Adventures - Montana's Movie Madness</strong>, <strong>Tiny Toon Advenutres - Bab's Big Break</strong>, <strong>TMNT - Fall of the Foot Clan</strong>, <strong>TMNT II - Back from the Swewers</strong>, <strong>TMNT III - Radical Rescue</strong>, <strong>Yoshi's Cookie</strong>.</p>
              <li>
                <h5>Why does Game Play not work on my iPhone 4/4S?</h5>
                <p>The iPhone 4 and iPhone 4S are not fast enough to run Game Play.</p>
              </li>
              <li>
                <h5>Why am I getting an 'Unknown memory bank controller' error?</h5>
                <p>Game Play does not currently support Game Boy Color or larger Game Boy ROMs.  Support for both of these will be coming in future releases.  Unfortunately this restriction affects games like Pokemon and Zelda.</p>
              </li>
              <li>
                <h5>When will Game Play support Game Boy Color ROMs?</h5>
                <p>There is currently no ETA for Game Boy Color support, but we're working on it as fast as we can.  Rest assured, we want it too!</p>
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
