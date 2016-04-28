<?php

require_once ("alipay.config.php");

require_once ("lib/alipay_notify.class.php");



	// 商户订单号

	$out_trade_no = '201503171610389';

	

	// 判断该笔订单是否在商户网站中已经做过处理

	// 如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序

	// 如果有做过处理，不执行商户的业务程序

	if (! empty ( $out_trade_no )) {
		
		$sql = "select * from " . DB_PREFIX . "order where orderid='" . $out_trade_no . "'";

		$result = mysql_query ( $sql, $conn );
		
		$row=mysql_fetch_row($result);
		
		$this->redirect('App/Index/payover', array('out_trade_no'=>$out_trade_no,'uid'=>$row[1])); 
		
		echo 'http://' . $_SERVER ['SERVER_NAME'] . __ROOT__ . '/index.php?WIDseller_email=' . $alipay ['alipayname'] . '&WIDout_trade_no=' . $orderid . '&WIDsubject=' . $orderid . '&WIDtotal_fee=' . $totalprice;
		
		eixt();

	}

	

	echo '<script type="text/javascript">window.close();</script>';



?>

