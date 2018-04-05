<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
class Article extends Model
{
   public  function label(){
   	 return  $this->hasMany('App\Models\Label');
   }
   public function type($value='')
   {
   	return $this->hasOne('App\Models\Type',"id","type_id");
   }
   public function getArticles($value='')
   {
   		$list = $this->orderBy('created_at','desc')->Paginate(2);
   		// $datas = collect($list->data);
   		foreach ( $list as $item) {
   			$item->labels=$item->labels;
   			$item->type_name=$item->type->name;
   		}
   		return $list;
   }
}
