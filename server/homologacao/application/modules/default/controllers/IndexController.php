<?php
class Default_IndexController extends Zend_Controller_Action {
	
	public function init()
	{
		// ARQUIVO DE TRADUCAO
		$translate	= new Zend_Translate(
			array(
				'adapter' 		=> 'ini',
				'content' 		=> APPLICATION_PATH.'/configs/lang/pt_BR.ini',
				'locale'  		=> 'pt_BR'
			)
		);
		
		// PASSANDO DADOS PARA AS VIEWS
		$this->view->assign(
			array(
				'lang'		=> $translate,
				'title' 	=> 'Name Project'
			)
		);
	}
	
    public function indexAction()
	{
		$this->view->assign(
			array(
				'title'		=> 'Name Project',
				'current'	=> 'home'
			)
		);
	}
	
}


