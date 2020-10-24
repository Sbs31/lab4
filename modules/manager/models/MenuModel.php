<?php


namespace app\modules\manager\models;


use yii\db\ActiveRecord;

class MenuModel extends ActiveRecord
{
    public static function tableName()
    {
        return '{{menu}}';
    }
}