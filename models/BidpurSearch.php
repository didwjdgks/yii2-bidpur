<?php
namespace bidpur\models;

use bidpur\Module;

class BidpurSearch extends \yii\db\ActiveRecord
{
  public static function tableName(){
    return 'bidpur_search';
  }

  public static function getDb(){
    return Module::getInstance()->db;    
  }
}

