<?php
require __DIR__.'/../../lib/load.php';
$load = new Load();
$posts = $load->news_all();
?>
<div class="content">
    <div class="article">
        <h2>Все новости</h2>
        <?php
            foreach($posts as $row) {
                echo $row['date'].': <a href="/news/'.$row['id'].'">'.$row['name'].'</a><br>';
            }
        ?>
    </div>
</div>