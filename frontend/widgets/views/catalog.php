<?php
use yii\helpers\Url;
?>
<ul class="nav nav-pills nav-stacked">
<?php foreach($categories as $category): ?>


	<li>
	<a href='<?= Url::toRoute(['category/view', 'id' => $category->id]) ?>'><?= $category->title ?></a>
	</li>
<?php endforeach ?>

