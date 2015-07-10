<?php

use yii\bootstrap\Modal;
use yii\bootstrap\Alert;
use yii\bootstrap\Tabs;
use yii\bootstrap\Carousel;
use yii\bootstrap\Collapse;
use yii\bootstrap\Progress;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<div class="wrap">
    <?php
    Modal::begin([
        'header' => '<h2>Hello World</h2>',
        'toggleButton' => ['label' => 'click me', 'class' => 'btn btn-primary'],
    ]);
    ?> 
    <?= 'this is tset' ?>
    <?php
    Modal::end();
    ?>
    <div class="container">
        <?=
        Tabs::widget([
            'items' => [
                [
                    'label' => 'One',
                    'content' => 'this is test1',
                    'active' => true,
                ],
                [
                    'label' => 'Two',
                    'content' => 'this is test2',
                    'headerOptions' => [],
                    'options' => ['id' => 'myveryownID'],
                ],
                [
                    'label' => 'Example',
                    'url' => 'http://www.baidu.com',
                ],
                [
                    'label' => 'Dropdown',
                    'items' => [
                        [
                            'label' => 'DropdownA',
                            'content' => 'this is AAAAA',
                        ],
                        [
                            'label' => 'DropdownB',
                            'content' => 'this is BBBBBB',
                        ],
                    ],
                ],
            ],
        ]);
        ?>
    </div>
    <div class="container-fluid">
        <?=
        Alert::widget([
            'options' => [
                'class' => 'alert-warning',
            ],
            'body' => 'this is test',
        ]);
        ?>
        <?php
        Alert::begin([
            'options' => [
                'class' => 'alert-success',
            ],
        ]);
        echo "this is test";
        Alert::end()
        ?> 
    </div>
    <div class="container-fluid">
        <?=
        Carousel::widget([
            'items' => [
                '<img src="https://ss3.baidu.com/-fo3dSag_xI4khGko9WTAnF6hhy/super/whfpf%3D425%2C260%2C50/sign=fef11bdc770e0cf3a0a21dbb6c7bc62d/faedab64034f78f099952c3d7c310a55b2191c65.jpg"/>',
                ['content' => '<img src="https://ss3.baidu.com/-fo3dSag_xI4khGko9WTAnF6hhy/super/whfpf%3D425%2C260%2C50/sign=c56c7b0cb7119313c716acf0030538e5/060828381f30e9242eb629ff49086e061c95f7ea.jpg"/>'],
                [
                    'content' => '<img src="https://ss0.baidu.com/7Po3dSag_xI4khGko9WTAnF6hhy/super/whfpf%3D425%2C260%2C50/sign=43a281e13f292df59796ff55da0c6852/8644ebf81a4c510f0eb5a6d46559252dd52aa58f.jpg"/>',
                    'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                    'options' => ['class' => 'my'],
                ],
                [
                    'content' => '<img src="https://ss0.baidu.com/7Po3dSag_xI4khGko9WTAnF6hhy/super/whfpf%3D425%2C260%2C50/sign=43a281e13f292df59796ff55da0c6852/8644ebf81a4c510f0eb5a6d46559252dd52aa58f.jpg"/>',
                    'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                    'options' => ['class' => 'my'],
                ],
            ],
        ]);
        ?>
    </div>
    <div class="container-fluid">
    <?=
            Collapse::widget([
                'items'=>[
                    [
                        'label' =>'this is item #1',
                        'content'=>'this is item 111111',
                         'contentOptions'=>['class'=>'in'],
                         'options' =>['class'=>'panel panel-primary'],
                    ],
                    [
                      'label'=>'this is item #2',
                      'content'=>'this is test2 222222',
                      'contentOptions'=>[],
                      'options' =>[
                          'class'=>'panel panel-info',
                      ],
                    ],
                    [
                        'label'=>'this is item @3',
                        'content'=>[
                          'this is one',
                           'this is two',
                        ],
                        'contentOptions'=>[],
                        'options'=>['class'=>''],
                        'footer'=>'Footer'
                    ],
                    
                ],
            ]);   
    ?>    
    </div>
    
    <div class="container">
        <?=
         Progress::widget([
             'percent' => 60,
             'label' => 'test',
         ]);
        ?>
        <?=
            Progress::widget([
                'percent'=>75,
                'barOptions'=>['class'=>'progress-bar-danger']
            ]);
         ?>
       <?=
         Progress::widget([
             'percent'=>70,
             'barOptions'=>['class'=>'progress-bar-warning'],
             'options'=>['class'=>'progress-striped']
         ]);
        ?>
        <?=
           Progress::widget([
               'percent'=>85,
               'barOptions'=>['class'=>'progress-bar-success'],
               'options'=>['class'=>'active progress-striped']
           ]);
         ?>
        <?=
           Progress::widget([
               'bars'=>[
                   ['percent'=>30,'options'=>['class'=>'progress-bar-danger']],
                   ['percent'=>30,'label'=>'test','options'=>['class'=>'progress-bar-success']],
                   ['percent'=>35,'options'=>['class'=>'progress-bar-warning']],
               ]
           ]);
         ?>
    </div>

</div>


