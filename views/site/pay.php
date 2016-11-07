<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Balances */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'AccountsIncBalance';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'pay-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'id')->textInput() ?>
    <?= $form->field($model, 'user_id')->textInput() ?>
    <?= $form->field($model, 'amount')->textInput() ?>
    <?= $form->field($model, 'status')->textInput() ?>
    <?= $form->field($model, 'hash_code')->textInput() ?>


    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('ok', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>





<!---->
<!--<form action="site/paypay" method="POST">-->
<!--    order_id : <input type="text" name="order_id"><br>-->
<!--    user_id : <input type="text" name="user_id"><br>-->
<!--    amount : <input type="text" name="amount"><br>-->
<!--    status : <input type="text" name="status"><br>-->
<!--    hash_code : <input type="text" name="hash_code"><br>-->
<!--    <input type="submit" value="submit">-->
<!--</form>-->