<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function insertComment($data)
    {
    	$this->insert([
    		'article_id'=>$data['article_id'],
    		"commenter_touch"=>$data['commenter_touch'],
    		"commenter_name"=>$data['commenter_name'],
    		"commenter_speak"=>$data['commenter_speak']
    	]);
    }
}
