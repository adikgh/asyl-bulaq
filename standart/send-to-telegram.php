<?php
// Токен
  const TOKEN = '6278358272:AAG9bxlhh7Ypr7l5UqZaZ4n9sUfmZViE2Lk';

  // ID чата
  const CHATID = '@sitetestmyqtar';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $fileSendStatus = '';
  $textSendStatus = '';
  $msgs = [];
  
  // Проверяем не пусты ли поля с именем и телефоном
  if (!empty($_POST['ms_phone'])) {
    
    // Если не пустые, то валидируем эти поля и сохраняем и добавляем в тело сообщения. Минимально для теста так:
    $txt = "";
 
    
    // Номер телефона
    if (isset($_POST['ms_phone']) && !empty($_POST['ms_phone'])) {
        $txt .= "Телефон: " . strip_tags(trim(urlencode($_POST['ms_phone']))) . "%0A";
    }
    
   

    $textSendStatus = @file_get_contents('https://api.telegram.org/bot'. TOKEN .'/sendMessage?chat_id=' . CHATID . '&parse_mode=html&text=' . $txt); 

    if( isset(json_decode($textSendStatus)->{'ok'}) && json_decode($textSendStatus)->{'ok'} ) {
     
      echo json_encode('SUCCESS');
    } else {
      echo json_encode('ERROR');
      // 
      // echo json_decode($textSendStatus);
    }
  } else {
    echo json_encode('NOTVALID');
  }
} else {
  header("Location: /");
}
