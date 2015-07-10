<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/**
 * Yii2选择布局的方式
 * @1 控制器内成员变量
 *  public $layout = false;//不使用默认布局
 *  public $layout = 'admin';//设置要使用的布局
 * 
 * @2 控制器成员方法内
 *  $this->layout = false;
 *  $this->layout = 'main';
 * 
 * @3 视图中选择布局
 *  $this->context->layout = false;
 *  $this->context->layout = 'main';
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <title>管理系统</title>
        <?php $this->head() ?>
    </head>

    <body style="margin: 0px; padding-top: 51px;" scroll="no">
        <?php $this->beginBody() ?>
        <?php
        NavBar::begin([
            'brandLabel' => 'CMS',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        $menuItems = [
            ['label' => '首页', 'url' => ['admin/index']],
            ['label' => '设置', 'url' => ['admin/set']],
            ['label' => '分类', 'url' => ['admin/category']],
            ['label' => '内容', 'url' => ['admin/contents']],
            ['label' => '模版', 'url' => ['admin/tpl']],
        ];
        $menuItems[] = [
            'label' => '退出(' . Yii::$app->user->identity->username . ')',
            'url' => ['/admin/logout'],
            'linkOptions' => ['data-method' => 'post'],
        ];
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>
        <table id="containerTable" class="table border" style="height:95%;padding:0px;margin:0;">
            <tr>
                <td class="leftMenu" style='vertical-align:top;padding:0px;margin:0px;'>
                    <?= $content ?>
                </td>
            </tr>

        </table>

        <?php $this->endBody() ?>

    </body>
</html>
<?php $this->endPage() ?>

