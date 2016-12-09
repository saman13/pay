<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<?php $this->beginBody(); ?>

<body class="smart-rtl">

<!-- HEADER -->
<header id="header">
    <div id="logo-group">
        <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
        <div class="ajax-dropdown">
        </div>
        <!-- END AJAX-DROPDOWN -->
    </div>
    <!-- pulled right: nav area -->
    <div class="pull-right">

    </div>
    <!-- end pulled right: nav area -->
</header>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">
    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <ul>
            <li>
                <div class="login-info">
                <?php
                if(Yii::$app->user->isGuest){
                    echo Html::beginForm(['/site/login'], 'post')
                        . Html::submitButton(
                            \Yii::t('app', 'login'),
                            ['class' => 'btn btn-link']
                        )
                        . Html::endForm();
                }else{

                    echo Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            \Yii::t('app', 'logout').'(' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link']
                        )
                        . Html::endForm();
                }
                ?>
                </div>
            </li>

            <?php
            if (!Yii::$app->user->isGuest) {
                ?>
                <li>
                    <a href="<?php echo Yii::$app->homeUrl ?>" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i>
                        <span class="menu-item-parent"><?= \Yii::t('app', 'dashbord') ?></span></a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span
                            class="menu-item-parent"><?= \Yii::t('app', 'user') ?></span></a>
                    <ul>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>user/index"><?= \Yii::t('app', 'user list') ?></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span
                            class="menu-item-parent"><?= \Yii::t('app', 'news') ?></span></a>
                    <ul>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>news/index"><?= \Yii::t('app', 'news list') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>news/create"><?= \Yii::t('app', 'add news') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>news-api/index"><?= \Yii::t('app', 'add news api') ?></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span
                            class="menu-item-parent"><?= \Yii::t('app', 'players') ?></span></a>
                    <ul>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>player/index"><?= \Yii::t('app', 'players list') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>player/create"><?= \Yii::t('app', 'add player') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>players-detail/create"><?= \Yii::t('app', 'add player detail') ?></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span
                            class="menu-item-parent"><?= \Yii::t('app', 'leagues') ?></span></a>
                    <ul>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>leagues/index"><?= \Yii::t('app', 'leagues list') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>leagues/create"><?= \Yii::t('app', 'add league') ?></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span
                            class="menu-item-parent"><?= \Yii::t('app', 'level') ?></span></a>
                    <ul>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>level-xp/index"><?= \Yii::t('app', 'level list') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>level-xp/create"><?= \Yii::t('app', 'add level') ?></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span
                            class="menu-item-parent"><?= \Yii::t('app', 'forecast') ?></span></a>
                    <ul>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>forecast-card/index"><?= \Yii::t('app', 'add card') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>forecast-card-detail/index"><?= \Yii::t('app', 'add card detail') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>forecast-criterion/index"><?= \Yii::t('app', 'add criterion') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>forecast-kind/index"><?= \Yii::t('app', 'add kind') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>forecast-level/index"><?= \Yii::t('app', 'add level') ?></a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span
                            class="menu-item-parent"><?= \Yii::t('app', 'score') ?></span></a>
                    <ul>
                        <li>
                            <a href="<?php echo Yii::$app->homeUrl ?>user/score-league"><?= \Yii::t('app', 'score league') ?></a>
                        </li>
                    </ul>
                </li>

                <?php
            }
            ?>
        </ul>
    </nav>
			<span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>




</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

        <!-- breadcrumb -->
        <ol class="breadcrumb">

        </ol>
        <!-- end breadcrumb -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <?= $content ?>

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- PAGE FOOTER -->
<div class="page-footer">
    <div class="row">

    </div>
</div>
<!-- END PAGE FOOTER -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>

<script type="text/javascript">

    $(document).ready(function() {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();

        // PAGE RELATED SCRIPTS

        /*
         * Fixed table height
         */

        tableHeightSize()

        $(window).resize(function() {
            tableHeightSize()
        })

        function tableHeightSize() {

            if ($('body').hasClass('menu-on-top')) {
                var menuHeight = 68;
                // nav height

                var tableHeight = ($(window).height() - 224) - menuHeight;
                if (tableHeight < (320 - menuHeight)) {
                    $('.table-wrap').css('height', (320 - menuHeight) + 'px');
                } else {
                    $('.table-wrap').css('height', tableHeight + 'px');
                }

            } else {
                var tableHeight = $(window).height() - 224;
                if (tableHeight < 320) {
                    $('.table-wrap').css('height', 320 + 'px');
                } else {
                    $('.table-wrap').css('height', tableHeight + 'px');
                }

            }

        }

        /*
         * LOAD INBOX MESSAGES
         */
        loadInbox();
        function loadInbox() {
            loadURL("ajax/email/email-list.html", $('#inbox-content > .table-wrap'))
        }

        /*
         * Buttons (compose mail and inbox load)
         */
        $(".inbox-load").click(function() {
            loadInbox();
        });

        // compose email
        $("#compose-mail").click(function() {
            loadURL("ajax/email-compose.html", $('#inbox-content > .table-wrap'));
        })

    });


</script>




</body>
<?php $this->endBody() ?>

</html>
<?php $this->endPage() ?>
