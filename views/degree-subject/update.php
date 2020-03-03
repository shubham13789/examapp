<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DegreeSubject */

$this->title = 'Update Degree Subject: ' . $model->degree_subject_id;
$this->params['breadcrumbs'][] = ['label' => 'Degree Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->degree_subject_id, 'url' => ['view', 'id' => $model->degree_subject_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="degree-subject-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
