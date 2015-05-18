<?php
namespace frontend\widgets;


use Yii;
use yii\base\Widget;
use common\models\Category;
use yii\helpers\Html;

class Catalog extends Widget
{
	
	public $categories;

    public function run()
    {
       	$this->categories = Category::find()->indexBy('id')->orderBy('id')->all();
        return $this->render('catalog', ['categories' => $this->categories]);
    }



}