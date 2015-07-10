<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use ijackua\lepture\Markdowneditor;
use ijackua\lepture\MarkdowneditorAssets;

/* @var $this yii\web\View */
/* @var $model common\models\Archives */
/* @var $form yii\widgets\ActiveForm */

MarkdowneditorAssets::register($this);
?>

<div class="archives-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Markdowneditor::widget(['model' => $model, 'attribute' => 'username']) ?>

    <div class="form-group">
        <?= Html::submitButton('提交', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
