<?php

use yii\db\Migration;

/**
 * Class m201021_221303_menu
 */
class m201021_221303_menu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201021_221303_menu cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(10),
            'name' => $this->string()->notNull(),
            'code' => $this->string()->notNull(),
            'status' => $this->tinyInteger(1)->defaultValue('1'),
            'descriprion' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('menu');
    }

}
