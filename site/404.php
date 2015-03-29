<?php

  require_once(__DIR__ . '/header.php');
  require_once(__DIR__ . '/../common/inseven.php');

  head("Not Found");
  navigation("404");

?>

<div class="full-width texture">
  <div class="container-narrow">
  
    <div class="jumbotron">
      <h1 class="logo">Not Found.</h1>
    </div>
    <div class="jumbotron">
      <p class="lead tagline bright">The page you are looking for cannot be found.<br /><a href="https://inseven.co.uk">Home</a>.</p>
    </div>

  </div>
</div>

<?php

  details();
  footer();

?>