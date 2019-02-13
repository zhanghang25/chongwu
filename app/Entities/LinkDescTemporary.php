<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class LinkDescTemporary extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'link_desc_temporary';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'ru_id');
	protected $guarded = array();

	public function getGoodsId()
	{
		return $this->goods_id;
	}

	public function getRuId()
	{
		return $this->ru_id;
	}

	public function setGoodsId($value)
	{
		$this->goods_id = $value;
		return $this;
	}

	public function setRuId($value)
	{
		$this->ru_id = $value;
		return $this;
	}
}

?>
