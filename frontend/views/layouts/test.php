<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
AppAsset::register($this);
?>
<?php $this->beginPage()?>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset?>">
        <meta name="viewprt" content="width=device-width,initial-scale=1">
        <?= Html::csrfMetaTags()?>
        <title><?= Html::encode($this->title)?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="wrap">
            <?php
             NavBar::begin([
                 'brandLabel' => '我的测试站点',
                 'brandUrl'=> Yii::$app->homeUrl,
                 'options' => [//navbar-fixed-top 固定在顶部 navbar-static-top 静止在顶部
                     'class' => 'navbar-inverse navbar-fixed-top',
                 ],
             ]);
             $menuItems = [
                ['label'=>'首页','url' => ['/test/index']],
                ['label'=>'关于我们','url'=>['/site/about']],
                ['label'=>'联系我们','url'=>['/site/contact']], 
             ];
             if(Yii::$app->user->isGuest){
                 $menuItems[] = ['label'=>'注册','url'=>['/test/register']];
                 $menuItems[] = ['label'=>'登录','url'=>['/test/login']];
             }else{
                 $menuItems[] = [
                     'label'=>'退出 ('.Yii::$app->user->identity->username .')',
                     'url'=>['/test/logout'],
                     'linkOptions'=>['data-method'=>'post']
                 ];
             }
             echo Nav::widget([
                 'options' => ['class'=>'navbar-nav navbar-right'],
                 'items'=>$menuItems,
             ]);
             Navbar::end();
            ?>
            <div class="container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])?>
                <?= Alert::widget()?>
                <?= $content ?>
            </div>
        </div>
        
        <footer class="footer">
            <div class="container">
                
            </div>
        </footer>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage()?>


