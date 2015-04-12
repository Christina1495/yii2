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

    <?php
    foreach($dataProvider->models as $comment){?>
        <fieldset style="border: 5px solid #008080;
            padding: 10px; "> <br>
            <legend>
                <div>
                    <?php echo $comment ->Name_user ?>
                  <h7> <small> <?php echo "Дата:". $comment->date_mes ?></small></h7>
                </div>
            </legend>
            <? echo $comment->text?>
        </fieldset>
    <?php } ?>
<br>
    <p>
        <?= Yii::$app->user->isGuest ?
            Html::a('Вход', ['/user/login'], ['class' => 'btn btn-success']):
            Html::a('Оставить комментарий', ['create'], ['class' => 'btn btn-success'])?>
    </p>

</div>
