<?php
require __DIR__.'/../lib/load.php';
$load = new Load();
$posts = $load->posts_10();
$news = $load->news_10();
?>
<div class="content">
    <div class="articles">
        <h2>> Последние статьи:</h2>
        <?php
            foreach($posts as $row) {
                $text = base64_decode($row['text']);
                echo '<h2 class="title_post title_link"><a href="/posts/'.$row['id'].'">'.$row['name'].'</a></h2><br>';
                echo $row['date'].'<br>';
                echo '<p>'.$text.'</p>';
            }
        ?>
    </div>
    <div class="articles">
        <h2>> Последние новости:</h2>
        <?php
            foreach($news as $row) {
                echo $row['date'].': <a href="/news/'.$row['id'].'">'.$row['name'].'</a><br>';
            }
        ?>
    </div>
</div>