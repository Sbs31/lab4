<?php


namespace app\modules\manager\models;


use yii\db\ActiveRecord;

class MenuItemsModel extends ActiveRecord
{
    public static function tableName()
    {
        return '{{menu_items}}';
    }
}