<div class="menu">
    <ul class="megamenu skyblue">
        <li class="{{ Route::is('listWatches') || Route::is('listChildWatches') ?'active' : '' }}"><a class="color2 " href="{{route('listWatches')}}">Watches</a>
            <div class="megapanel">
                <div class="row">
                    <div class="col1">
                        <div class="h_nav">

                            <ul>
                                @foreach ($watchCategories as $watchCategory)
                                    <li><a href={{route('listChildWatches',$watchCategory->id)}}>{{ $watchCategory->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </li>
        <li class="{{ Route::is('listBags') || Route::is('listChildBags') ? 'active' : '' }}">
            <a class="color4" href="{{ route('listBags') }}">Bags</a>
            <div class="megapanel">
                <div class="row">
                    <div class="col1">
                        <div class="h_nav">

                            <ul>
                                @foreach ($bagCategories as $bagCategory)
                                    <li><a href="{{route('listChildBags',$bagCategory->id)}}">{{ $bagCategory->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </li>

        <li class=" grid"><a class="color3" href="index.html">Sale</a></li>
        <li><a class="color7 " href="404.html">News</a></li>
        <div class="clearfix"> </div>
    </ul>
</div>
<div class="clearfix"> </div>


