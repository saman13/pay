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


class CallbackForm extends Model
{
    public $consumer_key;
    public $orderId;
    public $refId;

    
    public function callback()
    {

        $res = 0;
        $this->orderId = $_POST['orderid'];
        $this->refId = $_POST['refid'];

        if ($_POST['refid'] == '10') {

            $balance = Balances::find()->where(['id' => $this->orderId])->one();
            $balance->ref_id =  $this->refId;
            $balance->save();

            $res=3;

            //echo '<br>Order : '. $this->orderId, '<br>failed<br>';
            //exit;

        } else {
            $post = array(
                'consumer_key' => $this->consumer_key,
                'orderid'      => $this->orderId,
                'refid'        => $this->refId
            );

            $ch = curl_init(Yii::$app->params['callbackResponseUrl']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            $resp = curl_exec($ch);
            curl_close($ch);
            $resp = json_decode($resp);
            if($resp->status == 'response')
            {
                if ($resp->code == 0)
                {

                    $balance = Balances::find()->where(['id' => $this->orderId])->one();
                    $balance->ref_id =  $this->refId;
                    $balance->datetime = time();
                    $balance->status = 1;

                    if($balance->save()){
                        $res=1;
                    }else{
                        $res=-1;
                    }
                    
                    echo 'Order ID : '. $_POST['orderid'];
                    echo '<br>The transaction was successful : '. $_POST['refid'];
                }
                else
                {

                    $balance = Balances::find()->where(['id' => $this->orderId])->one();
                    $balance->ref_id =  $this->refId;
                    if ($balance->save()){
                        $res=2;
                    }else{
                        $res=-2;
                    }

                    echo 'ErrorCode : '.$resp->code;
                    echo '<br>Order : '. $this->orderId, '<br>failed<br>';
                    //exit;
                }
            }
            else
            {
                $res=3;
                echo 'ErrorCode : '.$resp->status;
                echo '<br>Order : '. $this->orderId, '<br>failed<br>';
                //exit;
            }
        }

        header('Location: '.Yii::$app->params['callbackUrl'].'?id=' . $res);
        die;
    }

}