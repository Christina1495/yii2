<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comment1 */

$this->title = 'Update Comment1: ' . ' ' . $model->id_com;
$this->params['breadcrumbs'][] = ['label' => 'Comment1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_com, 'url' => ['view', 'id' => $model->id_com]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comment1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>