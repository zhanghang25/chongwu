<?php
///锦尚中国源码论坛
namespace App\Contracts\Services;

interface JigonInterface
{
	public function request($graphUrl, $data);

	public function query($productIds);

	public function push($order_request, $order);

	public function confirm($order);

	public function saveAfterSales($order_return_request);

	public function getAfterSalesAddress($store_addres);
}


?>
