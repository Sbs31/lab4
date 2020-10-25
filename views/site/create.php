<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\manager\models\MenuItemsModel */

$this->title = 'Create Menu Items Model';
$this->params['breadcrumbs'][] = ['label' => 'Menu Items Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-items-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
