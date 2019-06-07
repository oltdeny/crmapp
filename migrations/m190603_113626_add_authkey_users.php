<?php

use yii\db\Migration;

/**
 * Class m190603_113626_add_authkey_users
 */
class m190603_113626_add_authkey_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'auth_key', 'string UNIQUE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190603_113626_add_authkey_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190603_113626_add_authkey_users cannot be reverted.\n";

        return false;
    }
    */
}
