<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "semester".
 *
 * @property int $semester_id
 * @property int $semester
 *
 * @property AcademicYearSemester[] $academicYearSemesters
 */
class Semester extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'semester';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['semester'], 'required'],
            [['semester'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'semester_id' => 'Semester ID',
            'semester' => 'Semester',
        ];
    }

    /**
     * Gets query for [[AcademicYearSemesters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicYearSemesters()
    {
        return $this->hasMany(AcademicYearSemester::className(), ['semester_id' => 'semester_id']);
    }
}
