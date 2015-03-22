<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id_com
 * @property integer $id
 * @property string $text
 * @property string $date_mes
 */
class Comment1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'text'], 'required'],
            [['id'], 'integer'],
            [['text'], 'string'],
            [['date_mes'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_com' => 'Id Com',
            'id' => 'ID',
            'text' => 'Text',
            'date_mes' => 'Date Mes',
        ];
    }
}
