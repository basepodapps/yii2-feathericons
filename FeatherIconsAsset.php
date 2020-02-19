<?php

namespace snowpurple\feathericons;

use yii\web\AssetBundle;

class FeatherIconsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/snowpurple/feathericons';

    public $js = [
        'assets/feather.min.js'
    ];
}