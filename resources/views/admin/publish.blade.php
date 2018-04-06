<!DOCTYPE html>
<html>
<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/editor.md/editormd.min.js"></script>
<link href="/js/editor.md/css/editormd.css" rel="stylesheet">
<head>
	<meta name="_token" content="{!! csrf_token() !!}"/>
	<title>发表</title>
</head>
<link href="http://cdn.bootcss.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.test4{
	    width: 0;
	    height: 0;
	    border-top: 50px solid transparent;
	    border-right: 50px solid red;
	    border-bottom: 50px solid transparent;
	}
</style>
  <body>
  	<center><font size="20">创作中心</font></center>
  <div class="row" style="width: 90%;margin-left: 80px;">
			<div >
				<div class="input-group">
					<div class="input-group-btn">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							<span id="select_type" select_id='0'>选择类别</span> 
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li ><a href="#" op_id="1">生活</a></li>
							<li ><a href="#" op_id="2">科技</a></li>
							<li ><a href="#" op_id="3">编程</a></li>
							<li ><a href="#" op_id="4">其他</a></li>
						</ul>
					</div><!-- /btn-group -->
					<input type="text" class="form-control" style="width: 80%" placeholder="请输入标题" id="article_title">
					<button type="button" class="btn btn-info" id="submit"  data-toggle="modal" data-target="#myModal" style="margin-left:13%">发表</button>
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 --><br>
	</div>	
  <div class="editormd" id="test-editormd">  
  <textarea class="editormd-markdown-textarea" name="test-editormd-markdown-doc"></textarea>  
  <!-- 第二个隐藏文本域，用来构造生成的HTML代码，方便表单POST提交，这里的name可以任意取，后台接受时以这个name键为准 -->  
  <textarea class="editormd-html-textarea" name="text"></textarea>  
</div> 
<script type="text/javascript">  
  $(function() {  
    window.testEditor =  editormd("test-editormd", {  
          width   : "90%",  
          height  : 640,  
          syncScrolling : "single",  
          //你的lib目录的路径，我这边用JSP做测试的  
          path    : "/js/editor.md/lib/",  
          //这个配置在simple.html中并没有，但是为了能够提交表单，使用这个配置可以让构造出来的HTML代码直接在第二个隐藏的textarea域中，方便post提交表单。  
          saveHTMLToTextarea : true  
      });  
  });  
</script>
<script src="/plugin/layui/layui.js"></script>
<!-- <script type="text/javascript" src="/js/admin/publiser.js"></script> -->
    <script type="text/javascript">
        layui.config({
            base: '/js/admin/'
        }).use('publiser');
    </script>
  </body>
</html>