<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];


    function name($name){
        if (empty($name)) {
            return "Поле не должно быть пустое";
            } elseif (strlen($name) < 5 || strlen($name) > 20) {
            return "Имя должно содержать от 5 до 20 символов";
            }
    }
    

    function email($email){
        if (empty($email)) {
            return "Поле не должно быть пустое";
            } elseif (strlen($email) < 5 || strlen($email) > 30) {
                return "Поле должно содержать от 5 до 30 символов";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return "Неверный формат почты";
            }
    }
    
    function phone($phone){
        if (empty($phone)) {
            return "Поле не должно быть пустое";
            } elseif (strlen($phone) != 11) {
                return "Поле должно содержать 11 символов";
            }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="qwe">
    <form method="post" >
        <label for="name">Имя</label>
        <input type="text" id="name" name="name">
        <? echo name($name);
        ?>
        <label for="email">Почта</label>
        <input type="email" id="email" name="email">
        <? echo email($email);
        ?>

        <label for="phone">Телефон</label>
        <input type="tel" id="phone" name="phone">
        <? echo phone($phone);
        ?>

        <input class="btn" type="submit" value="Кнопка">
        
    </form>
    
    </div>

    
</body>
</html>