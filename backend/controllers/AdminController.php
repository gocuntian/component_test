<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * +------------------------------------------------------------------------------
 * @Description
 * +------------------------------------------------------------------------------
 * @filename AdminController.php 
 * @encoding UTF-8
 * @author xingcuntian<xingcuntian@sxxl.com>
 * @datetime 2015-07-06 10:01:18
 * @version 1.0
 * +------------------------------------------------------------------------------
 */
class AdminController extends Controller {

    public function actionIndex() {
        $this->layout = false;
        $this->layout = 'admin';
        
        return $this->render('index');
    }

}
