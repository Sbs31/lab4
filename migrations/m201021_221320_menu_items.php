<?php

use yii\db\Migration;

/**
 * Class m201021_221320_menu_items
 */
class m201021_221320_menu_items extends Migration
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
        echo "m201021_221320_menu_items cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('menu_items', [
                'id' => $this->primaryKey(10),
                'name' => $this->string()->notNull(),
                'status' => $this->tinyInteger(1)->defaultValue('1'),
                'menu_id' => $this->Integer(11),
                'parent_id' => $this->Integer(11),

            ]);
    }

    public function down()
    {
        $this->dropTable('menu_items');
    }
}
