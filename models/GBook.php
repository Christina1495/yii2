<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "g_book".
 *
 * @property string $id
 * @property string $login
 * @property string $password
 * @property string $email
 * @property string $name
 * @property string $city
 */
class GBook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'g_book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password', 'email', 'name', 'city'], 'required'],
            [['login', 'city'], 'string', 'max' => 30],
            [['password', 'email'], 'string', 'max' => 50],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Логин',
            'password' => 'Пароль',
            'email' => 'Email',
            'name' => 'Имя',
            'city' => 'Город',
        ];
    }
}
