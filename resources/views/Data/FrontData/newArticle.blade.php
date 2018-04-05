           @foreach($datas as $iteam)
            <div class="excerpt">
                <header>
                    <a class="cat" href="#">{{$iteam->type_name}}<i></i></a>
                    <h2><a href="/detail">{{$iteam->title}}</a></h2>
                </header>
                <p>产品经理如何绘制产品架构图，这里有很多的学问，包括需求、业务流程等等。。产品经理如何绘制产品架构图，这里有很多的学问，包括需求、业务流程等等。。产品经理如何绘制产品架构图，这里有很多的学问，包括需求、业务流程等等。。产品经理如何绘制产品架构图，这里有很多的学问，包括需求、业务流程等等。。</p>
                <p class="meta">
                    <a class="category" href="#"><i class="glyphicon glyphicon-folder-open"></i> 产品</a>
                    <a class="time" href="#"><i class="glyphicon glyphicon-time"></i> 2018-3-20</a>
                    <a class="views" href="#"><i class="glyphicon glyphicon-eye-open"></i> 88</a>
                    <a class="comment" href="#"><i class="glyphicon glyphicon-comment"></i> 10</a>
                </p>
            </div>
            @endforeach
