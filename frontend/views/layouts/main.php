<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=Html::csrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody()?>

<div class="wrap">
    <?php
NavBar::begin([
    'brandLabel' => 'TEST LANG!!!',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);
$menuItems = [
    ['label' => 'Phrasebook', 'url' => ['/phrasebook2']],
    ['label' => 'Create phrase', 'url' => ['/phrasebook2/create']],
    ['label' => 'Verbs', 'url' => ['/verb-sr']],
    ['label' => 'Create Verb', 'url' => ['/verb-sr/create']],
    // ['label' => 'Testing', 'url' => ['/verb-sr/testing']],
    // ['label' => 'Home', 'url' => ['/site/index']],
    // ['label' => 'About', 'url' => ['/site/about']],
    // ['label' => 'Contact', 'url' => ['/site/contact']],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
    $menuItems[] = '<li>'
    . Html::beginForm(['/site/logout'], 'post')
    . Html::submitButton(
        'Logout (' . Yii::$app->user->identity->username . ')',
        ['class' => 'btn btn-link logout']
    )
    . Html::endForm()
        . '</li>';
}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);
NavBar::end();
?>

    <div class="container">
        <?=Breadcrumbs::widget([
    // 'links' => isset($this->params['breadcrumbs']) ? implode(' ', $this->params['breadcrumbs']) : [],
])?>
        <?=Alert::widget()?>

    <?=$this->render('../verb-sr/_bookmarks.php')?>



        <?=$content?>
    </div>
</div>
<button onclick="topFunction()" id="myScrollToTopButton" title="Go to top">Top</button>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?=date('Y')?></p>

        <p class="pull-right"><?=Yii::powered()?></p>
    </div>
</footer>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
