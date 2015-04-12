<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id_com
 * @property string $Name_user
 * @property string $text
 * @property string $date_mes
 */
class Comment extends \yii\db\ActiveRecord
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
            [['Name_user', 'text'], 'required'],
            [['text'], 'string'],
            [['date_mes'], 'safe'],
            [['Name_user'], 'string', 'max' => 50],
            ['verifyCode', 'captcha'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_com' => 'Id Com',
            'Name_user' => 'Логин',
            'text' => 'Текст сообщения',
            'date_mes' => 'Дата добавление',
            'verifyCode' => 'Verification Code',

        ];
    }
}
