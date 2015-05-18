<?php
namespace common\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
	public function getNews()
	{
	    return $this->hasMany(News::className(), ['category_id' => 'id']);
	}
}