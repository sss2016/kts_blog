layui.define(['laypage', 'layer', 'form', 'pagesize'], function (exports) {
	var layer = layui.layer;
	$.ajaxSetup({
   		headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	});
	function publishArticle() {
		var type = $('#select_type').attr('select_id');
		var sendData = {
			"content_inner":testEditor.getPreviewedHTML(),
			"content_title":$('#article_title').val(),
			"type":type
		}
		if (type==0){
			layer.alert('请选择文章类型');
			return;
		}
		var status = frontValidata(sendData);

		if (status==1) {
			layer.alert('内容太少')
		}else if(status==2)
			layer.alert('标题太短')
		else if (status==0){
			$.post("/admin/submit",sendData,function(res){
					if(res.status) 
					   layer.alert(res.msg)
					else
					   layer.alert(res.msg)
			})
		}
	}
	$('body').on('click','.dropdown-menu a',function(event){

			var selId = event.target.getAttribute('op_id');
			$('#select_type').attr('select_id',selId);
			$('#select_type').html(event.target.innerHTML);
	})
	$('body').on('click','#submit',publishArticle);
	function frontValidata(sendData){
		 var status = 0;
		 var inner=sendData.content_inner.replace(/<\/?.+?>/g,"");
		 var title=sendData.content_title.replace(/<\/?.+?>/g,"");
         var ddi=inner.replace(/ /g,"");//dds为得到后的内容
         var ddt=inner.replace(/ /g,"");
         console.log(ddi);
         if (ddi.length<10) {
         	status=1;
         }
         if (ddt.length<10) {
         	status=2;
         }
         return status;

	}
	exports('publiser',{})
})
