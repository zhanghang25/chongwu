<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class RsRegion extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'rs_region';
	public $timestamps = false;
	protected $fillable = array('rs_id', 'region_id');
	protected $guarded = array();

	public function getRsId()
	{
		return $this->rs_id;
	}

	public function getRegionId()
	{
		return $this->region_id;
	}

	public function setRsId($value)
	{
		$this->rs_id = $value;
		return $this;
	}

	public function setRegionId($value)
	{
		$this->region_id = $value;
		return $this;
	}
}

?>
