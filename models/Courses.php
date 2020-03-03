<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $course_id
 * @property string $name
 * @property string $code
 * @property int $degree_subject_id
 *
 * @property AcademicYearSemester[] $academicYearSemesters
 * @property DegreeSubject $degreeSubject
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'code', 'degree_subject_id'], 'required'],
            [['degree_subject_id'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['code'], 'string', 'max' => 20],
            [['degree_subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => DegreeSubject::className(), 'targetAttribute' => ['degree_subject_id' => 'degree_subject_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'course_id' => 'Course ID',
            'name' => 'Name',
            'code' => 'Code',
            'degree_subject_id' => 'Degree Subject ID',
        ];
    }

    /**
     * Gets query for [[AcademicYearSemesters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicYearSemesters()
    {
        return $this->hasMany(AcademicYearSemester::className(), ['course_id' => 'course_id']);
    }

    /**
     * Gets query for [[DegreeSubject]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDegreeSubject()
    {
        return $this->hasOne(DegreeSubject::className(), ['degree_subject_id' => 'degree_subject_id']);
    }
}
