<?php

require_once ("alipay.config.php");

require_once ("lib/alipay_notify.class.php");



	// �̻�������

	$out_trade_no = '201503171610389';

	

	// �жϸñʶ����Ƿ����̻���վ���Ѿ���������

	// ���û�������������ݶ����ţ�out_trade_no�����̻���վ�Ķ���ϵͳ�в鵽�ñʶ�������ϸ����ִ���̻���ҵ�����

	// ���������������ִ���̻���ҵ�����

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

