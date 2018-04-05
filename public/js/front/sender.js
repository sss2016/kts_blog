layui.define(['element', 'layer','flow'],function (exports){
	var $ = layui.jquery;
	var element = layui.element();
    var layer = layui.layer;
     var flow = layui.flow;
    var c_page = 1;
    $.ajaxSetup({
   		headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	});
    function loadData() {
    	$.post('/loadData',
    	{
    		'page':c_page
    	},function (data) {
    		$('#center_content').html(data)
    	}
    	)
    }
    flow.load({
      elem: '#center_content' //指定列表容器
     ,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
      	var lis = [];
      //以jQuery的Ajax请求为例，请求下一页数据（注意：page是从2开始返回）
      $.post('/loadData',
    	{
    		'page':c_page
    	},function(res){
        //假设你的列表返回在data集合中
	          c_page= res.pageinfo.current_page+1
	          lis.push(res.html);
	          console.log(c_page+"--"+res.pageinfo.last_page)
        //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
        //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
        next(lis.join(''), c_page < res.pageinfo.last_page);
      });
    }
  });

     exports('sender', {});
}

)