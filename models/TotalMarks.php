<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "total_marks".
 *
 * @property int $total_marks
 * @property int $academic_year_semester
 * @property int $marks
 * @property int $examination
 *
 * @property AcademicYearSemester $academicYearSemester
 * @property Examination $examination0
 */
class TotalMarks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'total_marks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['academic_year_semester', 'marks', 'examination'], 'required'],
            [['academic_year_semester', 'marks', 'examination'], 'integer'],
            [['academic_year_semester'], 'exist', 'skipOnError' => true, 'targetClass' => AcademicYearSemester::className(), 'targetAttribute' => ['academic_year_semester' => 'academic_year_semester_id']],
            [['examination'], 'exist', 'skipOnError' => true, 'targetClass' => Examination::className(), 'targetAttribute' => ['examination' => 'examination']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'total_marks' => 'Total Marks',
            'academic_year_semester' => 'Academic Year Semester',
            'marks' => 'Marks',
            'examination' => 'Examination',
        ];
    }

    /**
     * Gets query for [[AcademicYearSemester]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicYearSemester()
    {
        return $this->hasOne(AcademicYearSemester::className(), ['academic_year_semester_id' => 'academic_year_semester']);
    }

    /**
     * Gets query for [[Examination0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExamination0()
    {
        return $this->hasOne(Examination::className(), ['examination' => 'examination']);
    }
}
