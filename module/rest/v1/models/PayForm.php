<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 4/13/16
 * Time: 12:14 PM
 */

namespace app\module\rest\v1\models;

use app\models\Balances;
use Yii;
use yii\base\Model;


class PayForm extends Model
{
    public $amount;
    public $email;
    public $name;
    public $orderId;
    public $hashCode;
    public $mobile;
    public $description;
    public $domain;
    public $consumer_key;
    public $callback;
    

    public function rules()
    {
        return [
            [['amount', 'email', 'orderId', 'hashCode'], 'required'],
            [['mobile'], 'checkMobile'],
            ['email','email'],
            [['name', 'description'],'safe']
        ];
    }

    public function checkMobile($attribute, $params)
    {
        if(!preg_match("/^[0-9]{11}$/", $this->$attribute)) {
            $this->addError($attribute, \Yii::t('app', 'wrong input'));
        }
    }

    public function attributeLabels()
    {
        return [
            'username' => \Yii::t('app', 'username'),
            'password' => \Yii::t('app', 'password'),
        ];
    }
    
    public function pay()
    {

        $row = Balances::find()->where(['id' => $this->orderId])->one();
        $flag = true;

        if($row){
            $db_order_id = $row['id'];
            $db_user_id = $row['user_id'];
            $db_amount = $row['amount'];
            $db_status = $row['status'];
            $db_hash_code = md5(md5($db_order_id.$db_user_id.$db_amount.$db_status));

        }else {
            $flag = false;
        }
        
        if ($flag && $this->amount == $db_amount && $this->hashCode == $db_hash_code) {

            $ch = curl_init(Yii::$app->params['ch']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('consumer_key' => $this->consumer_key,
                'amount' 		=> $this->amount,
                'email' 		=> $this->email,
                'name' 			=> $this->name,
                'orderid' 		=> $this->orderId,
                'callback' 		=> $this->callback ,
                'mobile' 		=> $this->mobile,
                'description' 	=> $this->description)));
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            $resp = curl_exec($ch);

            curl_close($ch);
            $resp = json_decode($resp);
            if($resp->status == 'response')
            {
                header("Location: ".Yii::$app->params['responseUrl'].$resp->token);
                die;
            } else {
                echo 'Error in calling method Pay.Payment.Request...';
            }
        }else{
            echo "error !!!";
        }

    }

}