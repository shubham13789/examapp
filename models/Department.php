<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $department_id
 * @property string $name
 *
 * @property DegreeSubject[] $degreeSubjects
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
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
            'department_id' => 'Department ID',
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
        return $this->hasMany(DegreeSubject::className(), ['department_id' => 'department_id']);
    }
}
