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
                <h5>Where can I download games?</h5>
                <p>
                  While we cannot officially recommend any single site for downloading Game Boy ROMs, we suggest using Google to search ROMs by title.
                </p>
                <p>
                  Please remember that piracy is illegal and you should only download ROMs you already own.
                </p>
              </li>
              <li>
                <h5>Which games work with Game Play?</h5>
                <p>
                  The following games have been tested with Game Play:
                  Adventure Island,
                  Adventure Island 2,
                  Bionic Commando,
                  Bomberman,
                  Bram Stoker's Dracula,
                  Castle Quest,
                  Castlevania 2 - Belmont's Revenge,
                  Double Dragon,
                  Dr. Mario,
                  Duck Tales 1,
                  Duck Tales 2,
                  Fist of the North Star,
                  Kirby's Dream Land,
                  Mega Man 1,
                  Mega Man 2,
                  Mega Man 3,
                  Mystical Ninja,
                  Ninja Boy 1,
                  Ninja Boy 2,
                  Ninja Gaiden Shadow,
                  Othello,
                  Ren &amp; Stimpy Space Cadet Advenutres,
                  Super Mario Land,
                  Tale Spin,
                  Tecmo Bowl,
                  The Castlevania Adventure ('86),
                  The Flash,
                  The Lion King,
                  The Little Mermaid,
                  The Pagemaster,
                  The Real Ghostbusters,
                  Tiny Toon Adventures - Montana's Movie Madness,
                  Tiny Toon Advenutres - Bab's Big Break,
                  TMNT - Fall of the Foot Clan,
                  TMNT II - Back from the Swewers,
                  TMNT III - Radical Rescue,
                  Yoshi's Cookie.
                </p>
                <p>
                  Thanks to our great users for their help in compiling this list.  If you find a game we've missed, please <a href="mailto:support@inseven.co.uk">contact us</a>.
                </p>
              <li>
                <h5>Why does Game Play not work on my iPhone 4/4S?</h5>
                <p>The iPhone 4 and iPhone 4S are not fast enough to run Game Play. There are no plans to provide support for these devices.</p>
              </li>
              <li>
                <h5>Why am I getting an 'Unknown memory bank controller' error?</h5>
                <p>Game Play does not currently support Game Boy Color or Game Boy ROMs larger than 246kb.  Support for both of these will be coming in future releases.  Unfortunately this restriction affects games like Pokemon and Zelda.</p>
              </li>
              <li>
                <h5>When will Game Play support Game Boy Color ROMs?</h5>
                <p>Future versions of Game Play will include Game Boy Color support.  There is currently no ETA but we're hard at work on delivering it as soon as we can.</p>
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
