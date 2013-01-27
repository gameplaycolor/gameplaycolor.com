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
          <a href="/apps/gameplay/"><img src="/images/ico_gameplay.png" /></a><br/>
          <a href="/apps/gameplay/">Game Play</a> &mdash; Game Boy emulator for the iPhone 5
        </div>
      </div>
      <div class="span6">
        <div class="icon lead tagline">
          <a href="/apps/learn/"><img src="/images/ico_learn.png" /></a><br/>
          <a href="/apps/learn/">Learn</a> &mdash; Flash cards that never let you forget to study
        </div>
      </div>
    </div>

  </div>
</div>

<?php

  details();
  footer();

?>