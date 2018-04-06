<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
class Article extends Model
{
   public  function label()
   {
   	 return  $this->hasMany('App\Models\Label_articles');
   }
   public function type($value='')
   {
   	return $this->hasOne('App\Models\Type',"id","type_id");
   }
   public function comments($value='')
   {
   		return  $this->hasMany('App\Models\Comment')->orderBy('created_at');
   }
   public function getOneArticle($id){
   		$res = $this->find($id);
   		$res->labels=$res->label;
   		$res->type_name=$res->type->name;
   		$res->commentList = $res->comments;
   		return $res;
   }
   public function getArticles($value='')
   {
   		$list = $this->orderBy('created_at','desc')->Paginate(5);
   		foreach ( $list as $item) {
   			$item->labels=$item->label;
   			$item->type_name=$item->type->name;
   			$item->summeray =strip_tags(mb_substr($item->content, 0, 50, 'utf8')); 
   		}
   		return $list;
   }
   public function insertNewArticle($obj)
   {
   $status = $this->insert([
   		'content'=>$obj['content_inner'],
   		'title'=>$obj['content_title'],
   		'type_id'=>$obj['type'],
   		'publisher_id'=>1
   	]);
   return $status;
   }
}
