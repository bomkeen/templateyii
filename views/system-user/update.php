<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SystemUser */

$this->title = 'แก้ไขข้อมูลของ : ' . $model->fullname;
$this->params['breadcrumbs'][] = ['label' => 'System Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="system-user-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
