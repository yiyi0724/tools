<?php
/**
 * @name Bootstrap
 * @author canony
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
use Yaf\Application;
use Yaf\Bootstrap_Abstract;
use Yaf\Dispatcher;
use Yaf\Registry;

class Bootstrap extends Bootstrap_Abstract{

    public function _initConfig() {
		//把配置保存起来
		$arrConfig = Application::app()->getConfig();
		Registry::set('config', $arrConfig);
	}

	public function _initPlugin(Dispatcher $dispatcher) {
		//注册一个插件
		$objSamplePlugin = new SamplePlugin();
		$dispatcher->registerPlugin($objSamplePlugin);
	}

	public function _initRoute(Dispatcher $dispatcher) {
		//在这里注册自己的路由协议,默认使用简单路由
	}
	
	public function _initView(Dispatcher $dispatcher){
		//在这里注册自己的view控制器，例如smarty,firekylin
	}

	/**
	 ** API配置文件下的指定域名
	 ** @param string $conName
	 ** @return string
	 **/
	public static function getApiDomain($conName){
		$apiIni = Registry::get('api');
		if(!$apiIni instanceof \Yaf\Config\Ini){
		$apiIni = new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/application.ini', \Yaf\Application::app()->environ());
			Registry::set('api', $apiIni);
		}
	        return $apiIni->get($conName);
	}
}
