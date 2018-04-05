<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('plugin/layui/css/layui.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
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
                        <li><a href="index.html">首页</a></li>
                        <li><a href="detail.html">博客</a></li>
                        <li><a href="404.html">教程</a></li>
                        <li><a href="404.html">关于</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="introBanner">
            <h3>Reedo</h3>
            <p>有意义的想法，值得全情兑现！</p>
        </div>
        <div class="content-wrap">
            <div class="content">
                <div class="title">
                    <h3>最新发布</h3>
                    <div class="more">
                        <a href="#">产品</a>
                        <a href="#">技术</a>
                        <a href="#">生活笔记</a>
                    </div>
                </div>
                <div id="center_content">
                    <!-- 内容填充 -->
                    @if($initPage)
                        {!!$initPage!!}
                    @else
                        <div><center>暂无数据</center></div>
                    @endif

                </div>
                <!-- <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav> -->
            </div>
            <div class="sidebar">
                <div class="widget widget_hot">
                    <h3>最新文章</h3>
                    <ul>
                        <li>
                            <a title="" href="#">
                                <span class="text">用如何绘制产品架构图</span>
                                <span class="muted">
                                            <i class="glyphicon glyphicon-time"></i>
                                            2016-11-01
                                        </span>
                                <span class="muted">
                                            <i class="glyphicon glyphicon-eye-open"></i> 88</span>
                            </a>
                        </li>
                        <li>
                            <a title="" href="#">
                                <span class="text">用如何绘制产品架构图</span>
                                <span class="muted">
                                            <i class="glyphicon glyphicon-time"></i>
                                            2016-11-01
                                        </span>
                                <span class="muted">
                                            <i class="glyphicon glyphicon-eye-open"></i> 88</span>
                            </a>
                        </li>
                        <li>
                            <a title="" href="#">
                                <span class="text">用如何绘制产品架构图</span>
                                <span class="muted">
                                            <i class="glyphicon glyphicon-time"></i>
                                            2016-11-01
                                        </span>
                                <span class="muted">
                                            <i class="glyphicon glyphicon-eye-open"></i>88</span>
                            </a>
                        </li>
                        <li>
                            <a title="" href="#">
                                <span class="text">用如何绘制产品架构图</span>
                                <span class="muted">
                                            <i class="glyphicon glyphicon-time"></i>
                                            2016-11-01
                                        </span>
                                <span class="muted">
                                            <i class="glyphicon glyphicon-eye-open"></i>88</span>
                            </a>
                        </li>
                        <li>
                            <a title="" href="#">
                                <span class="text">用如何绘制产品架构图</span>
                                <span class="muted">
                                            <i class="glyphicon glyphicon-time"></i>
                                            2016-11-01
                                        </span>
                                <span class="muted">
                                            <i class="glyphicon glyphicon-eye-open"></i>88</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="widget widget_category">
                    <h3>文章分类</h3>
                    <ul>
                        <li><a href="#"><span class="text"><i class="glyphicon glyphicon-triangle-right"></i>类目一</span><span class="count">1篇</span></a></li>
                        <li><a href="#"><span class="text"><i class="glyphicon glyphicon-triangle-right"></i>类目一</span><span class="count">1篇</span></a></li>
                        <li><a href="#"><span class="text"><i class="glyphicon glyphicon-triangle-right"></i>类目一</span><span class="count">1篇</span></a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h3>归档</h3>
                    <ul>
                        <li><a><span class="text"><i class="glyphicon glyphicon-play-circle"></i> 2018年3月</span></a></li>
                        <li><a><span class="text"><i class="glyphicon glyphicon-play-circle"></i> 2018年3月</span></a></li>
                        <li><a><span class="text"><i class="glyphicon glyphicon-play-circle"></i> 2018年3月</span></a></li>
                    </ul>
                </div>
                <div class="widget widget_sentence">
                    <h3>标签云</h3>
                    <ul>
                        <li><a href="#">移动 <span class="badge">1</span></a></li>
                        <li><a href="#">产品 <span class="badge">1</span></a></li>
                        <li><a href="#">移动统计 <span class="badge">1</span></a></li>
                        <li><a href="#">移动统计 <span class="badge">1</span></a></li>
                        <li><a href="#">移动统计 <span class="badge">1</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>Copyright &copy; 2018.Reedo.Inc All rights reserved</p>
        </div>
    </div>



    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/plugin/layui/layui.js"></script>
        <script type="text/javascript">
        layui.config({
            base: "/js/front//"
        }).use('sender');
    </script>
</body>

</html>