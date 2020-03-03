<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TotalMarks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="total-marks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'academic_year_semester')->textInput() ?>

    <?= $form->field($model, 'marks')->textInput() ?>

    <?= $form->field($model, 'examination')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
