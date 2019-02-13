<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class DrpUserCredit extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'drp_user_credit';
	public $timestamps = false;
	protected $fillable = array('credit_name', 'min_money', 'max_money');
	protected $guarded = array();

	public function getCreditName()
	{
		return $this->credit_name;
	}

	public function getMinMoney()
	{
		return $this->min_money;
	}

	public function getMaxMoney()
	{
		return $this->max_money;
	}

	public function setCreditName($value)
	{
		$this->credit_name = $value;
		return $this;
	}

	public function setMinMoney($value)
	{
		$this->min_money = $value;
		return $this;
	}

	public function setMaxMoney($value)
	{
		$this->max_money = $value;
		return $this;
	}
}

?>
