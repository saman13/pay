<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banks".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $account_name
 * @property string $bank_name
 * @property integer $card_number
 * @property string $sheba
 * @property integer $mobile
 * @property integer $status
 */
class Banks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'card_number', 'mobile', 'status'], 'integer'],
            [['account_name', 'bank_name', 'sheba'], 'string', 'max' => 255],
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
            'account_name' => 'Account Name',
            'bank_name' => 'Bank Name',
            'card_number' => 'Card Number',
            'sheba' => 'Sheba',
            'mobile' => 'Mobile',
            'status' => 'Status',
        ];
    }
}
