<?php
/**
 * @link http://www.konkeanweb.com
 * 1/24/2017 AD 5:30 PM
 * @copyright Copyright (c) 2017 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\vuejs;

use yii\web\AssetBundle;

class VueJsAsset extends AssetBundle
{
    public $sourcePath = '@bower/vue/dist';

    public function init()
    {
        parent::init();
        $this->js[] = YII_ENV_DEV ? 'vue.js':'vue.min.js';
    }

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
