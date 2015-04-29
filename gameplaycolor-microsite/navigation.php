<?php

function navigation_item($href, $title, $current, $external = false) {
  $class = "";
  if ($current == $href) {
    $class = ' class = "active"';
  }
  $target = "";
  if ($external == true) {
    $target = $class . ' target = "_blank" ';
  }
  echo '<li' . $class . '><a href="' . $href . '"'.$target.'>' . $title . '</a></li>';
}


function navigation($current = "/") {
  $class = "";
  if ($current == "/") {
    $class = ' active';
  }

?>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand<?php echo $class; ?>" href="/">Game Play Color</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <?php navigation_item("/faq/", "FAQ", $current); ?>
          <?php navigation_item("/thanks/", "Say Thanks", $current); ?>
          <?php navigation_item("https://inseven.co.uk/", "&#x2192; InSeven Limited", $current, true); ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>

<?php

}

?>
