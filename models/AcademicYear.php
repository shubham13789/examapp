<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "academic_year".
 *
 * @property int $academic_year_id
 * @property string $year
 *
 * @property AcademicYearSemester[] $academicYearSemesters
 */
class AcademicYear extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'academic_year';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year'], 'required'],
            [['year'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'academic_year_id' => 'Academic Year ID',
            'year' => 'Year',
        ];
    }

    /**
     * Gets query for [[AcademicYearSemesters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicYearSemesters()
    {
        return $this->hasMany(AcademicYearSemester::className(), ['academic_year_id' => 'academic_year_id']);
    }
}
