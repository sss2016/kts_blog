layui.define(['layer','form',], function(exports){
	var layer = layui.layer
	$.ajaxSetup({
   		headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	});
	 $('#submit').click(function() {
	    var data = {};
	    var t = $('form').serializeArray();
	    $.each(t, function() {
	      data[this.name] = this.value;
	    });
	    if (isPoneAvailable(data['touch_way'])||check(data['touch_way'])) {
	    	if (data['comment'].replace(' ','')==''&&data['name'].replace(' ','')=='') {
	    		layer.alert("请填写必填字段（内容和昵称）")
	    	}else{
	    		if (getCookie('comment')==null) {
	    			setCookie('comment',6)
	    			
	    			
	    		}else{
	    			layer.alert('请休息一下在评论')
	    			return
	    		}
	    		var data = {
	    			'article_id':$('#submit').attr('data_id'),
	    			'commenter_touch':data['touch_way'],
	    			'commenter_name':data['name'],
	    			'commenter_speak':data['comment']
	    		}
	    		$.post('/sendComment',data,function(res){
	    			layer.alert('评论成功',function(ews){
	    				window.location.reload()

	    			})
	    		})
	    	}
	    }else 
	    	layer.alert('手机号或邮箱格式不正确')
	  });
	 function isPoneAvailable(poneInput) {  
          var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;  
          if (!myreg.test(poneInput)) {  
              return false;  
          } else {  
              return true;  
          }  
      }
      function check( email_address )
 	{
 		var regex = /^([0-9A-Za-z\-_\.]+)@([0-9a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)$/g;
		  if ( regex.test( email_address ) )
		   return true;
		return false;
		  
 	}
 	function setCookie(name,value)
	{
		// var Days = 30;Days*24*
		var exp = new Date();
		exp.setTime(exp.getTime() + 60*1000);
		document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
	}
	function getCookie(name)
	{
		var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
		if(arr=document.cookie.match(reg))
		return unescape(arr[2]);
		else
		return null;
	}
	exports('detail',{});
})