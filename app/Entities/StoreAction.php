<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class StoreAction extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'store_action';
	protected $primaryKey = 'action_id';
	public $timestamps = false;
	protected $fillable = array('parent_id', 'action_code', 'relevance', 'action_name');
	protected $guarded = array();

	public function getParentId()
	{
		return $this->parent_id;
	}

	public function getActionCode()
	{
		return $this->action_code;
	}

	public function getRelevance()
	{
		return $this->relevance;
	}

	public function getActionName()
	{
		return $this->action_name;
	}

	public function setParentId($value)
	{
		$this->parent_id = $value;
		return $this;
	}

	public function setActionCode($value)
	{
		$this->action_code = $value;
		return $this;
	}

	public function setRelevance($value)
	{
		$this->relevance = $value;
		return $this;
	}

	public function setActionName($value)
	{
		$this->action_name = $value;
		return $this;
	}
}

?>
