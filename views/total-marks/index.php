<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TotalMarksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Total Marks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="total-marks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Total Marks', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'total_marks',
            'academic_year_semester',
            'marks',
            'examination',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
