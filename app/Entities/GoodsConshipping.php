<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class GoodsConshipping extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_conshipping';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'sfull', 'sreduce');
	protected $guarded = array();

	public function getGoodsId()
	{
		return $this->goods_id;
	}

	public function getSfull()
	{
		return $this->sfull;
	}

	public function getSreduce()
	{
		return $this->sreduce;
	}

	public function setGoodsId($value)
	{
		$this->goods_id = $value;
		return $this;
	}

	public function setSfull($value)
	{
		$this->sfull = $value;
		return $this;
	}

	public function setSreduce($value)
	{
		$this->sreduce = $value;
		return $this;
	}
}

?>
