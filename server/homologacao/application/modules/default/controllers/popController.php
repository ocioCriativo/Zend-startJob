<?php
class Default_PopController extends Zend_Controller_Action {
	
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
		
		$this->_helper->layout->disableLayout();
		
		// PASSANDO DADOS PARA AS VIEWS
		$this->view->assign(
			array(
				'lang'		=> $translate,
				'title' 	=> ''
			)
		);
	}
	
    public function indexAction()
	{
		
		$this->view->assign(
			array(
				
			)
		);
		die;
	}
}


