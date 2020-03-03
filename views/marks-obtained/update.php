<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MarksObtained */

$this->title = 'Update Marks Obtained: ' . $model->marks_obtained;
$this->params['breadcrumbs'][] = ['label' => 'Marks Obtaineds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->marks_obtained, 'url' => ['view', 'id' => $model->marks_obtained]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marks-obtained-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
