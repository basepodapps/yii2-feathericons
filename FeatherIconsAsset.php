<?php

namespace snowpurple\feathericons;

use yii\web\AssetBundle;

class FeatherIconsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/snowpurple/yii2-feathericons';

    public $js = [
        'assets/feather.min.js'
    ];
}