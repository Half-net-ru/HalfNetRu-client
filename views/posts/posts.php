<?php
require __DIR__.'/../../lib/load.php';
$load = new Load();
$posts = $load->posts_all();
?>
<div class="content">
    <div class="article">
        <h2>Все статьи</h2>
        <?php
            foreach($posts as $row) {
                echo $row['date'].': <a href="/posts/'.$row['id'].'">'.$row['name'].'</a><br>';
            }
        ?>
    </div>
</div>