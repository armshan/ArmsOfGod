<?php

use yii\db\Migration;

/**
 * Class m181121_074308_test
 */
class m181121_074308_test extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('problem',[
            'ID'=>$this->primaryKey(),
            'CateId'=>$this->integer(),
            'Name'=>$this->string(255)->notNull()->unique(),
            'Content'=>$this->text(),
            'Sort'=>$this->integer()->defaultValue(1),
            'CreateTime'=>$this->dateTime()->defaultValue(date('Y-m-d H:i:s',time()))
        ]);
        $this->createTable('problem_cate',[
            'ID'=>$this->primaryKey(),
            'Name'=>$this->string(255)->notNull()->unique(),
            'Sort'=>$this->integer()->defaultValue(1),
            'CreateTime'=>$this->dateTime()->defaultValue(date('Y-m-d H:i:s',time()))
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181121_074308_test cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181121_074308_test cannot be reverted.\n";

        return false;
    }
    */
}
