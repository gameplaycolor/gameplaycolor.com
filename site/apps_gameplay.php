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
                  <a href='https://www.google.com/?q=adventure+island+game+boy+rom+-color' target='_blank'>Adventure Island</a>,
                  <a href='https://www.google.com/?q=adventure+island+2+game+boy+rom+-color' target='_blank'>Adventure Island 2</a>,
                  <a href='https://www.google.com/?q=bionic+commando+game+boy+rom+-color' target='_blank'>Bionic Commando</a>,
                  <a href='https://www.google.com/?q=bomberman+game+boy+rom+-color' target='_blank'>Bomberman</a>,
                  <a href='https://www.google.com/?q=bram+stokers+dracula+game+boy+rom+-color' target='_blank'>Bram Stoker's Dracula</a>,
                  <a href='https://www.google.com/?q=castle+quest+game+boy+rom+-color' target='_blank'>Castle Quest</a>,
                  <a href='https://www.google.com/?q=castlevania+2+belmonts+revenge+game+boy+rom+-color' target='_blank'>Castlevania 2 - Belmont's Revenge</a>,
                  <a href='https://www.google.com/?q=double+dragon+game+boy+rom+-color' target='_blank'>Double Dragon</a>,
                  <a href='https://www.google.com/?q=dr+mario+game+boy+rom+-color' target='_blank'>Dr. Mario</a>,
                  <a href='https://www.google.com/?q=duck+tales+1+game+boy+rom+-color' target='_blank'>Duck Tales 1</a>,
                  <a href='https://www.google.com/?q=duck+tales+2+game+boy+rom+-color' target='_blank'>Duck Tales 2</a>,
                  <a href='https://www.google.com/?q=fist+of+the+north+star+game+boy+rom+-color' target='_blank'>Fist of the North Star</a>,
                  <a href='https://www.google.com/?q=kirbys+dream+land+game+boy+rom+-color' target='_blank'>Kirby's Dream Land</a>,
                  <a href='https://www.google.com/?q=mega+man+1+game+boy+rom+-color' target='_blank'>Mega Man 1</a>,
                  <a href='https://www.google.com/?q=mega+man+2+game+boy+rom+-color' target='_blank'>Mega Man 2</a>,
                  <a href='https://www.google.com/?q=mega+man+3+game+boy+rom+-color' target='_blank'>Mega Man 3</a>,
                  <a href='https://www.google.com/?q=mystical+ninja+game+boy+rom+-color' target='_blank'>Mystical Ninja</a>,
                  <a href='https://www.google.com/?q=ninja+boy+1+game+boy+rom+-color' target='_blank'>Ninja Boy 1</a>,
                  <a href='https://www.google.com/?q=ninja+boy+2+game+boy+rom+-color' target='_blank'>Ninja Boy 2</a>,
                  <a href='https://www.google.com/?q=ninja+gaiden+shadow+game+boy+rom+-color' target='_blank'>Ninja Gaiden Shadow</a>,
                  <a href='https://www.google.com/?q=othello+game+boy+rom+-color' target='_blank'>Othello</a>,
                  <a href='https://www.google.com/?q=ren+and+stimpy+space+cadet+advenutres+game+boy+rom+-color' target='_blank'>Ren & Stimpy Space Cadet Advenutres</a>,
                  <a href='https://www.google.com/?q=super+mario+land+game+boy+rom+-color' target='_blank'>Super Mario Land</a>,
                  <a href='https://www.google.com/?q=tale+spin+game+boy+rom+-color' target='_blank'>Tale Spin</a>,
                  <a href='https://www.google.com/?q=tecmo+bowl+game+boy+rom+-color' target='_blank'>Tecmo Bowl</a>,
                  <a href='https://www.google.com/?q=the+castlevania+adventure+(86)+game+boy+rom+-color' target='_blank'>The Castlevania Adventure ('86)</a>,
                  <a href='https://www.google.com/?q=the+flash+game+boy+rom+-color' target='_blank'>The Flash</a>,
                  <a href='https://www.google.com/?q=the+lion+king+game+boy+rom+-color' target='_blank'>The Lion King</a>,
                  <a href='https://www.google.com/?q=the+little+mermaid+game+boy+rom+-color' target='_blank'>The Little Mermaid</a>,
                  <a href='https://www.google.com/?q=the+pagemaster+game+boy+rom+-color' target='_blank'>The Pagemaster</a>,
                  <a href='https://www.google.com/?q=the+real+ghostbusters+game+boy+rom+-color' target='_blank'>The Real Ghostbusters</a>,
                  <a href='https://www.google.com/?q=tiny+toon+adventures+montanas+movie+madness+game+boy+rom+-color' target='_blank'>Tiny Toon Adventures - Montana's Movie Madness</a>,
                  <a href='https://www.google.com/?q=tiny+toon+advenutres+babs+big+break+game+boy+rom+-color' target='_blank'>Tiny Toon Advenutres - Bab's Big Break</a>,
                  <a href='https://www.google.com/?q=tmnt+fall+of+the+foot+clan+game+boy+rom+-color' target='_blank'>TMNT - Fall of the Foot Clan</a>,
                  <a href='https://www.google.com/?q=tmnt+ii+back+from+the+swewers+game+boy+rom+-color' target='_blank'>TMNT II - Back from the Swewers</a>,
                  <a href='https://www.google.com/?q=tmnt+iii+radical+rescue+game+boy+rom+-color' target='_blank'>TMNT III - Radical Rescue</a>,
                  <a href='https://www.google.com/?q=yoshis+cookie+game+boy+rom+-color' target='_blank'>Yoshi's Cookie</a>.
                </p>
                <p>
                  Thanks to our great users for their help in compiling this list.  If you find a game we've missed, please <a href="mailto:support@inseven.co.uk">contact us</a>.
                </p>
              <li>
                <h5>Why does Game Play not work on my iPhone 4/4S?</h5>
                <p>The iPhone 4 and iPhone 4S are not fast enough to run Game Play.</p>
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
