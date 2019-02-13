<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class ShippingDate extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'shipping_date';
	protected $primaryKey = 'shipping_date_id';
	public $timestamps = false;
	protected $fillable = array('start_date', 'end_date', 'select_day', 'select_date');
	protected $guarded = array();

	public function getStartDate()
	{
		return $this->start_date;
	}

	public function getEndDate()
	{
		return $this->end_date;
	}

	public function getSelectDay()
	{
		return $this->select_day;
	}

	public function getSelectDate()
	{
		return $this->select_date;
	}

	public function setStartDate($value)
	{
		$this->start_date = $value;
		return $this;
	}

	public function setEndDate($value)
	{
		$this->end_date = $value;
		return $this;
	}

	public function setSelectDay($value)
	{
		$this->select_day = $value;
		return $this;
	}

	public function setSelectDate($value)
	{
		$this->select_date = $value;
		return $this;
	}
}

?>
