<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {
	
	/**
	 * 
	 */
	public function _initSaveResources() {
		//global
		$resource	= $this->getPluginResource('db');
		$db			= $resource->getDbAdapter();
		Zend_Registry::set('db', $db);
		date_default_timezone_set('America/Sao_Paulo');
	}
	
	/**
	 * 
	 */
	public function _initSecurity()
	{
		Zend_Registry::set('post', new Zend_Filter_Input(NULL, NULL, $_POST));
		Zend_Registry::set('get', new Zend_Filter_Input(NULL, NULL, $_GET));
	}
	
	/**
	 * 
	 */
	public function _initCache()
	{
		$frontendOptions = array(
			'lifetime' => 100000, //tempo em segundos
			'automatic_serialization' => true
		);	
		
		$backendOptions = array(
			'cache_dir' => APPLICATION_PATH.'/cache/',
		);
		
		$cache = Zend_Cache::factory('Core','File', $frontendOptions, $backendOptions);
		Zend_Registry::set('cache', $cache);
	}
	
	/**
	 * 
	 */
	protected function _initRouter()
	{
		$frontController = Zend_Controller_Front::getInstance();
		$router			 = $frontController->getRouter();
		
		// ROUTE DEFAULT
		$routeDefault = new Zend_Controller_Router_Route('/:action',
			array(
				'module'	 => 'default',
				'controller' => 'index'
			)
		);
		
		$router->addRoute('routeDefault', $routeDefault);
	}
}