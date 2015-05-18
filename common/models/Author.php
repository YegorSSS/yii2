<?php
namespace common\models;

use yii\db\ActiveRecord;

class Author extends ActiveRecord
{
	public function getNews()
	{
	    return $this->hasMany(News::className(), ['author_id' => 'id']);
	}
}