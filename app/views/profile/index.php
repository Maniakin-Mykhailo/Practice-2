
<?php if (!empty($_SESSION['user']['avatar'])) {
    ?>
    <img src="/public/uploads/<?php print_r($_SESSION['user']['avatar']) ?>" width="200" height="200" alt="">
    <?php
} else{?>
    <img src="/public/uploads/default/default.jpg" width="200" height="200" alt="">
    <?php
}
?>
    <form action="/profile/profile" method="post" enctype="multipart/form-data">

        <label>Текущее имя : <?php print_r($_SESSION['user']['name']) ?></label>
        <input type="text" name="name" placeholder="Введите новое имя">
        <button type="submit" name="change_name">Изменить имя</button>

        <label>Текущий логин : <?php print_r($_SESSION['user']['login']) ?></label>
        <input type="text" name="login" placeholder="Введите новый логин">
        <button type="submit" name="change_login">Изменить логин</button>

        <label>Текущий email : <?php print_r($_SESSION['user']['email']) ?></label>
        <input type="text" name="email" placeholder="Введите новый адрес электронной почты">
        <button type="submit" name="change_email">Изменить email</button>

        <input type="password" name="password" placeholder="Введите новый пароль">
        <button type="submit" name="change_password">Изменить пароль</button>
        <label>Изображение профиля</label>

        <input type="file" name="avatar" placeholder="Загрузите изображение профиля">
        <button type="submit" name="change_avatar">Изменить аватар</button>

    </form>
