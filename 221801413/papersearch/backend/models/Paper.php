<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paper".
 *
 * @property integer $id
 * @property string $title
 * @property string $abstract
 * @property string $conference
 * @property string $keywords
 * @property string $release_time
 * @property string $link
 */
class Paper extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paper';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'conference', 'release_time', 'link'], 'required'],
            [['title', 'abstract', 'keywords'], 'string'],
            [['conference', 'release_time', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'abstract' => 'Abstract',
            'conference' => 'Conference',
            'keywords' => 'Keywords',
            'release_time' => 'Release Time',
            'link' => 'Link',
        ];
    }
}
