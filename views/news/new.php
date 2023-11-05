<?php
require __DIR__.'/../../lib/load.php';
$load = new Load();
$posts = $load->new($id);
$text = base64_decode($posts[0]['text']);
list($source, $source_name) = explode(' ', $posts[0]['source']);
?>
<div class="content">
    <div class="post">
        <h2><?php echo $posts[0]['name']; ?></h2>
        <?php echo $posts[0]['date']; ?> | <?php echo 'Источник: <a href="'.$source.'" >'.$source_name.'</a>' ?><br>
        <?php echo $text; ?>
    </div> 
</div>