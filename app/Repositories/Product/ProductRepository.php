<?php
//zend 锦尚中国源码论坛
namespace App\Repositories\Product;

class ProductRepository
{
	private $model;

	public function __construct()
	{
		$this->model = \App\Models\Products::where('product_id', '<>', 0);
	}

	public function field($filed)
	{
		$this->model->select($filed);
		return $this;
	}

	public function findBy($column)
	{
		foreach ($column as $k => $v) {
			$this->model = $this->model->where($k, $v);
		}

		return $this;
	}

	public function column($column)
	{
		$row = $this->model->select($column)->first();

		if ($row === null) {
			return array();
		}

		$row = $row->toArray();
		return $row[$column];
	}
}


?>
