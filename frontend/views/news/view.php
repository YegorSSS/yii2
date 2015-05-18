<?php
use yii\helpers\Html;
?>


<h1><?= $news->title ?></h1>
<p>
	<?= $news->content ?>
</p>

<p class="text-right"><small><?= $news->author->name ?> </small></p>