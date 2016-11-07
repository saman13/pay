<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "balances".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $username
 * @property string $type
 * @property integer $amount
 * @property string $option
 * @property integer $status
 * @property string $datetime
 * @property string $refcode
 * @property string $tran_id
 * @property string $errorcode
 * @property string $gateway_status
 * @property integer $getway_time
 */
class Balances extends \yii\db\ActiveRecord
{
    public $hash_code;
    public $order_id;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'balances';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'amount', 'status', 'getway_time', 'id'], 'integer'],
            [['datetime'], 'safe'],
            [['username', 'type', 'option', 'refcode', 'tran_id', 'errorcode', 'gateway_status', 'hash_code'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'username' => 'Username',
            'type' => 'Type',
            'amount' => 'Amount',
            'option' => 'Option',
            'status' => 'Status',
            'datetime' => 'Datetime',
            'refcode' => 'Refcode',
            'tran_id' => 'Tran ID',
            'errorcode' => 'Errorcode',
            'gateway_status' => 'Gateway Status',
            'getway_time' => 'Getway Time',
        ];
    }

    public function actionPayPay()
    {
        

    }

}
