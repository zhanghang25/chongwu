<?php
//zend 锦尚中国源码论坛
namespace App\Repositories\Goods;

class CollectGoodsRepository
{
	public function findByUserId($userId, $page, $size)
	{
		$start = ($page - 1) * $size;
		return \App\Models\CollectGoods::where('user_id', $userId)->offset($start)->limit($size)->get()->toArray();
	}

	public function findOne($goodsId, $uid)
	{
		$cg = \App\Models\CollectGoods::where('goods_id', $goodsId)->where('user_id', $uid)->first();

		if ($cg === null) {
			return array();
		}

		return $cg->toArray();
	}

	public function addCollectGoods($goodsId, $uid)
	{
		$model = new \App\Models\CollectGoods();
		$model->user_id = $uid;
		$model->goods_id = $goodsId;
		$model->add_time = gmtime();
		$model->is_attention = 0;
		return $model->save();
	}

	public function deleteCollectGoods($goodsId, $uid)
	{
		return \App\Models\CollectGoods::where('goods_id', $goodsId)->where('user_id', $uid)->delete();
	}
}


?>
