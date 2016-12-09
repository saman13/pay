<?php

namespace app\module\rest\v1\controllers;


use app\module\rest\v1\models\CallbackForm;
use app\module\rest\v1\models\PayForm;
use Yii;
use yii\filters\Cors;
use yii\rest\Controller;

class AuthController extends Controller
{


    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['corsFilter'] = [
            'class' => Cors::className(),
            'cors' => [
                'Origin' => ['*'],
                'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
                'Access-Control-Request-Headers' => ['*'],
                'Access-Control-Allow-Credentials' => true,
            ],
        ];

        return $behaviors;
    }

    public function actions()
    {
        return [
            'options' => [
                'class' => 'yii\rest\OptionsAction'
            ],
        ];
    }

    public function actionPay()
    {

        $model = new PayForm();
        $model->load(Yii::$app->getRequest()->getBodyParams(), '');
        
        $model->domain = Yii::$app->params['domain'];
        $model->consumer_key 		= Yii::$app->params['ckey'];
        $model->callback 			= $model->domain . 'auth/callback';

        $model->amount = 1000;
        $model->email ='ass@sa.sas';
        $model->orderId = 1;
        $model->hashCode = '66e1b1427a0e51f60e5a496b71574e1b';

        if(!$model->validate()){
            Yii::$app->getResponse()->setStatusCode(422);
            return $model->getErrors();
        }else{
            $model->pay();
        }
        
    }


    public function actionCallback()
    {
        $model = new CallbackForm();
        $model->load(Yii::$app->getRequest()->getBodyParams(), '');
        
        $model->consumer_key = Yii::$app->params['ckey'];

        if(!$model->validate()){
            Yii::$app->getResponse()->setStatusCode(422);
            return $model->getErrors();
        }else{
            $model->callback();
        }
    }
    
}
