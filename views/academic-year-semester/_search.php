<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AcademicYearSemesterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-year-semester-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'academic_year_semester_id') ?>

    <?= $form->field($model, 'academic_year_id') ?>

    <?= $form->field($model, 'semester_id') ?>

    <?= $form->field($model, 'course_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
