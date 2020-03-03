<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $teacher_id
 * @property string $name
 * @property string $id
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'name', 'id'], 'required'],
            [['teacher_id'], 'integer'],
            [['name'], 'string', 'max' => 25],
            [['id'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'name' => 'Name',
            'id' => 'ID',
        ];
    }
}
