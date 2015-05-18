<?php

use yii\db\Schema;
use yii\db\Migration;

class m150517_130210_create_posts_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('posts', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
            'author_id' => Schema::TYPE_INTEGER,
        ]);

        $this->insert('posts', [
            'title' => 'News 1',
            'content' => 'Sample text !!!',
            'author_id' => 1,
        ]);

    }

    public function safeDown()
    {
        $this->delete('posts', ['id' => 1]);
        $this->dropTable('posts');
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
