<?php
include "data.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="page">
    <?php
    require "header.php";
    ?>

<main class="main">
<?php
if (isset($data)):
foreach ($data as $dat):
?>
<div class="post">
    <?php echo $dat ?>
</div>
<?php
endforeach;
endif;
?>

</main>

    <?php
    require "footer.php";
    ?>

</div>
</body>
</html>