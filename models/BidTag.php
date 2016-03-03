<?php
namespace bidpur\models;

use bidpur\Module;

class BidTag extends \yii\db\ActiveRecord
{
  public static function tableName(){
    return 'bid_tag';
  }

  public static function getDb(){
    return Module::getInstance()->db;
  }

  public static function findByKeyword($keyword){
    if(is_string($keyword)){
      $keywords=explode(',',$keyword);
    }
    else if(is_array($keyword)){
      $keywords=$keyword;
    }
    else{
      return [];
    }

    $query=static::find();
    foreach($keywords as $word){
      $query->orWhere(['like','tagname',$word]);
    }
    
    return $query;
  }

  public static function findAllByKeyword($keyword){
    return static::findByKeyword($keyword)->all();
  }
}

