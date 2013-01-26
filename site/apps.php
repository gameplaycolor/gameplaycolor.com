<?php

  include 'inseven.php';

  head("Game Play");
  navigation("/apps/gameplay");

?>

<div class="full-width">
  <div class="container-narrow">

    <div class="row-fluid features icons">
      <div class="span6">
        <div class="icon lead tagline">
          <a href="/apps/gameplay/"><img src="/images/icn_gameplay.png" /></a><br/>
          <a href="/apps/gameplay/">Game Play</a> &mdash; Play Game Boy games on your iPhone 5
        </div>
      </div>
      <div class="span6">
        <div class="icon lead tagline">
          <a href="/apps/learn/"><img src="/images/icn_learn.png" /></a><br/>
          <a href="/apps/learn/">Learn </a> &mdash; Some software
        </div>
      </div>
    </div>

  </div>
</div>

<?php

  details();
  footer();

?>