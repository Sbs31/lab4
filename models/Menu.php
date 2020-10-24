<?php

namespace app\modules\manager\models;

use app\modules\manager\models\MenuModel;
use app\modules\manager\models\MenuItemsModel;


class Menu
{
    private static function getMenuItemsTop($nameMenu)
    {
        $items = [];

        $code = $nameMenu;

        $query_menu = Menu::find()
            ->andWhere(['code' => $code, 'status' => 1])
            ->one();

        $query = MenuItemsModel::find()
            ->andWhere([
                'menu_id' => $query_menu->id,
                'status' => 1
            ])
            ->all();

        foreach ($query as $item)
        {
            if ( empty($items[$item->parent_id]) )
            {
                $items[$items->parent_id] = [];
            }

            $items[$item->parent_id][] = $item->attributes;
        }

        return $items;
    }


    /*
     * @inheritdoc
     */
    public static function viewMenuItemsTop($nameMenu, $parentId = 0)
    {
        $array = self::getMenuItemsTop($nameMenu);

        if ( empty($array[$parentId]) ) { return; }

        for ( $i = 0; $i < count($array[$parentId]); $i++ )
        {
            $result[] = [
                'label' => $array[$parentId][$i]['name'],
                'url' => [$array[$parentId][$i]['url_item'].'/index'],
                'items' => self::viewMenuItemsTop($array[$parentId][$i]['id'], $nameMenu)
            ];
        }

        return $result;
    }
}