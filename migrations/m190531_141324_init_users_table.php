<?php

use yii\db\Migration;

/**
 * Class m190531_141324_init_users_table
 */
class m190531_141324_init_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => 'pk',
            'username' => 'string unique',
            'password' => 'string'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190531_141324_init_users_table cannot be reverted.\n";

        return false;
    }
    */
}
