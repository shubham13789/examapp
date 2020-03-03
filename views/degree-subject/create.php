<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DegreeSubject */

$this->title = 'Create Degree Subject';
$this->params['breadcrumbs'][] = ['label' => 'Degree Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="degree-subject-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
