<?php

use yii\db\Schema;
use yii\db\Migration;

class m150516_182332_create_news_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
            'author_id' => Schema::TYPE_INTEGER,
            'category_id' => Schema::TYPE_INTEGER,
        ]);

        $this->insert('news', [
            'title' => 'News 1',
            'content' => 'Sample text !!!',
            'author_id' => 1,
            'category_id' => 1,
        ]);

    }

    public function safeDown()
    {
        $this->delete('news', ['id' => 1]);
        $this->dropTable('news');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
