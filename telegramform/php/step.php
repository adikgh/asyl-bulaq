<?php

// Replace YOUR_BOT_TOKEN with your actual bot token obtained from BotFather
define('BOT_TOKEN', '6278358272:AAG9bxlhh7Ypr7l5UqZaZ4n9sUfmZViE2Lk');

// Replace YOUR_CHAT_ID with your actual chat ID
define('CHAT_ID', '@sitetestmyqtar');

// Function to send a message to Telegram chat using the Telegram Bot API
function sendTelegramMessage($message) {
    $telegramUrl = 'https://api.telegram.org/bot' . BOT_TOKEN . '/sendMessage';
    $data = array('chat_id' => CHAT_ID, 'text' => $message);
    $options = array('http' => array('method' => 'POST', 'header' => 'Content-type: application/x-www-form-urlencoded', 'content' => http_build_query($data)));
    $context = stream_context_create($options);
    $result = file_get_contents($telegramUrl, false, $context);
    return $result === false ? false : true;
}

// Get the data sent from the client-side form
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// Compose the message to send to Telegram chat
$telegramMessage = "New message from website contact form:\n\n";
$telegramMessage .= "Name: $name\n";
$telegramMessage .= "Phone: $phone\n";
$telegramMessage .= "Email: $email\n";
$telegramMessage .= "Message: $message\n";

// Send the message to Telegram chat
if (sendTelegramMessage($telegramMessage)) {
    echo 'yes';
} else {
    echo 'no';
}

?>
