<?php
//zend 锦尚中国源码论坛
namespace App\Repositories\Comment;

class CommentRepository
{
	public function orderAppraiseAdd($args)
	{
		$commemt = new \App\Models\Comment();

		foreach ($args as $k => $v) {
			$commemt->$k = $v;
		}

		return $commemt->save();
	}
}


?>
