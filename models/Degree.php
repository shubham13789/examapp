<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "degree".
 *
 * @property int $degree_id
 * @property string $name
 *
 * @property DegreeSubject[] $degreeSubjects
 */
class Degree extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'degree';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'degree_id' => 'Degree ID',
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
        return $this->hasMany(DegreeSubject::className(), ['degree_id' => 'degree_id']);
    }
}
