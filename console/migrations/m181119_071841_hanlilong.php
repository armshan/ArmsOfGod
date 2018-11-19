<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m181119_071841_hanlilong
 */
class m181119_071841_hanlilong extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user',[
            'id'=>$this->primaryKey(),
             'username'=>$this->string(32)->notNull(),
             'auth_key'=>$this->string(32)->notNull(),
             'password_hash'=>$this->string(256)->notNull(),
             'password_reset_token'=>$this->string(32)->notNull(),
             'email'=>$this->string(256)->notNull(),
             'status'=>$this->integer()->notNull()->defaultValue(10),
             'created_at'=>$this->integer()->notNull(),
             'updated_at'=>$this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181119_071841_hanlilong cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181119_071841_hanlilong cannot be reverted.\n";

        return false;
    }
    */
}
