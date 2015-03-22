<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Comment1 */

$this->title = 'Create Comment1';
$this->params['breadcrumbs'][] = ['label' => 'Comment1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
