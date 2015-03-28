<?php

include 'inseven.php';

head("Say Thanks");
navigation("/apps/gameplaycolor/");

?>

<div class="full-width pay">
  <div class="container-narrow">
    <div class="row-fluid">
      <div class="span12">

        <h1 style="text-align: center;">Game Play Color</h1>
        <p>Game Play Color is available free of charge. If you love it, consider paying something to say thanks.</p>
        <div id="pay-container" class="pay-container">
          <form id="pay-form">
            <div class="pay-box">
              <div class="pay-currency">$</div>
              <input id="pay-value" type="number" step="0.01" value="">
            </div>
            <div id="pay-error" class="pay-error"><p>Please enter a number</p></div>
            <div class="pay-button">
              <button id="pay_button" class="btn btn-large btn-pay">Pay</button>
            </div>
          </form>
          <div id="pay-success" class="pay-success">
            <p class="pay-success-message">Thanks.<br />You're Awesome!</p>
          </div>
          <div id="pay-failure" class="pay-failure">
            <p class="pay-failure-message">Awww&hellip;<br />That didn't work.</p>
            <p class="pay-footnote">(Don't worry. You've not been charged.)</p>
          </div>
        </div>

        <script>

        var amount = 0;
        var spinner;

        function showProgress() {

          $("#pay-form").hide();
          spinner = new Spinner({
            color: '#000'
          }).spin();
          $("#pay-container").append(spinner.el);
        }

        function showSuccess() {
          spinner.stop();
          $('#pay-success').show();
        }

        function showFailure() {
          spinner.stop();
          $('#pay-failure').show();
        }

        $(document).ready(function() {

          var handler = StripeCheckout.configure({
            key: 'pk_live_Hhu9TMyex0TCTQv5Fbwpkir8',
            allowRememberMe: false,
            token: function(token) {

              showProgress();

              $.post(
                "/pay.php",
                { token: token.id, email: token.email, amount: amount },
                function(result) {
                  if (result.success) {
                    showSuccess();
                  } else {
                    showFailure();
                  }
                },
                "json"
              ).fail(function() {
                showFailure();
              })
            }
          });

          var checkValue = function() {
            var dollars = parseFloat($("#pay-value").val());
            if (isNaN(dollars)) {
              $('#pay-error').show();
              return false;
            } else {
              $('#pay-error').hide();
              return dollars;
            }
          }

          var input = $("#pay-value");
          input.keyup(checkValue);

          $('#pay_button').on('click', function(e) {

            e.preventDefault();

            var dollars = checkValue();
            if (dollars === false) {
              return;
            }

            amount = dollars * 100;
            handler.open({
              name: 'Game Play Color',
              amount: amount
            });

          });

          // Close Checkout on page navigation
          $(window).on('popstate', function() {
            handler.close();
          });

          input.focus();

        });

        </script>

      </div>
    </div>
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
