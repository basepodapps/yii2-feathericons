Feather Icons Asset Bundle for Yii2
===================================
An asset bundle of Feather Icons, a beautiful opensource icon set, made for use with Yii2.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require snowpurple/yii2-feathericons:dev-master
```

or add

```
"snowpurple/yii2-feathericons": "dev-master"
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
        'snowpurple\feathericons\FeatherIconsAsset'
    ];
}
```

Or, directly register the asset bundle in your views:

```php
use app\assets\AppAsset;
use snowpurple\feathericons\FeatherIconsAsset;

AppAsset::register($this);
FeatherIconsAsset::register($this);
```

You can also use it together with [Krajee's Yii2-Icons](https://github.com/kartik-v/yii2-icons) extension in your views:

```php
use kartik\icons\Icon;
Icon::map($this);

// Add 'Feather Icons' as custom icon framework
Icon::addFramework('feather', [
    'class' => '\snowpurple\feathericons\FeatherIconsAsset',
    'prefix' => 'feather-icon-',
]);
Icon::map($this, 'feather');

---

// Sample usage
<?= Icon::show('users', ['class'=>'page-header-icon', 'data-feather' => 'users', 'framework' => 'feather']) ?>
```
