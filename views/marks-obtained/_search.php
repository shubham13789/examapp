<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MarksObtainedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marks-obtained-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'marks_obtained') ?>

    <?= $form->field($model, 'marks') ?>

    <?= $form->field($model, 'student') ?>

    <?= $form->field($model, 'total_marks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
