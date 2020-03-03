<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "examination".
 *
 * @property int $examination
 * @property int $examination_type
 *
 * @property TotalMarks[] $totalMarks
 */
class Examination extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'examination';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['examination_type'], 'required'],
            [['examination_type'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'examination' => 'Examination',
            'examination_type' => 'Examination Type',
        ];
    }

    /**
     * Gets query for [[TotalMarks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTotalMarks()
    {
        return $this->hasMany(TotalMarks::className(), ['examination' => 'examination']);
    }
}
