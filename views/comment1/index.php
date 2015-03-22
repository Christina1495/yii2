<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Comment1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Администрирование комментариев';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Comment1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text:ntext',
            'date_mes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
