<?php


namespace app\modules\manager\models;


use yii\db\ActiveRecord;

class MenuItemsModel extends ActiveRecord
{
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'status', 'menu_id','parent_id','links'], 'required'],
            // email has to be a valid email address

        ];
    }


    public static function tableName()
    {
        return '{{menu_items}}';
    }
}
