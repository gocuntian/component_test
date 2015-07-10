<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/**
 * +------------------------------------------------------------------------------
 * @Description
 * +------------------------------------------------------------------------------
 * @filename index.php 
 * @encoding UTF-8
 * @author xingcuntian<xingcuntian@sxxl.com>
 * @datetime 2015-07-03 11:02:40
 * @version 1.0
 * +------------------------------------------------------------------------------
 */
?>
<?= Html::tag('p', Html::encode('username'), ['class' => 'username']) ?>
<?= Html::tag('div', Html::encode("dddddddddddddddddd"), ['class' => 'div', 'id' => 'div']) ?>
<?php

$options = ['class' => 'btn btn-default'];
$type = 'success';
if ($type === 'success') {
    Html::removeCssClass($options, 'btn-default');
    Html::addCssClass($options, 'btn-success');
}
echo Html::tag('div', 'sdsdsd dddd', $options);
$id = 2;
$option = [
    ['id' => 1, 'name' => 'one'],
    ['id' => 2, 'name' => 'two'],
    ['id' => 3, 'name' => 'three'],
    ['id' => 4, 'name' => 'four'],
];
$post = [
    'title'=> 'this is title',
    'name' => 'this is name',
    'child'=>[ 1000,200],
];
?>
<?= Html::getInputName($model, 'username')?>
<?= Html::getAttributeValue($model, 'username')?>
<?= Html::tag('hr')?>
<?= Html::getInputId($model, 'username')?>
<?= Html::tag('hr')?>

<?= Html::style('.username{color:red;font-size:8px;}')?>
<?= Html::script('alert("script is test")',['defer'=>true])?>
<?= Html::tag('br/')?>
<?= Html::cssFile('@web/css/ie5.css',['condition'=>'IE 5'])?>
<?= Html::jsFile('@web/js/main.js')?>
<?= Html::a('超链接', ['home/list','id'=>12], ['class'=>'link'])?>
<?= Html::mailto('Contact Us', 'xingcuntian@163.com')?>
<?= Html::img('@web/images/logo.png',['alt'=>'logo'])?>
<hr/>

<?= Html::beginForm(['home/add', 'id' => $id], 'post', ['enctype' => 'multipart/form-data']) ?>
<?= Html::input('text', 'username', 'name', ['class' => 'name']) ?>
<?= Html::radio('agree', true, ['label' => 'this is radio']) ?>
<?= Html::checkbox('agree', true, ['label' => 'this is checkbox']) ?>

<?= Html::dropDownList('list', 1, ArrayHelper::map($option, 'id', 'name')) ?>
<?= Html::listBox('listBox', 2, ArrayHelper::map($option, 'id', 'name')) ?>

<?= Html::checkboxList('role', [3, 4], ArrayHelper::map($option, 'id', 'name')) ?>
<br/><br/>
<?= Html::label('user name', 'username',['class' => 'username']) ?>
<?= Html::endForm() ?>

































