<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AcademicYearSemesterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Academic Year Semesters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-year-semester-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Academic Year Semester', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'academic_year_semester_id',
            'academic_year_id',
            'semester_id',
            'course_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
