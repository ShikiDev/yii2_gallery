<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m191013_210343_addImageCollection
 */
class m191013_210343_addImageCollection extends Migration
{
    public function up(){
        $this->createTable('images_collection',[
            'id' => $this->bigPrimaryKey(16),
            'img_file' => $this->string('255')->notNull(),
            'email' => $this->string('255')->notNull(),
            'describe' => $this->text(),
            'user_id' => $this->integer(11)->defaultValue(0),
            'added' => $this->dateTime()->notNull(),
            'deleted' => $this->integer(2)->defaultValue(0)
        ],'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');

        return true;
    }

    public function down(){
        $this->dropTable('images_collection');
        return true;
    }
}
