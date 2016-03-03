<?php
namespace bidpur\models;

use yii\data\ActiveDataProvider;

use bidpur\Module;

class BidpurSearch extends \yii\db\ActiveRecord
{
  public static function tableName(){
    return 'bidpur_search';
  }

  public static function getDb(){
    return Module::getInstance()->db;    
  }

  public function search($params){
    $query=BidpurSearch::find();

    $dataProvider=new ActiveDataProvider([
      'query'=>$query,
    ]);

    if(!($this->load($params) && $this->validate())){
      return $dataProvider;
    }

    return $dataProvider;
  }
}

