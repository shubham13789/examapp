<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TotalMarks */

$this->title = 'Create Total Marks';
$this->params['breadcrumbs'][] = ['label' => 'Total Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="total-marks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
