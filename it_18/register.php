<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <?php
 include 'nav.php';
 nav(2);
 ?>
<div class="register">
 <!-- Указываем в каком файле будет обрабатываться регистрация -->
 <form action="regisraction.php" class="form">
 <!-- рисуем поля -->
<input type="text" placeholder="ФИО">
 <input type="text" placeholder="Логин">
<input type="email" placeholder="Эл.почта">
<input type="password" placeholder="Пароль">
<input type="password" placeholder="Повтор пароля">
 <label><input type="checkbox">Согласие на обработку перс.данных</label>
 <button>Зарегистрировать</button>
</form>
 </div>
</body>
</html>

