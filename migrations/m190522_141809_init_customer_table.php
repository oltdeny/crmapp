<?php

use yii\db\Migration;

/**
 * Class m190522_141809_init_customer_table
 */
class m190522_141809_init_customer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customers', [
            'id' => 'pk',
            'name' => 'string',
            'birth_date' => 'date',
            'notes' => 'text'
        ],
            'ENGINE=InnoDB'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('customers');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190522_141809_init_customer_table cannot be reverted.\n";

        return false;
    }
    */
}
