<?php

namespace Base;
/**
 *  * 控制器的基类.
 *   */
class ApplicationController extends \Yaf\Controller_Abstract {
	public function init(){
		$this->getView()->assign('styleURL', \Bootstrap::getApiDomain('styleUrl'));
		$this->getView()->assign('imageURL', \Bootstrap::getApiDomain('imageUrl'));
		$this->getView()->assign('scriptURL', \Bootstrap::getApiDomain('scriptUrl'));
		$this->getView()->assign('gmdlURL', \Bootstrap::getApiDomain('gmdlUrl'));
		$this->getView()->assign('wwwURL', \Bootstrap::getApiDomain('wwwUrl'));
	}
}
