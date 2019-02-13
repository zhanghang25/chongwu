<?php
//websc 
namespace App\Api\Controllers\Wx;

class CategoryController extends \App\Api\Controllers\Controller
{
	private $categoryService;
	private $authService;

	public function __construct(\App\Services\Category\CategoryService $categoryService, \App\Services\AuthService $authService)
	{
		$this->categoryService = $categoryService;
		$this->authService = $authService;
	}

	public function index(\Illuminate\Http\Request $request)
	{
		// print_r($_SERVER);
		// exit;
		$this->validate($request, array());
		
		// $uid = $this->authService->authorization();
		// if (isset($uid['error']) && 0 < $uid['error']) {
		// 	return $this->apiReturn($uid, 1);
		// }
		//$uid 自己编的假数据
		$uid = 0;
		$list = $this->categoryService->categoryList($uid);
		return $this->apiReturn($list);
	}
}

?>
