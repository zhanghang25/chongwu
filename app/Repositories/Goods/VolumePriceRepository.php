<?php
//zend 锦尚中国源码论坛
namespace App\Repositories\Goods;

class VolumePriceRepository
{
	public function allVolumes($goods_id, $price_type)
	{
		$res = \App\Models\VolumePrice::where('goods_id', $goods_id)->where('price_type', $price_type)->orderBy('volume_number')->get()->toArray();
		return $res;
	}
}


?>
