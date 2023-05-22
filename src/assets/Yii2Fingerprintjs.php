<?php

namespace Yii2Fingerprintjs;

use yii\web\AssetBundle;

class Yii2Fingerprintjs extends AssetBundle
{
    public $sourcePath = '@npm/fingerprintjs--fingerprintjs/dist';

    public $js = [
        'fp.js',
    ];
}