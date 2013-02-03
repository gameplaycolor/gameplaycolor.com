<?php

  include 'inseven.php';

  head("Game Play");
  navigation("/apps/learn/");

?>

<div class="full-width texture">
  <div class="container-narrow">
    <div class="jumbotron">
      <img src="/images/hdr_learn.png" />
      <h1 class="logo">Learn</h1><br/>
      <p class="lead tagline">Never forget to study.</p>
    </div>
  </div>
</div>

<div class="container-narrow">
  <div class="features">
      <div class="row-fluid">
      <div class="span12">
        <div class="feature center">
          <h4><i class="icon-time"></i> Coming soon&hellip;</h4>
        </div>
      </div>
    </div>
  </div>
  <hr />
</div>

<div class="container-narrow">

  <div class="features">
    <div class="row-fluid">
      <div class="span6">
        <div class="feature">
          <h4><i class="icon-bell"></i> Notifications</h4>
          <p>Unlike other flashcards applications, Learn uses notifications to ensure you never forget to study.  Simply set the number of cards you want to review each day and Learn does the rest.</p>
        </div>
      </div>
      <div class="span6">
        <div class="feature">
          <h4><i class="icon-plus"></i> Quick Entry</h4>
          <p>Since you never know when you might need to remember something, Learn is designed to ensure you're never more than two taps away from a new card or set.</p>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span6">
        <div class="feature">
          <h4><i class="icon-book"></i> Extensive Library</h4>
          <p>Learn supports a wide range of flashcard formats.  Manage and edit multiple sets and export them to share with friends and classmates.</p>
        </div>
      </div>
      <div class="span6">
        <div class="feature">
          <h4><i class="icon-lightbulb"></i> Study Your Way</h4>
          <p>Learn lets you review cards whichever way works for you, offering a number of different strategies, including the Leitner system.</p>
        </div>
     </div>
    </div>

  </div>

  <!--
  <hr />
  <div class="container-narrow">
    <div class="features">
        <div class="row-fluid">
        <div class="span12">
          <div class="feature">
            <h4><i class="icon-desktop"></i> Edit Locally</h4>
            <p>Mac OS X editor for editing sets locally.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  -->

  
</div>

<div class="full-width cardboard">
  <div class="container-narrow">
    <div class="row-fluid marketing">
    </div>
  </div>
</div>


<?php

  details();
  footer();

?>
