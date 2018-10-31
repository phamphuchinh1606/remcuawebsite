<?php use App\Common\Constant; ?>
<section id="blogHome" class="blockSection blogHome">
    <div class="container">
        <div class="wapperBlogHome">
            <div class="featuredTitle">
                <a href="{{route('blog')}}">
                    <h2>Tin tức mới</h2>
                </a>

                <p class="titleDesc">
                    Tin công nghệ, cập nhật tin tức nhanh nhất và mới nhất
                </p>

            </div>
            <div class="blogsList">
                <ul class="slideBlogHome owlDesign notDots notStyle">
                    @foreach($blogNews as $blog)
                        <li class="articleItem">
                            <div class="insArticleLoop">
                                <div class="articlePostBody bg_w">
                                    <div class="postThumbIMG relative imageHover">
                                        <a href="{{route('blog.detail',['slug' => isset($blog->slug) ? $blog->slug : '1', 'id' => $blog->id])}}">
                                            <img src="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$blog->blog_image)}}" style="height:371px"
                                                 alt="{{$blog->blog_title}}">
                                        </a>
                                        <div class="createdInfo">
                                            <ul class="notStyle">
                                                <li class="time"><i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <time>{{$blog->str_post_date}}</time>
                                                </li>
                                                <li class="comment"><i class="fa fa-comments-o"
                                                                       aria-hidden="true"></i> <span>0</span></li>
                                                <li class="post"><i class="fa fa-pencil-square-o"
                                                                    aria-hidden="true"></i> <span>{{$appInfo->app_name}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="postDetail">
                                        <div class="detail clearfix">
                                            <h3>
                                                <a href="{{route('blog.detail',['slug' => isset($blog->slug) ? $blog->slug : '1', 'id' => $blog->id])}}"
                                                   title="{{$blog->blog_title}}">{{$blog->blog_title}}</a>
                                            </h3>
                                            <p>{{$blog->dot_blog_description}}</p>
                                            <a href="{{route('blog.detail',['slug' => isset($blog->slug) ? $blog->slug : '1', 'id' => $blog->id])}}"
                                               class="view" title="Xem thêm">Xem thêm <i
                                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</section>
