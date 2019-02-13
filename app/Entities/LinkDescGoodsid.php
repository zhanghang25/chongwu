<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class LinkDescGoodsid extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'link_desc_goodsid';
	public $timestamps = false;
	protected $fillable = array('d_id', 'goods_id');
	protected $guarded = array();

	public function getDId()
	{
		return $this->d_id;
	}

	public function getGoodsId()
	{
		return $this->goods_id;
	}

	public function setDId($value)
	{
		$this->d_id = $value;
		return $this;
	}

	public function setGoodsId($value)
	{
		$this->goods_id = $value;
		return $this;
	}
}

?>
