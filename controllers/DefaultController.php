<?php
namespace bidpur\controllers;

class DefaultController extends \yii\web\Controller
{
  public function actionIndex(){
    echo $this->render('index');
  }
}

