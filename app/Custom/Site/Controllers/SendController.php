<?php
//WEBSC商城资源
namespace App\Custom\Site\Controllers;

class SendController extends \App\Modules\Site\Controllers\IndexController
{
	public function actionTest()
	{
		$message = array('code' => '1234', 'product' => 'sitename');
		$res = send_sms('10086', 'sms_signin', $message);

		if ($res !== true) {
			exit($res);
		}

		$res = send_mail('xxx', 'admin@admin.com', 'title', 'content');

		if ($res !== true) {
			exit($res);
		}
	}
}

?>
