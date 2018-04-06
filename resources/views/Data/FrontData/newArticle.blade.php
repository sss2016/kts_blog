           @foreach($datas as $iteam)
            <div class="excerpt">
                <header>
                    <a class="cat" href="#">{{$iteam->type_name}}<i></i></a>
                    <h2><a href="/detail/{{$iteam->id}}">{{$iteam->title}}</a></h2>
                </header>
                <p>{{$iteam->summeray}}</p>
                <p class="meta">
                    <a class="category" href="#"><i class="glyphicon glyphicon-folder-open"></i> {{$iteam->type_name}}</a>
                    <a class="time" href="#"><i class="glyphicon glyphicon-time"></i> {{$iteam->created_at}}</a>
                    <a class="views" href="#"><i class="glyphicon glyphicon-eye-open"></i> 88</a>
                    <a class="comment" href="#"><i class="glyphicon glyphicon-comment"></i> 10</a>
                </p>
            </div>
            @endforeach
