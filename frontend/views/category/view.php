<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>


<?php foreach($category->news as $news): ?>

	<h2><a href='<?= Url::toRoute(['news/view', 'id' => $news->id]) ?>'><?= $news->title ?></a></h2>
	<p>
	<?= $news->content ?>
	</p>

<?php endforeach ?>


