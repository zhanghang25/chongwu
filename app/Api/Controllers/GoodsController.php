<?php
//WEBSC商城资源
namespace App\Api\Controllers;

class GoodsController extends \App\Api\Foundation\Controller
{
	/** @var  $goodsService */
	protected $goodsService;
	/** @var  $goodsTransport */
	protected $goodsTransport;

	public function __construct(\App\Services\GoodsService $goodsService, \App\Models\GoodsTransport $goodsTransport)
	{
		parent::__construct();
		$this->goodsService = $goodsService;
		$this->goodsTransport = $goodsTransport;
	}

	public function actionList()
	{
		return 1111;
	}

	public function actionDetail()
	{
	}

	public function actionSku()
	{
	}

	public function actionFittings()
	{
	}
}

?>
