<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $student_id
 * @property string $name
 * @property string $roll_no
 * @property string $class
 *
 * @property MarksObtained[] $marksObtaineds
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'roll_no', 'class'], 'required'],
            [['name'], 'string', 'max' => 256],
            [['roll_no'], 'string', 'max' => 20],
            [['class'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'name' => 'Name',
            'roll_no' => 'Roll No',
            'class' => 'Class',
        ];
    }

    /**
     * Gets query for [[MarksObtaineds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarksObtaineds()
    {
        return $this->hasMany(MarksObtained::className(), ['student' => 'student_id']);
    }
}
