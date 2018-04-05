<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Article;
class IndexController extends Controller
{
	var $article_  = null;
	function  __construct(){
		$this->article_ = new Article();
	}
	public function indexShow($value='')
	{
		$initPage = $this->loadData()['html'];

		return view('Front.index')->with('initPage',$initPage);
	}
	public function detailShow(){
		return view('Front.detail');
	}
	public function loadData(){
		$data = $this->article_->getArticles();
		$pageinfo=$this->getPageInfo($data);
		$view = view('Data.FrontData.newArticle')
		->with(['datas'=>$data,'pageinfo'=>$pageinfo]);
		$html = response($view)->getContent();
		return [
	                'pageinfo'=>$pageinfo,
	                'html'=>$html
	       		];
	}
	public function getPageInfo($pageObj)
	{
		//返回分页信息
		$page_info=[
			'current_page'=>$pageObj->currentPage(),
			'last_page'=>$pageObj->lastPage()
		];
		return $page_info;
	}

}