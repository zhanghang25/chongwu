<?php
//zend 锦尚中国源码论坛
namespace App\Repositories\Bonus;

class UserBonusRepository
{
	public function getUserBonusCount($userId)
	{
		return \App\Models\UserBonus::where('user_id', $userId)->count();
	}
}


?>
