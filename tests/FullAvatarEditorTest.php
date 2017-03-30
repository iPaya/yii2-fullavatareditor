<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license
 */

namespace iPayaUnit\fullAvatarEditor;


use iPaya\fullAvatarEditor\FullAvatarEditorAsset;

class FullAvatarEditorTest extends TestCase
{
    public function testAsset(){
        \Yii::$app->view->registerAssetBundle(FullAvatarEditorAsset::className());

        $output = \Yii::$app->view->renderAjax('@iPayaUnit/fullAvatarEditor/data/views/layout.php', [
            'content' => ''
        ]);

        static::assertRegExp(
            '~<script src="/assets/[0-9a-f]+/scripts/fullAvatarEditor.js"></script>~',
            $output,
            'js asset should be registered.'
        );
        static::assertRegExp(
            '~<script src="/assets/[0-9a-f]+/scripts/swfobject.js"></script>~',
            $output,
            'js asset should be registered.'
        );
    }
}
