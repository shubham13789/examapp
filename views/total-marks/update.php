<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TotalMarks */

$this->title = 'Update Total Marks: ' . $model->total_marks;
$this->params['breadcrumbs'][] = ['label' => 'Total Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->total_marks, 'url' => ['view', 'id' => $model->total_marks]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="total-marks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
