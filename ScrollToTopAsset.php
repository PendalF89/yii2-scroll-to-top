<?php

namespace pendalf89\scroll;

use yii\web\AssetBundle;

class ScrollToTopAsset extends AssetBundle
{
	public $sourcePath = __DIR__ . DIRECTORY_SEPARATOR . 'assets';
	public $js = [
		'js/scroll-to-top.js',
	];
	public $css = [
		'css/scroll-to-top.css',
	];
	public $depends = [
		'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset',
	];

	public function init()
	{
		parent::init();
		$this->publishOptions['forceCopy'] = YII_ENV_DEV;
	}
}
