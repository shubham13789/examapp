<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MarksObtained */

$this->title = 'Create Marks Obtained';
$this->params['breadcrumbs'][] = ['label' => 'Marks Obtaineds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marks-obtained-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
