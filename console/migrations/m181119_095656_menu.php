<?php

use yii\db\Migration;

/**
 * Class m181119_095656_menu
 */
class m181119_095656_menu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('menu',[
            'id'=>$this->primaryKey(),
            'name'=>$this->string(128)->notNull(),
            'parent'=>$this->integer(11)->defaultValue(null),
            'route'=>$this->string(256)->defaultValue(null),
            'order'=>$this->integer(11)->defaultValue(null),
            'data'=>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181119_095656_menu cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181119_095656_menu cannot be reverted.\n";

        return false;
    }
    */
}
