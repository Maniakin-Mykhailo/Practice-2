<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="page">

<header class="header">
    <div class="nav">
        <a class="navLink" href="index.php">Главная</a>
        <a class="navLink" href="registration.php">Регистрация</a>
        <a class="navLink" href="login.php">Авторизация</a>
        <a class="navLink" href="postList.php">Список постов</a>
        <a class="navLink" href="profile.php">Профиль</a>
    </div>
</header>

<main class="main">
    <form action="" method="post" enctype="multipart/form-data">
        <label>Имя</label>
        <input type="text" name="name" placeholder="Введите свое имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
    </form>
</main>

<footer class="footer">
Im'm footer!
</footer>

</div>
</body>
</html>
