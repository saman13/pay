<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $title
 * @property string $level
 * @property string $real_name
 * @property string $password
 * @property string $gender
 * @property string $location
 * @property string $permissions
 * @property string $chips_transfer
 * @property string $chips_accept
 * @property string $chat
 * @property string $chat_color1
 * @property string $chat_color2
 * @property string $email
 * @property string $val_code
 * @property integer $avatar
 * @property string $avatar_file
 * @property string $custom
 * @property string $note
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['avatar'], 'integer'],
            [['username', 'title', 'level', 'real_name', 'password', 'gender', 'location', 'permissions', 'chips_transfer', 'chips_accept', 'chat', 'chat_color1', 'chat_color2', 'email', 'val_code', 'avatar_file', 'custom', 'note'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'title' => 'Title',
            'level' => 'Level',
            'real_name' => 'Real Name',
            'password' => 'Password',
            'gender' => 'Gender',
            'location' => 'Location',
            'permissions' => 'Permissions',
            'chips_transfer' => 'Chips Transfer',
            'chips_accept' => 'Chips Accept',
            'chat' => 'Chat',
            'chat_color1' => 'Chat Color1',
            'chat_color2' => 'Chat Color2',
            'email' => 'Email',
            'val_code' => 'Val Code',
            'avatar' => 'Avatar',
            'avatar_file' => 'Avatar File',
            'custom' => 'Custom',
            'note' => 'Note',
        ];
    }
}
