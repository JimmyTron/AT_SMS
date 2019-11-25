<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username   = "Johnvic";
$apiKey     = "15e59f5ce21bd9364365d0a8ae9b30a37745ca8d65c77a01fd37f6f73f89f8b1";

// Initialize the SDK
$AT         = new AfricasTalking($username, $apiKey);

// Get the SMS service
$sms        = $AT->sms();

// Set the numbers you want to send to in international format
$recipients = "+254705820937";

// Set your message
$message    = "Hey there Cecy,this is your first AfrikasTalking Course";

// Set your shortCode or senderId
$from       = "MTAANI324";

try {
    // Thats it, hit send and we'll take care of the rest
    $result = $sms->send([
        'to'      => $recipients,
        'message' => $message,
        'from'    => $from
    ]);

    print_r($result);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}
