<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DegreeSubjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="degree-subject-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'degree_subject_id') ?>

    <?= $form->field($model, 'degree_id') ?>

    <?= $form->field($model, 'subject_id') ?>

    <?= $form->field($model, 'department_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
