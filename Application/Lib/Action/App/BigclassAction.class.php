<?php
class BigclassAction extends Action {
	function _initialize() {
		header("Content-type: text/html; charset=utf-8"); 
		if($_GET['debug'])
		{
		
		}
		else
		{
			$agent = $_SERVER['HTTP_USER_AGENT']; 
			if(!strpos($agent,"icroMessenger")) {
				//echo '请使用微信访问';exit;
			}
		}
		//$this->init();
	}
	function index(){
		$info = R ( "Api/Api/gettheme" );
		C ( "DEFAULT_THEME", $info ["theme"] );
		$this->display();	
	}	
	function classst(){
		$info = R ( "Api/Api/gettheme" );
		C ( "DEFAULT_THEME", $info ["theme"] );
		$this->display();	
	}	
	function maretc(){
		$info = R ( "Api/Api/gettheme" );
		C ( "DEFAULT_THEME", $info ["theme"] );
		$this->display();	
	}	
	function teackj(){
		$info = R ( "Api/Api/gettheme" );
		C ( "DEFAULT_THEME", $info ["theme"] );
		$this->display();	
	}
	function pay_form(){
	$info = R ( "Api/Api/gettheme" );
	C ( "DEFAULT_THEME", $info ["theme"] );
	$this->display();
	}	

}