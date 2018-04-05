<?php
	function objToList($value)
	{
		return json_decode(json_encode($value));
	}
	function responseToJson($status,$msg){
		    return response()->json([
	                'status'=>$status,
	                'msg'=>$msg
	        ]);
	}
