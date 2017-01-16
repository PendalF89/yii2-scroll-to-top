<?php

namespace pendalf89\scroll;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * Class ScrollToTop
 * Add scroll to top to page
 */
class ScrollToTop extends Widget
{
	/**
	 * @var string text
	 */
	public $label;

	/**
	 * @var array html attributes
	 */
	public $options = ['class' => 'scroll-to-top scroll-to-top--hidden'];

	/**
	 * @inheritdoc
	 */
	public function run()
	{
		ScrollToTopAsset::register($this->view);

		return Html::tag('div', $this->label, $this->options);
	}
}
