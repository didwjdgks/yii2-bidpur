<?php
namespace bidpur;

class BidpurAsset extends \yii\web\AssetBundle
{
  public $sourcePath='@bidpur/assets';

  public $css=[
    'bidpur.css',
  ];

  public $js=[
    'bidpur.js',
  ];

  public $depends=[
    'bidpur\NotoSansFontAsset',
    'bidpur\BootstrapAsset',
    'bidpur\FontawesomeAsset',
    'bidpur\JqueryAsset',
    'bidpur\YiiAsset',
  ];
}

