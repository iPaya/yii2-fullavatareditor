<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license
 */

use yii\web\View;

/**
 * @var $this View
 * @var $content string
 */
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>

<?= $content ?>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
