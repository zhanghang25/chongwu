<?php
//zend 锦尚中国源码论坛
namespace App\Contracts\Services;

interface GoodsServiceInterface
{
	public function create();

	public function get();

	public function update();

	public function delete();

	public function listing();

	public function delisting();

	public function search();

	public function getInventory();

	public function getOnsale();
}


?>
