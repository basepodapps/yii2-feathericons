Feather Icons Asset Bundle for Yii2
===================================
An asset bundle of [Feather Icons](https://feathericons.com), a beautiful open source icon set, made for use with Yii2.

Installation
------------

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require basepodapps/yii2-feathericons:^1.0.0
```

or add

```
"basepodapps/yii2-feathericons": "^1.0.0"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, create a custom asset bundle and use it in your app:

```php
<?php

namespace app\assets;

use yii\web\AssetBundle;

class FeatherIconsAsset extends AssetBundle
{
    public $depends = [
        'basepodapps\feathericons\FeatherIconsAsset'
    ];
}
```

Or, directly register the asset bundle in your views:

```php
use app\assets\AppAsset;
use basepodapps\feathericons\FeatherIconsAsset;

AppAsset::register($this);
FeatherIconsAsset::register($this);
```

You can also use it together with [Krajee's Yii2-Icons](https://github.com/kartik-v/yii2-icons) extension in your views:

```php
use kartik\icons\Icon;
Icon::map($this);

// Add 'Feather Icons' as custom icon framework
Icon::addFramework('feather', [
    'class' => '\basepodapps\feathericons\FeatherIconsAsset',
    'prefix' => 'feather-icon-',
]);
Icon::map($this, 'feather');

---

// Sample usage
<?= Icon::show('users', [
    'class'=>'page-header-icon',
    'data-feather' => 'users',
    'framework' => 'feather'
]) ?>
```


*feather-icons@4.29.0*