<?php
namespace bidpur;

use Yii;
use yii\db\Connection;
use yii\di\Instance;
use yii\web\ForbiddenHttpException;

class Module extends \yii\base\Module
{
  public $controllerNamespace='bidpur\controllers';

  public $db='db';

  public $session='session';

  public $user='user';

  public $assetDir='bidpur-assets';

  public function init(){
    parent::init();

    //$this->db=Instance::ensure($this->db,Connection::className());
  }

  public function beforeAction($action){
    if(!parent::beforeAction($action)){
      return false;
    }

    if($this->checkAccess()){
      $this->resetGlobalSettings();
      return true;
    }else{
      throw new ForbiddenHttpException('You are not allowed to access this page.');
    }
  }

  protected function resetGlobalSettings(){
    Yii::$app->request->enableCsrfValidation=false;
    Yii::$app->assetManager->basePath=Yii::getAlias('@webroot').'/'.$this->assetDir;
    Yii::$app->assetManager->baseUrl=Yii::getAlias('@web').'/'.$this->assetDir;
    Yii::$app->assetManager->bundles['yii\web\JqueryAsset']=false;
    Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset']=false;
    Yii::$app->assetManager->bundles['yii\web\YiiAsset']=false;

    //setting session
    //setting user
  }

  protected function checkAccess(){
    return true;
  }
}

