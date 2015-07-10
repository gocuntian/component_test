<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\User;

/**
 * +------------------------------------------------------------------------------
 * @Description
 * +------------------------------------------------------------------------------
 * @filename HomeController.php 
 * @encoding UTF-8
 * @author xingcuntian<xingcuntian@sxxl.com>
 * @datetime 2015-07-03 10:46:57
 * @version 1.0
 * +------------------------------------------------------------------------------
 */
class HomeController extends Controller {

    public function actionIndex() {
        //提示信息
//        \Yii::$app->getSession()->setFlash('success', 'this is success');
//        \Yii::$app->getSession()->setFlash('error', 'This is the message');
//        \Yii::$app->getSession()->setFlash('info', 'This is the message');
//        \Yii::$app->getSession()->setFlash('danger','this is danger');
//        \Yii::$app->getSession()->setFlash('warning','this is warning');
        //邮件发送        
//        $mail = Yii::$app->mailer->compose();
//        $mail->setTo('1037242852@qq.com');
//        $mail->setSubject('this is test');
//        $mail->setHtmlBody("<br/><h2>ddsdsdsdsds</h2>");
//        if($mail->send()){
//            \Yii::$app->getSession()->setFlash('success','mailer is send success');
//        }else{
//            \Yii::$app->getSession()->setFlash('danger','mail is send false');die;
//        }
       $model = User::findOne(1);
       //var_dump($model);die;
        return $this->render('index',['model'=>$model]);
    }
    
    public function actionList(){
        //设置当前view的params参数
        $view = Yii::$app->view;
        $view->params['layoutData'] = 'this is test';
          $model = User::findOne(1);
        return $this->render('list',['model'=>$model]);
    }

}
