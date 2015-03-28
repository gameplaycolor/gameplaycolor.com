<?php

require_once(__DIR__ . "/../vendor/autoload.php");

define("STRIPE_API_KEY", "sk_test_BQokikJOvBiI2HlWgH4olfQ2");

define("PARAMETER_STRIPE_TOKEN", "stripeToken");
define("PARAMETER_AMOUNT", "amount");
define("PARAMETER_EMAIL", "amount");

function success() {
    print json_encode(array("success" => true));
    exit;
}

function fail($error) {
    print json_encode(array("success" => false, "error" => $error));
    exit;
}

function parameter($key) {
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }
    fail("Unable to read parameter '" . $key . "'");
}

$token = parameter(PARAMETER_STRIPE_TOKEN);
$amount = parameter(PARAMETER_AMOUNT);
$email = parameter(PARAMETER_EMAIL);

\Stripe\Stripe::setApiKey(STRIPE_API_KEY);

try {

    $charge = \Stripe\Charge::create(array(
        "amount" => $amount,
        "currency" => "usd",
        "source" => $token,
        "description" => "Game Play Color",
        "statement_descriptor" => "INSEVEN LTD. GAME PLAY",
        "receipt_email" => $email,
        "metadata" => array("email" => $email)
    ));

} catch(\Stripe\Error\Card $e) {

    fail("The card was declined.");

} catch (Exception $e) {

    error_log("Uncaught exception: " . $e);
    fail("Uncaught exception.");

}

success();

?>