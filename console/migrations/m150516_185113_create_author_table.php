<?php

use yii\db\Schema;
use yii\db\Migration;

class m150516_185113_create_author_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('author', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'mail' => Schema::TYPE_STRING,
        ]);

        $this->insert('author', [
            'name' => 'author 1',
            'mail' => 'author1@yandex.ru',
        ]);

    }

    public function safeDown()
    {
        $this->delete('author', ['id' => 1]);
        $this->dropTable('author');
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
