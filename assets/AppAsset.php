<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.css',
        'css/responsive.css',
        'css/camera.css',
        'css/style.css',
        'css/flexslider3601.css',
        'css/owl.carousel8a28.css',
        'css/owl.theme8a28.css',
        'css/font-awesomedeae.css',
        'css/cherry-plugin4281.css',
        'css/lazy-load5152.css',
        'css/styles50fa.css',
        'css/main-style2.css',
        'css/magnific-popup81c3.css',
        'css/css76b5.css',
        'css/cssf2ab.css',
        'css/css9101.css',
    ];
    public $js = [
        'js/jquery-1.7.2.minba3a.js',
        'js/jquery.easing.1.34e44.js',
        'js/jquery.elastislide4281.js',
        'js/jsd921?v=3.exp&sensor=false&ver=4.2.9',
        'js/parallaxSlider5152.js',
        'js/smoothing-scroll5152.js',
        'js/jquery-migrate-1.2.1.min1576.js',
        'js/swfobjecteb77.js',
        'js/modernizr1717.js',
        'js/jflickrfeed5152.js',
        'js/custom5152.js',
        'js/bootstrap.mina1ec.js',
        'js/jquery.mobile.customized.min.js',
        'js/comment-reply.min7350.js',
        'js/jquery.flexslider-min605a.js',
        'js/cherry-plugin4281.js',
        'js/cherry.lazy-load5152.js',
        'js/device.min8a54.js',
        'js/jquery.form.mind03d.js',
        'js/scripts50fa.js',
        'js/superfishe225.js',
        'js/jquery.mobilemenu5152.js',
        'js/jquery.magnific-popup.min81c3.js',
        'js/jplayer.playlist.mina1ec.js',
        'js/jquery.jplayer.mind315.js',
        'js/tmstickup8a54.js',
        'js/device.min8a54.js',
        'js/jquery.zaccordion.min3c94.js',
        'js/camera.minc412.js',
        'js/jquery.debouncedresize5152.js',
        'js/jquery.ba-resize.min4963.js',
        'js/jquery.isotopedc81.js',
        'js/owl.carousel.minc43a.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
