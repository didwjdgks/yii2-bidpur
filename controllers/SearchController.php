<?php
namespace bidpur\controllers;

use Yii;

use bidpur\models\BidTag;
use bidpur\models\BidTagBidid;
use bidpur\models\BidpurSearch;

class SearchController extends \yii\web\Controller
{
  public function actionIndex(){

    $tagids=BidTag::findByKeyword('영상,cctv')->select('id')->column();
    echo join(',',$tagids);

    $bidids=BidTagBidid::find()->select('bidid')->where(['tagid'=>$tagids])->column();
    echo join(',',$bidids);

    $model=new BidpurSearch;
    $dataProvider=$model->search(Yii::$app->request->get());

    echo $this->render('index',[
      'model'=>$model,
      'dataProvider'=>$dataProvider,
    ]);
  }
}

