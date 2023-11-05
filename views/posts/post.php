<?php
require __DIR__.'/../../lib/load.php';
$load = new Load();
$posts = $load->post($id);
$text = base64_decode($posts[0]['text']);
?>
<div class="content">
    <div class="post">
        <h2><?php echo $posts[0]['name']; ?></h2>
        <?php echo $posts[0]['date']; ?><br>
        <?php echo $text; ?>
    </div> 
</div>