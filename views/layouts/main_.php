<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="<?= Yii::$app->language ?>"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="<?= Yii::$app->language ?>"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="<?= Yii::$app->language ?>"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="<?= Yii::$app->language ?>"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="<?= Yii::$app->language ?>"> <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="description" content=" | "/>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=Yii::getAlias('@web');?>/images/favicon.ico" type="image/x-icon"/>
    <link rel="pingback" href="xmlrpc.html"/>
    <link rel="alternate" type="application/rss+xml" title="Casino" href="feed/index.html"/>
    <link rel="alternate" type="application/atom+xml" title="Casino" href="feed/atom/index.html"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?=Yii::getAlias('@web');?>/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?=Yii::getAlias('@web');?>/css/responsive.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?=Yii::getAlias('@web');?>/css/camera.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?=Yii::getAlias('@web');?>/css/style.css"/>
    <link rel="alternate" type="application/rss+xml" title="Casino &raquo; Feed" href="feed/index.html"/>
    <link rel="alternate" type="application/rss+xml" title="Casino &raquo; Comments Feed" href="comments/feed/index.html"/>
    <link rel="alternate" type="application/rss+xml" title="Casino &raquo; Home Comments Feed" href="home/feed/index.html"/>
    <style type="text/css">img.wp-smiley,img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-0.1em!important;background:none!important;padding:0!important;}</style>
    <link rel='stylesheet' id='flexslider-css' href='<?=Yii::getAlias('@web');?>/css/flexslider3601.css?ver=2.2.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='owl-carousel-css' href='<?=Yii::getAlias('@web');?>/css/owl.carousel8a28.css?ver=1.24' type='text/css' media='all'/>
    <link rel='stylesheet' id='owl-theme-css' href='<?=Yii::getAlias('@web');?>/css/owl.theme8a28.css?ver=1.24' type='text/css' media='all'/>
    <link rel='stylesheet' id='font-awesome-css' href='<?=Yii::getAlias('@web');?>/css/font-awesomedeae.css?ver=3.2.1' type='text/css' media='all'/>
    <link rel='stylesheet' id='cherry-plugin-css' href='<?=Yii::getAlias('@web');?>/css/cherry-plugin4281.css?ver=1.2.7' type='text/css' media='all'/>
    <link rel='stylesheet' id='cherry-lazy-load-css' href='<?=Yii::getAlias('@web');?>/css/lazy-load5152.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='contact-form-7-css' href='<?=Yii::getAlias('@web');?>/css/styles50fa.css?ver=4.2.1' type='text/css' media='all'/>
    <link rel='stylesheet' id='theme55168-css' href='<?=Yii::getAlias('@web');?>/css/main-style.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='magnific-popup-css' href='<?=Yii::getAlias('@web');?>/css/magnific-popup81c3.css?ver=0.9.3' type='text/css' media='all'/>
    <link rel='stylesheet' id='options_typography_Roboto+Condensed-css' href='<?=Yii::getAlias('@web');?>/css/css76b5.css?family=Roboto+Condensed&amp;subset=latin' type='text/css' media='all'/>
    <link rel='stylesheet' id='options_typography_Asap-css' href='<?=Yii::getAlias('@web');?>/css/cssf2ab.css?family=Asap&amp;subset=latin' type='text/css' media='all'/>
    <link rel='stylesheet' id='options_typography_Droid+Sans-css' href='<?=Yii::getAlias('@web');?>/css/css9101.css?family=Droid+Sans&amp;subset=latin' type='text/css' media='all'/>
    <script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery-1.7.2.minba3a.js?ver=1.7.2'></script>
    <script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery.easing.1.34e44.js?ver=1.3'></script>
    <script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery.elastislide4281.js?ver=1.2.7'></script>
    <script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/parallaxSlider5152.js?ver=1.0'></script>
    <script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/smoothing-scroll5152.js?ver=1.0'></script>
    <script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery-migrate-1.2.1.min1576.js?ver=1.2.1'></script>
    <script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/swfobjecteb77.js?ver=2.2-20120417'></script>
    <script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/modernizr1717.js?ver=2.0.6'></script>
    <script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jflickrfeed5152.js?ver=1.0'></script>
    <script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/custom5152.js?ver=1.0'></script>
    <script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/bootstrap.mina1ec.js?ver=2.3.0'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.html"/>
    <meta name="generator" content="WordPress 4.2.9"/>
    <link rel='canonical' href='index.html'/>
    <link rel='shortlink' href='index.html'/>
    <script>
        var system_folder = 'wp-content/themes/CherryFramework/admin/data_management/index.html',
            CHILD_URL ='wp-content/themes/theme55168.html',
            PARENT_URL = 'wp-content/themes/CherryFramework.html',
            CURRENT_THEME = 'theme55168'</script>
    <style type='text/css'></style>
    <style type='text/css'>h1{font-size:26px;color:#FFFFFF;}h2{font:normal 24px/26px Roboto Condensed;color:#FFFFFF;}h3{font:normal 13px/18px Asap;color:#FFFFFF;}h4{font:normal 14px/20px Arial,Helvetica,sans-serif;color:#FFFFFF;}h5{font:normal 12px/16px Droid Sans;color:#FFFFFF;}h6{font:normal 12px/18px Arial,Helvetica,sans-serif;color:#FFFFFF;}body{font-weight:normal;}.logo_h__txt,.logo_link{font:normal 40px/48px Arial,Helvetica,sans-serif;color:#FFFFFF;}.sf-menu>li>a{font:normal 15px/20px Roboto Condensed;color:#FFFFFF;}.nav.footer-nav a{font:normal 12px/18px Droid Sans;color:#f7f8f3;}</style>
    <script src="<?=Yii::getAlias('@web');?>/js/jquery.mobile.customized.min.js" type="text/javascript"></script>

</head>
<body class="home page page-id-203 page-template page-template-page-home page-template-page-home-php">
<?php $this->beginBody() ?>
<div id="motopress-main" class="main-holder">

    <header class="motopress-wrapper header">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="wrapper/wrapper-header.php" data-motopress-wrapper-type="header" data-motopress-id="57947c9a6f826">
                    <div class="extra_head">
                        <div class="extra_head2">
                            <div class="row">
                                <div class="span4" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">

                                    <div class="logo pull-left">
                                        <a href="index.html" class="logo_h logo_h__img"><img src="<?=Yii::getAlias('@web');?>/images/logo.png" alt="Casino" title=""></a>
                                    </div>
                                </div>
                                <div class="span8">
                                    <div class="menu_holder" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">

                                        <nav class="nav nav__primary clearfix">
                                            <ul id="topnav" class="sf-menu"><li id="menu-item-1999" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-203 current_page_item"><?= Html::a('خانه', ['/site/index']) ?></li>
                                                <li id="menu-item-2002" class="menu-item menu-item-type-post_type menu-item-object-page"><?= Html::a('About', ['/site/about']) ?></li>
                                                <li id="menu-item-2001" class="menu-item menu-item-type-post_type menu-item-object-page"><?= Html::a('Play', ['/site/play']) ?></li>
                                                <li id="menu-item-1998" class="menu-item menu-item-type-post_type menu-item-object-page"><?= Html::a('News', ['/site/news']) ?></li>
                                                <li id="menu-item-1996" class="menu-item menu-item-type-post_type menu-item-object-page"><?= Html::a('FAQ', ['/site/faq']) ?></li>
                                                <?php
                                                if(Yii::$app->user->isGuest) {
                                                    echo '<li id="menu-item-1997" class="menu-item menu-item-type-post_type menu-item-object-page">'; echo Html::a('Login', ['/site/login']); echo '</li>';
                                                } else {
                                                    echo '<li id="menu-item-1997" class="menu-item menu-item-type-post_type menu-item-object-page">'; echo Html::a('Profile', ['/site/profile']); echo '</li>';
                                                    echo '<li id="menu-item-1998" class="menu-item menu-item-type-post_type menu-item-object-page"><a id="logout" href="#">';
                                                    echo 'Logout</a></li>';
                                                    echo Html::beginForm(['/site/logout'], 'post', array('id' => 'logout_form'));
                                                    //echo Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')');
                                                    echo Html::endForm();
                                                }
                                                ?>
                                            </ul></nav>  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="motopress-wrapper content-holder clearfix">
        <?= $content ?>
    </div>
    <footer class="motopress-wrapper footer">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="57947c9ad204c">
                    <div class="extrafooter">
                        <div class="row">
                            <div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.html">
                                <div id="footer-text" class="footer-text">
                                    2016 &copy; <a href="privacy-policy/index.html" title="Privacy Policy">Privacy Policy</a>

                                </div> </div>
                            <div class="span6" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
                                <div id="nav_menu-2"><div class="menu-footer-extrmenu-container"><ul id="menu-footer-extrmenu" class="menu"><li id="menu-item-2017" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2017"><a href="#">support</a></li>
                                            <li id="menu-item-2018" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2018"><a href="about-us/faqs/index.html">FAQs</a></li>
                                            <li id="menu-item-2019" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2019"><a href="#">Sitemap</a></li>
                                            <li id="menu-item-2020" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2020"><a href="#">Help</a></li>
                                        </ul></div></div> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span12">
                            <div class="footenav" data-motopress-static-file="static/static-footer-nav.html">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<div id="back-top-wrapper" class="visible-desktop">
    <p id="back-top">
        <a href="#top"><span></span></a> </p>
</div>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/comment-reply.min7350.js?ver=4.2.9'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery.flexslider-min605a.js?ver=2.2.2'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/cherry-plugin4281.js?ver=1.2.7'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/cherry.lazy-load5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/device.min8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/scripts50fa.js?ver=4.2.1'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/superfishe225.js?ver=1.5.3'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery.mobilemenu5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery.magnific-popup.min81c3.js?ver=0.9.3'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jplayer.playlist.mina1ec.js?ver=2.3.0'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery.jplayer.mind315.js?ver=2.6.0'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/tmstickup8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/device.min8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery.zaccordion.min3c94.js?ver=2.1.0'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/camera.minc412.js?ver=1.3.4'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery.debouncedresize5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery.ba-resize.min4963.js?ver=1.1'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/jquery.isotopedc81.js?ver=1.5.25'></script>
<script type='text/javascript' src='<?=Yii::getAlias('@web');?>/js/owl.carousel.minc43a.js?ver=1.31'></script>
<script>
    $(document).ready(function() {
        $('#logout').click(function() {
            $('#logout_form').submit();
            return false;
        });
    });
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>