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
      <div class="span12">

        <h2>FAQ</h2>
        <ol>
          <li><a href="#games">Where can I download games?</a></li>
          <li><a href="#devices">Are there any plans to add <em>Game Boy Advance</em> or <em>Nintendo DS</em> support?</a></li>
          <li><a href="#multiplayer">Are there any plans to add <em>multiplayer</em> and <em>link cable</em> support?</a></li>
        </ol>
        <hr />
        <h3><a id="games"></a>Downloading Games</h3>
        <p>While we cannot officially recommend any single site for downloading <em>Game Boy</em> and <em>Game Boy Color</em> ROMs, we suggest using <em>Google</em> to search for ROMs by title<sup> 2</sup>.</p>
        <hr />
        <h3><a id="devices"></a>Additional Device Support</h3>
        <p>We're received a lot of requests for <em>Game Boy Advance</em> and <em>Nintendo DS</em> support in Game Play Color. While we've got our hands full at the moment supporting the current feature set of Game Play Color, it's something we'll certainly consider for future products and releases.</p>
        <hr />
        <h3><a id="multiplayer"></a>Multiplayer / Link Cable Support</h3>
        <p>We'd absolutely love to add this feature but we're fairly limited by the environment provided to web apps today (there's no support for peer-to-peer networking). When the appropriate technologies become available, we'll be sure to look again.</p>
        <p>
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
