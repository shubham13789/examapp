<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Examination */

$this->title = 'Create Examination';
$this->params['breadcrumbs'][] = ['label' => 'Examinations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examination-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
