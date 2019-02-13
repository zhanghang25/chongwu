<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class VoteLog extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'vote_log';
	protected $primaryKey = 'log_id';
	public $timestamps = false;
	protected $fillable = array('vote_id', 'ip_address', 'vote_time');
	protected $guarded = array();

	public function getVoteId()
	{
		return $this->vote_id;
	}

	public function getIpAddress()
	{
		return $this->ip_address;
	}

	public function getVoteTime()
	{
		return $this->vote_time;
	}

	public function setVoteId($value)
	{
		$this->vote_id = $value;
		return $this;
	}

	public function setIpAddress($value)
	{
		$this->ip_address = $value;
		return $this;
	}

	public function setVoteTime($value)
	{
		$this->vote_time = $value;
		return $this;
	}
}

?>
