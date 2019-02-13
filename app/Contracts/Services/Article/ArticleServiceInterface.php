<?php
//zend 锦尚中国源码论坛
namespace App\Contracts\Services\Article;

interface ArticleServiceInterface
{
	public function all($id);

	public function show($id);

	public function agreement();

	public function help();
}


?>
