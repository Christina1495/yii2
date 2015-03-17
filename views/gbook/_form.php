<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GBook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 30]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Зарегистрироваться' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
