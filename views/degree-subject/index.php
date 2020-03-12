<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DegreeSubjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Degree Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="degree-subject-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Degree Subject', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'autoXlFormat'=>true,
        
        
        'export'=>[
        'label' => 'Export',
        'fontAwesome'=>true,
        'showConfirmAlert'=>false,
        'target'=>GridView::TARGET_BLANK
        ],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
            
            //'degree_subject_id',
            [
                'label' => 'Degree',
                'value' => 'degree.name',
                'attribute' => 'degree_id',
            ],
            [
                'label' => 'Subject',
                'value' => 'subject.name',
                'attribute' => 'subject_id',
            ],
            [
                'label' => 'Department',
                'value' => 'department.name',
                'attribute' => 'department_id',
            ],
           

           
            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'pjax'=>true,
        'showPageSummary'=>true,
        'panel'=>[
            
            'heading'=> $this->title,
           
        ]
    ]); ?>


</div>
