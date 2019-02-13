<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class SolveDealconcurrent extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'solve_dealconcurrent';
	public $timestamps = false;
	protected $fillable = array('user_id', 'orec_id', 'add_time', 'solve_type');
	protected $guarded = array();

	public function getUserId()
	{
		return $this->user_id;
	}

	public function getOrecId()
	{
		return $this->orec_id;
	}

	public function getAddTime()
	{
		return $this->add_time;
	}

	public function getSolveType()
	{
		return $this->solve_type;
	}

	public function setUserId($value)
	{
		$this->user_id = $value;
		return $this;
	}

	public function setOrecId($value)
	{
		$this->orec_id = $value;
		return $this;
	}

	public function setAddTime($value)
	{
		$this->add_time = $value;
		return $this;
	}

	public function setSolveType($value)
	{
		$this->solve_type = $value;
		return $this;
	}
}

?>
