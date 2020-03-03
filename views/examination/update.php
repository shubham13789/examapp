<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Examination */

$this->title = 'Update Examination: ' . $model->examination;
$this->params['breadcrumbs'][] = ['label' => 'Examinations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->examination, 'url' => ['view', 'id' => $model->examination]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="examination-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
