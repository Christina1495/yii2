<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model app\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <? //$form->field($model, 'Name_user')->textInput(['maxlength' => 50]) ?>

    <?php
    Yii::$app->user->isGuest ?
       $model->Name_user = 0 : $model->Name_user = Yii::$app->user->identity->username;
    ?>
    <?//$form->field($model, 'Name_user')->hiddenInput(['rows' => 1])?>
    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>
    <?=
    Yii::$app->user->isGuest ?
    [$form->field($model, 'verifyCode')->widget(Captcha::className(), [
        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',])]:
        ['label' => ' ', 'url' => ['/site/error']]?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить комментарий' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
