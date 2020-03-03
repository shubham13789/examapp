<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "academic_year_semester".
 *
 * @property int $academic_year_semester_id
 * @property int $academic_year_id
 * @property int $semester_id
 * @property int $course_id
 *
 * @property AcademicYear $academicYear
 * @property Courses $course
 * @property Semester $semester
 * @property TotalMarks[] $totalMarks
 */
class AcademicYearSemester extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'academic_year_semester';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['academic_year_id', 'semester_id', 'course_id'], 'required'],
            [['academic_year_id', 'semester_id', 'course_id'], 'integer'],
            [['academic_year_id'], 'exist', 'skipOnError' => true, 'targetClass' => AcademicYear::className(), 'targetAttribute' => ['academic_year_id' => 'academic_year_id']],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['course_id' => 'course_id']],
            [['semester_id'], 'exist', 'skipOnError' => true, 'targetClass' => Semester::className(), 'targetAttribute' => ['semester_id' => 'semester_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'academic_year_semester_id' => 'Academic Year Semester ID',
            'academic_year_id' => 'Academic Year ID',
            'semester_id' => 'Semester ID',
            'course_id' => 'Course ID',
        ];
    }

    /**
     * Gets query for [[AcademicYear]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicYear()
    {
        return $this->hasOne(AcademicYear::className(), ['academic_year_id' => 'academic_year_id']);
    }

    /**
     * Gets query for [[Course]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Courses::className(), ['course_id' => 'course_id']);
    }

    /**
     * Gets query for [[Semester]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSemester()
    {
        return $this->hasOne(Semester::className(), ['semester_id' => 'semester_id']);
    }

    /**
     * Gets query for [[TotalMarks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTotalMarks()
    {
        return $this->hasMany(TotalMarks::className(), ['academic_year_semester' => 'academic_year_semester_id']);
    }
}
