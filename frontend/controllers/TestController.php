<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * +------------------------------------------------------------------------------
 * @Description
 * +------------------------------------------------------------------------------
 * @filename TestController.php 
 * @encoding UTF-8
 * @author xingcuntian<xingcuntian@sxxl.com>
 * @datetime 2015-07-10 09:53:50
 * @version 1.0
 * +------------------------------------------------------------------------------
 */
class TestController extends Controller{

    public $layout = 'test';
    
    public function actionIndex(){
        
       return $this->render('index');
    }
}

