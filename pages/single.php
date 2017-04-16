<?php

$post=\App\App::getDb()->prepare('select * from articles where id = ?',[$_GET['id']],'App\Table\Article',true);
//var_dump($post);
?>



<h1><?= $post->titre; ?></h1>


<p><?= $post->contenu; ?> </p>

