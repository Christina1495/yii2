<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    foreach($dataProvider->models as $comment){?>
        <fieldset style="border: 5px solid #008080;
            padding: 10px; "> <br>
            <legend>
                <div>
                    <?php echo $comment ->id ?>
                    <?php echo "Дата:". $comment->date_mes ?>
                </div>
            </legend>
            <? echo $comment->text?>
        </fieldset>
    <?php } ?>
    <br>
    <p>
        <?= Html::a('Create Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
