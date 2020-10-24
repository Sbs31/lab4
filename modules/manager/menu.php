<?php

namespace app\modules\manager;

use app\modules\manager\models\MenuItemsModel;


/**
 * Menu module definition class
<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $status
 * @property string $descriprion
 * @property string $updated_at
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    /**
     * {@inheritdoc}
     */

    public static function getMenuItems()
    {
        $arr_menu_items =  MenuItemsModel::find()->asArray()->all();
        if (!$arr_menu_items) {
            return false;
        }
        $result = array();
        foreach ($arr_menu_items as $row) {

            if (empty($result[$row['parent_id']])) {
                $result[$row['parent_id']] = array();
            }
            $result[$row['parent_id']][] = $row;
        }
        return $result;
    }

    public static function vewMenuItems($arr, $parent_id = 0)
    {

        if (empty($arr[$parent_id])) {
            return '';
        }
        $res = array();
        for ($i = 0; $i < count($arr[$parent_id]); $i++) {
            $res[] = [
                'label' => $arr[$parent_id][$i]['name'],

                'items' => self::vewMenuItems($arr,$arr[$parent_id][$i]['id'])
            ];
        }
        return $res;
    }
}
