<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TotalMarksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="total-marks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'total_marks') ?>

    <?= $form->field($model, 'academic_year_semester') ?>

    <?= $form->field($model, 'marks') ?>

    <?= $form->field($model, 'examination') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
