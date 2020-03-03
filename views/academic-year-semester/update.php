<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AcademicYearSemester */

$this->title = 'Update Academic Year Semester: ' . $model->academic_year_semester_id;
$this->params['breadcrumbs'][] = ['label' => 'Academic Year Semesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->academic_year_semester_id, 'url' => ['view', 'id' => $model->academic_year_semester_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="academic-year-semester-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
