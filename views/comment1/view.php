<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Comment1 */

$this->title = $model->id_com;
$this->params['breadcrumbs'][] = ['label' => 'Comment1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_com], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_com], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_com',
            'id',
            'text:ntext',
            'date_mes',
        ],
    ]) ?>

</div>
