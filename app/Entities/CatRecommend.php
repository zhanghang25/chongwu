<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class CatRecommend extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'cat_recommend';
	public $timestamps = false;
	protected $fillable = array('cat_id', 'recommend_type');
	protected $guarded = array();

	public function getCatId()
	{
		return $this->cat_id;
	}

	public function getRecommendType()
	{
		return $this->recommend_type;
	}

	public function setCatId($value)
	{
		$this->cat_id = $value;
		return $this;
	}

	public function setRecommendType($value)
	{
		$this->recommend_type = $value;
		return $this;
	}
}

?>
