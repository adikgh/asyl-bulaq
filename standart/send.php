<div class="block">
    <form action="" method="POST">
        <p>Форма для заявки</p>
        <p><?= $return ?></p>
        
        <input name="name" type="text" placeholder="Введите ваше имя" required>
        <input name="phone" type="tel" pattern="^[ 0-9]+$" placeholder="Введите ваш телефон" required>
        <input type="submit" value="Отправить">
    </form>
</div>

<?php

//проверяем наличие ПОСТ-параметров
if(!empty($_POST)){
    
    //проверяем наличие параметров нашей формы
    if (!empty($_POST['name']) && !empty($_POST['phone'])){
    
        //токен вашего бота
        $token = "6278358272:AAG9bxlhh7Ypr7l5UqZaZ4n9sUfmZViE2Lk";
        //имя чата, если публичный или id для приватного
        $chat = "@sitetestmyqtar"; 
    
        //название вашего товара
        $order = rand(0, 1000); 

        //данные из форм
        $name = $_POST['name'];
        $phone = $_POST['phone'];

        $txt = "New order: $order%0A";  

        if (
            fopen("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat&text=$txt", "") &&
            fopen("https://api.telegram.org/bot$token/sendContact?chat_id=$chat&phone_number=$phone&first_name=$name", "")
            ) {
            
            $return = 'Спасибо, Ваш заказ отправлен оператору!';
    
        } else {
        
            $return =  'Ошибка отправки!';
        }
    }
}
 
?>