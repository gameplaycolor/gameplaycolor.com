<?php

function navigation_item($href, $title, $current) {
  $class = "";
  if ($current == $href) {
    $class = 'class = "active"';
  }
  echo '<li ' . $class . '><a href="' . $href . '">' . $title . '</a></li>';
}


function navigation($current = "/") {
?>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="/">InSeven Limited</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <?php navigation_item("/apps/gameplay/", "Game Play", $current); ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>

<?php

}

?>