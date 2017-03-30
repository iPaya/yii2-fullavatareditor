<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license
 */

namespace iPaya\fullAvatarEditor;


use yii\web\AssetBundle;

class FullAvatarEditorAsset extends AssetBundle
{
    public $sourcePath = '@iPaya/fullAvatarEditor/assets';

    public $js = [
        'scripts/swfobject.js',
        'scripts/fullAvatarEditor.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
