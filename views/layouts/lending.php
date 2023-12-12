<?php
/** @var $content */

use app\assets\NewAsset;
NewAsset::register($this);

?>

<?php $this -> beginPage() ?>

<!doctype html>
<html lang=<?= Yii::$app ->language ?>>
<head>
    <title><?= $this ->title?></title>
    <?= $this ->head() ?>
</head>
<body>
<?= $this ->beginBody()?>
<div>
    <?= $content ?>
</div>
<footer>

</footer>
<?= $this->endBody() ?>

</body>
</html>

<?= $this->endPage() ?>


