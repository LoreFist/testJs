<?php

namespace Opro\Yii2Fingerprintjs\assets;

use yii\web\AssetBundle;

class Yii2FingerprintjsAssets extends AssetBundle
{
    public $sourcePath = '@npm/fingerprintjs--fingerprintjs/dist';

    public $js = [
        'fp.js',
    ];
}