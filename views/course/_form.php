<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Degree;
use app\models\Subject;

/* @var $this yii\web\View */
/* @var $model app\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'degree_subject_id')
    ->DropDownList(ArrayHelper::map(
        \app\models\DegreeSubject::find()->asArray()->all(),
        'degree_subject_id',
        function($model) {
            $model1 = Degree::find()
           ->select('name')
           ->where(['degree_id' => $model['degree_id']])
           ->one();
           $model2 = Subject::find()
           ->select('name')
           ->where(['subject_id' => $model['subject_id']])
           ->one();
            
            return $model1->name.' - '.$model2->name;
        }
    ))?> 




    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
