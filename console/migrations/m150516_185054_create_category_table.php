<?php

use yii\db\Schema;
use yii\db\Migration;

class m150516_185054_create_category_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
        ]);

        $this->insert('category', [
            'title' => 'Category 1',
            'content' => 'Sample text in category 1 !!!',
        ]);

    }

    public function safeDown()
    {
        $this->delete('category', ['id' => 1]);
        $this->dropTable('category');
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
