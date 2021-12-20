<?php
if (isset($posts)):
    foreach ($posts as $post): ?>

        <div class="post">
           <h2> <?php echo $post['title'] ?></h2>
        </div>
        <div class="post">
            <?php echo $post['text'] ?>
        </div>


    <?php
    endforeach;
endif; ?>
