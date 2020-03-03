<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MarksObtainedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Marks Obtaineds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marks-obtained-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Marks Obtained', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'marks_obtained',
            'marks',
            'student',
            'total_marks',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
