<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
class IndexController extends Controller
{
	var $article_  = null;
	var $comment_  = null;
	function  __construct(){
		$this->article_ = new Article();
		$this->comment_ = new Comment();
	}
	public function indexShow($value='')
	{
		$initPage = $this->loadData()['html'];

		return view('Front.index')->with('initPage',$initPage);
	}
	public function detailShow(Request $request){
		$id = $request->route( 'article_id' );
		$article_data = $this->article_->getOneArticle($id);
		return view('Front.detail')->with('article_data',$article_data);
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
	public function sendComment(Request $request)
	{
		$this->comment_->insertComment($request->all());
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