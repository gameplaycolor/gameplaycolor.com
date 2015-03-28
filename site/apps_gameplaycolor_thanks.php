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
        <form>

          <div class="pay-box">
            <div class="pay-currency">$</div>
            <input id="pay-value" type="number" step="0.01" value="">
          </div>
          <div id="pay-error" class="pay-error"><p>Please enter a number</p></div>
          <div class="pay-button">
            <button id="pay_button" class="btn btn-large btn-pay">Pay</button>
          </div>
        </form>

        <script>

        var amount = 0;

        $(document).ready(function() {

          var handler = StripeCheckout.configure({
            key: 'pk_test_aeBNlZkIpwgR77CpOhC2zcAt',
            allowRememberMe: false,
            token: function(token) {
              $.post(
                "/pay.php",
                { token: token.id, email: token.email, amount: amount },
                function(result) {
                  console.log(result)
                },
                "json"
              ).fail(function() {
                console.log("Failed :(");
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
