<?php

use yii\db\Schema;
use yii\db\Migration;

class m150814_054820_texts extends Migration
{
    public function safeUp()
    {
	    $this->createTable('text', [
		    'id' => $this->primaryKey(),
		    'title' => $this->string()->notNull(),
		    'content' => $this->text(),
	    ]);
    }

    public function safeDown()
    {
        $this->dropTable('text');

        return false;
    }
}
