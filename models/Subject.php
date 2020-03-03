<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property int $subject_id
 * @property string $name
 *
 * @property DegreeSubject[] $degreeSubjects
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'subject_id' => 'Subject ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[DegreeSubjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDegreeSubjects()
    {
        return $this->hasMany(DegreeSubject::className(), ['subject_id' => 'subject_id']);
    }
}
