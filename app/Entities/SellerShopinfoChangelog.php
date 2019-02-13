<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class SellerShopinfoChangelog extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'seller_shopinfo_changelog';
	public $timestamps = false;
	protected $fillable = array('ru_id', 'data_key', 'data_value');
	protected $guarded = array();

	public function getRuId()
	{
		return $this->ru_id;
	}

	public function getDataKey()
	{
		return $this->data_key;
	}

	public function getDataValue()
	{
		return $this->data_value;
	}

	public function setRuId($value)
	{
		$this->ru_id = $value;
		return $this;
	}

	public function setDataKey($value)
	{
		$this->data_key = $value;
		return $this;
	}

	public function setDataValue($value)
	{
		$this->data_value = $value;
		return $this;
	}
}

?>
