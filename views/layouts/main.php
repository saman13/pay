<?php
$config = array(
    'title' => 'فروشگاه شارژ و خدمات برخط',
    'description' => 'خرید شارژ تلفن همراه، گیفت کارت، آنتی ویروس، مجوز عبور از طرح ترافیک و پرداخت قبوض',
    'keywords' => 'شارژ آسان تلفن همراه,شارژ موبایل,شارژ مستقیم,شارژ مستقیم,فروش شارژ,شارژ ایرانسل,شارژ همراه اول, رایتل,تالیا,کارت شارژ,شارژ مستقیم,خرید آنتی ویروس,خرید گیفت کارت,گیفت کارت آیتونز,گیفت کارت مایکروسافت,گیفت کارت گوگل پلی,گیفت کارت آمازون,گیفت کارت پلی استیشن,پرداخت قبوض,مجوز عبور از طرح ترافیک',
    'webserviceID' => 'XXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'
);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $config['description']; ?>" />
    <meta name="keywords" content="<?php echo $config['keywords']; ?>" />
    <link href="css/favicon.ico" type="image/x-icon" rel="icon" />
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web');?>/css/tinycircleslider.css" />
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web');?>/css/jquery.qtip.css" />
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web');?>/css/ion.rangeSlider.css" />
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web');?>/css/ion.rangeSlider.skinNice.css" />
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web');?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web');?>/css/help.css" />
    <link href="<?=Yii::getAlias('@web');?>/css/help.css" rel="stylesheet" type="text/css">
    <title><?php echo $config['title']; ?></title>
</head>
<body>
<div class="notify">
    <p class="description">جهت انتخاب خدمات روی آیکون های کوچک دور دایره کلیک نمایید.</p>
</div>
<div class="bgs">
    <div class="menu">
        <span class="support">پشتیبانی</span>
        <span class="help">راهنما</span>
    </div>
    <div class="container PIN">
        <div class="operators PIN">
            <div data-type="MTN" class="operator MTN"><i></i></div>
            <div data-type="MCI" class="operator MCI"><i></i></div>
            <div data-type="RTL" class="operator RTL"><i></i></div>
            <div data-type="TAL" class="operator TAL"><i></i></div>
        </div>
        <div id="left">
            <div id="logo-container">
            </div>
        </div>
        <div id="content">
            <?= $content ?>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div id="payment-process"></div>
<div class="cover"></div>
<div class="connecting"><p></p></div>
<script type="text/javascript" src="<?=Yii::getAlias('@web');?>/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?=Yii::getAlias('@web');?>/js/jquery.qtip.min.js"></script>
<script type="text/javascript" src="<?=Yii::getAlias('@web');?>/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="<?=Yii::getAlias('@web');?>/js/jquery.tinycircleslider.js"></script>
<script type="text/javascript" src="<?=Yii::getAlias('@web');?>/js/charge.js"></script>
<script type="text/javascript">
    var WebserviceID = <?php echo '"' . $config['webserviceID'] . '"'; ?>;
</script>
</body>
</html>