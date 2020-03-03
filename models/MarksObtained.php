<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marks_obtained".
 *
 * @property int $marks_obtained
 * @property int $marks
 * @property int $student
 * @property int $total_marks
 *
 * @property Student $student0
 */
class MarksObtained extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marks_obtained';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marks', 'student', 'total_marks'], 'required'],
            [['marks', 'student', 'total_marks'], 'integer'],
            [['student'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student' => 'student_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'marks_obtained' => 'Marks Obtained',
            'marks' => 'Marks',
            'student' => 'Student',
            'total_marks' => 'Total Marks',
        ];
    }

    /**
     * Gets query for [[Student0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent0()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student']);
    }
}
