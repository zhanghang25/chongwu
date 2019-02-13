<?php
//zend 锦尚中国源码论坛
namespace App\Repositories\Bonus;

class BonusTypeRepository
{
	public function bonusInfo($bonus_id, $bonus_sn = '')
	{
		return self::join('user_bonus', 'bonus_type.type_id', '=', 'user_bonus.bonus_type_id')->where('bonus_id', $bonus_id)->first();
	}
}


?>
