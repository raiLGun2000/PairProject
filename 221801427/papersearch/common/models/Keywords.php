<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "keywords".
 *
 * @property integer $id
 * @property string $keyword
 * @property integer $frequency
 */
class Keywords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keywords';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keyword'], 'required'],
            [['frequency'], 'integer'],
            [['keyword'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keyword' => 'Keyword',
            'frequency' => 'Frequency',
        ];
    }
}
