<?php
namespace common\models;

use yii\db\ActiveRecord;

class News extends ActiveRecord
{
	public function getCategory()
	{
	    return $this->hasOne(Category::className(), ['id' => 'category_id']);
	}

	public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }
}