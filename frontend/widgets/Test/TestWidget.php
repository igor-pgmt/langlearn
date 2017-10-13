<?php

namespace frontend\widgets\Test;
use yii\base\Widget;
use yii\widgets\InputWidget;


class TestWidget extends InputWidget
{
	// public $columns;
	// public $columnHeaders;
	// public $rows;
	// public $rowHeaders;

	public $pluginOptions;

	public function init()
	{
		parent::init();
		// if ($this->message === null) {
		// 	$this->message = 'Hello World';
		// }
		if (!isset($this->pluginOptions['inputClass'])) {
			$this->pluginOptions['inputClass'] = 'col-xs-12 form-control';
		} elseif ($this->pluginOptions['inputClass'] === false) {
			$this->pluginOptions['inputClass'] = '';
		} else {
			$this->pluginOptions['inputClass'] .= ' col-xs-12 form-control';
		}
		if (!isset($this->pluginOptions['inputStyle'])) {
			$this->pluginOptions['inputStyle'] = 'padding: 1px;';
		} elseif ($this->pluginOptions['inputStyle'] === false) {
			$this->pluginOptions['inputStyle'] = '';
		}
		if (!isset($this->pluginOptions['divStyle'])) {
			$this->pluginOptions['divStyle'] = 'padding: 1px;';
		} elseif ($this->pluginOptions['divStyle'] === false) {
			$this->pluginOptions['divStyle'] = '';
		}

	}
	public function run()
	{
		return $this->render('view', [
			'pluginOptions' => $this->pluginOptions,
		]);

 	}

}