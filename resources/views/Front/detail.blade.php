<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="_token" content="{!! csrf_token() !!}"/>
    <title>KangTongShun的个人网站-文章详情</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-default" id="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="logo">
                        <a href="#">KangTongShun</a>
                    </h1>
                </div>
                <div class="collapse navbar-collapse" id="header-navbar">
                    <form class="navbar-form visible-xs" action="#" method="POST">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default btn-search">搜索</button>
                            </span>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">首页</a></li>
                        <li><a href="#">博客</a></li>
                        <li><a href="#">教程</a></li>
                        <li><a href="#">关于</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <header class="article-header">
                    <h1 class="article-title"><a href="#">{{$article_data->title}}</a></h1>
                    <div class="article-meta ">
                        <span class="item category"><a href="# ">{{$article_data->type_name}}</a></span>
                        <span class="item time ">{{$article_data->created_at}}</span>
                        <span class="item tags">标签：<a href="#">架构</a><a href="#">架构</a><a href="#">架构</a></span>
                        <span class="item views"><i class="glyphicon glyphicon-eye-open"></i> 88</span>
                    </div>
                </header>

                <article class="article-content">
                    {!!$article_data->content!!}
                </article>

                <div class="title">
                    <h3>评论</h3>
                </div>
                <div class="article-comment">
                    <form method="post" class="layui-form" id="comment">
                        <input type="text"  name='name' class="form-control" placeholder="您的昵称（必填）">
                        <input type="text" name="touch_way" class="form-control" placeholder="您的邮箱或联系电话（非必填）">
                        <textarea name='comment' class="form-control" rows="3" placeholder="您的评论或留言（必填）"></textarea>
                        <button type="button" id="submit" class="btn btn-default" data_id= "{{$article_data->id}}">发布评论</button>
                    </form>
                </div>

                <div class="postcomments">
                    <ol class="commentlist">
                        @foreach($article_data->comments as $key=>$iteam)
                        <li class="comment-content"><span class="comment-f">#{{$key+1}}楼</span>
                            <div class="comment-main">
                                <p><a class="name" href="#" target="_blank">{{$iteam->commenter_name}}</a><span class="time"> 
                                    {{$iteam->created_at}}
                                </span><br>说：{{$iteam->commenter_speak}}</p>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>

            <div class="sidebar ">
                <div class="widget widget_hot">
                    <h3>文章目录</h3>
                    <ul>
                        <li><a title="" href="#"><span class="text">用DTcms做一个独立博客网站（响应式模板）</span></a></li>
                        <li><a title="" href="#"><span class="text">用DTcms做一个独立博客网站（响应式模板）</span></a></li>
                    </ul>
                </div>
                <div class="widget widget_hot ">
                    <h3>最新文章</h3>
                    <ul>
                        <li>
                            <a title=" " href="# ">
                                <span class="text ">用如何绘制产品架构图</span>
                                <span class="muted ">
                                            <i class="glyphicon glyphicon-time "></i>
                                            2016-11-01
                                        </span>
                                <span class="muted ">
                                            <i class="glyphicon glyphicon-eye-open "></i> 88</span>
                            </a>
                        </li>
                        <li>
                            <a title=" " href="# ">
                                <span class="text ">用如何绘制产品架构图</span>
                                <span class="muted ">
                                            <i class="glyphicon glyphicon-time "></i>
                                            2016-11-01
                                        </span>
                                <span class="muted ">
                                            <i class="glyphicon glyphicon-eye-open "></i> 88</span>
                            </a>
                        </li>
                        <li>
                            <a title=" " href="# ">
                                <span class="text ">用如何绘制产品架构图</span>
                                <span class="muted ">
                                            <i class="glyphicon glyphicon-time "></i>
                                            2016-11-01
                                        </span>
                                <span class="muted ">
                                            <i class="glyphicon glyphicon-eye-open "></i>88</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="footer ">
        <div class="container ">
            <p>Copyright &copy; 2018.Reedo.Inc All rights reserved</p>
        </div>
    </div>



    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js "></script>
    <script src="/js/bootstrap.min.js "></script>
        <script src="/plugin/layui/layui.js"></script>
        <script type="text/javascript">
        layui.config({
            base: "/js/front//"
        }).use('detail');
        </script>
</body>


</html>