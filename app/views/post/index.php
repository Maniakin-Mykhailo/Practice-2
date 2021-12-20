<?php
if (isset($posts)):
    foreach ($posts as $dat):
        ?>
        <div class="post">
            <?php echo $dat ?>
        </div>
    <?php
    endforeach;
endif;
?>
