<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class WholesaleExtend extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wholesale_extend';
	protected $primaryKey = 'extend_id';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'is_delivery', 'is_return', 'is_free');
	protected $guarded = array();

	public function getGoodsId()
	{
		return $this->goods_id;
	}

	public function getIsDelivery()
	{
		return $this->is_delivery;
	}

	public function getIsReturn()
	{
		return $this->is_return;
	}

	public function getIsFree()
	{
		return $this->is_free;
	}

	public function setGoodsId($value)
	{
		$this->goods_id = $value;
		return $this;
	}

	public function setIsDelivery($value)
	{
		$this->is_delivery = $value;
		return $this;
	}

	public function setIsReturn($value)
	{
		$this->is_return = $value;
		return $this;
	}

	public function setIsFree($value)
	{
		$this->is_free = $value;
		return $this;
	}
}

?>
