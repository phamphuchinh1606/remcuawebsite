<?php use App\Common\Constant; ?>
<div class="sing_right_widg_content">
    <ul class="lat_news_right">
        @if(isset($blogNews))
            @foreach($blogNews as $blog)
                <li class="newItem">
                    <div class="wrap clearfix">
                        <a href="{{route('blog.detail',['id' => $blog->id])}}">
                            <img src="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$blog->blog_image)}}" alt="{{$blog->blog_title}}">
                        </a>
                        <div class="lat_news_right_con">
                            <h3>
                                <a href="{{route('blog.detail',['id' => $blog->id])}}">{{$blog->dot_blog_title}}</a>
                            </h3>
                            <h4>{{$blog->str_post_date}}</h4>
                        </div>
                    </div>
                </li>
            @endforeach
        @endif
    </ul>
</div>