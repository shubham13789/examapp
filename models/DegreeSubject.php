<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "degree_subject".
 *
 * @property int $degree_subject_id
 * @property int $degree_id
 * @property int $subject_id
 * @property int $department_id
 *
 * @property Courses[] $courses
 * @property Degree $degree
 * @property Department $department
 * @property Subject $subject
 */
class DegreeSubject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'degree_subject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['degree_id', 'subject_id', 'department_id'], 'required'],
            [['degree_id', 'subject_id', 'department_id'], 'integer'],
            [['degree_id'], 'exist', 'skipOnError' => true, 'targetClass' => Degree::className(), 'targetAttribute' => ['degree_id' => 'degree_id']],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'department_id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'subject_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'degree_subject_id' => 'Degree Subject ID',
            'degree_id' => 'Degree ID',
            'subject_id' => 'Subject ID',
            'department_id' => 'Department ID',
        ];
    }

    /**
     * Gets query for [[Courses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Courses::className(), ['degree_subject_id' => 'degree_subject_id']);
    }

    /**
     * Gets query for [[Degree]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDegree()
    {
        return $this->hasOne(Degree::className(), ['degree_id' => 'degree_id']);
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['department_id' => 'department_id']);
    }

    /**
     * Gets query for [[Subject]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['subject_id' => 'subject_id']);
    }
}
