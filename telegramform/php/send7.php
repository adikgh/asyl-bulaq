<?php

$chat_id = '@sitetestmyqtar'; // Replace with your chat ID
$token = '6278358272:AAG9bxlhh7Ypr7l5UqZaZ4n9sUfmZViE2Lk'; // Replace with your bot token

// Get the message data from the request
$sms = $_POST['sms'];
$name = $_POST['name'];
$phone = $_POST['phone'];

// Prepare the message text
$message = "New order from:\nName: $name\nPhone: $phone";

// Prepare the request URL
$url = "https://api.telegram.org/bot$token/sendMessage";

// Prepare the request parameters
$params = array(
    'chat_id' => $chat_id,
    'text' => $message
);

// Send the message to Telegram
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Check if the message was sent successfully
if ($response && json_decode($response)->ok) {
    echo 'yes';
} else {
    echo 'no';
}

 
?>