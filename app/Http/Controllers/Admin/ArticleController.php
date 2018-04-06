<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ArticleController extends Controller
{
	var $Article = null;
	function __construct()
	{
		$this->Article = new Article();
	}
	public function writeData(Request $request)
	{
		$status = $this->Article->insertNewArticle($request->all());
		if ($status) return responseToJson(1,'发表成功');
		return responseToJson(1,'发表失败');
	}
}
?>