<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MarksObtained */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marks-obtained-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'marks')->textInput() ?>

    <?= $form->field($model, 'student')->textInput() ?>

    <?= $form->field($model, 'total_marks')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
