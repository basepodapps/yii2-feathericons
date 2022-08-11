<?php

namespace basepodapps\feathericons;

use yii\web\AssetBundle;

class FeatherIconsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/basepodapps/yii2-feathericons';

    public $js = [
        'assets/feather.min.js'
    ];
}