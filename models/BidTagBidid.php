<?php
namespace bidpur\models;

use bidpur\Module;

class BidTagBidid extends \yii\db\ActiveRecord
{
  public static function tableName(){
    return 'bid_tag_bidid';
  }

  public static function getDb(){
    return Module::getInstance()->db;
  }
}

