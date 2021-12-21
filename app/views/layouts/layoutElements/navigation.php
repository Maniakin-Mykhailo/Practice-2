
    <div class="nav">
        <a class="navLink" href="/">Главная</a>
        <a class="navLink" href="/post">Список постов</a>
        <?php
        if(!isset($_SESSION['user']))
        { ?>
            <a class="navLink" href="/registration">Регистрация</a>
            <a class="navLink" href="/login">Авторизация</a>
            <?php
        }
        else
        { ?>
            <a class="navLink" href="/profile"><?php  print_r($_SESSION['user']['login']) ?></a>
            <a class="navLink" href="/Profile/logout"> Выход</a>
        <?php } ?>

    </div>
