<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 4/13/16
 * Time: 12:14 PM
 */

namespace app\module\rest\v1\models;

use app\models\User;
use Yii;
use yii\base\Model;
use app\models\Token;


class ActiveAccountForm extends Model
{
    public $token;

    public function rules()
    {
        return [
            [['token'], 'validateToken'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => \Yii::t('app', 'username'),
            'password' => \Yii::t('app', 'password'),
        ];
    }

    public function validateToken($attribute, $params)
    {
        $data = explode('-', $this->$attribute);
        $user = Token::getUser($data[1], Token::STATUS_NOT_USED);
        if(!$user){
            $this->addError($attribute, \Yii::t('app', 'invalid token'));
        }
    }

    public function active($user_id)
    {
        $user = User::find()->where(['id'=>$user_id])->one();
        $user->status = 1;
        $user->save();
        return $user;
    }

}