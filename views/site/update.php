<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\manager\models\MenuItemsModel */

$this->title = 'Update Menu Items Model: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Menu Items Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-items-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
