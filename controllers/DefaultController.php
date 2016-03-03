<?php
namespace bidpur\controllers;

use bidpur\models\BidpurSearch;

class DefaultController extends \yii\web\Controller
{
  public function actionIndex(){
    $model=BidpurSearch::findOne('151231101833638-00-00-01 ');
    var_dump($model);
    echo $this->render('index');
  }
}

