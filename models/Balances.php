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
 * @property integer $ref_id
 */
class Balances extends \yii\db\ActiveRecord
{
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
            [['user_id', 'amount', 'status', 'ref_id'], 'integer'],
            [['datetime'], 'safe'],
            [['username', 'type', 'option'], 'string', 'max' => 255],
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
            'ref_id' => 'Ref ID',
        ];
    }
}
