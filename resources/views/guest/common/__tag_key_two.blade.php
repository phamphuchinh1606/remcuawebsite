
<div class="block-menu-right">
    <ul class="list notStyle clearfix">
        @foreach($tagListTwo as $tag)
            <li>
                <a href="{{route('collection',['id' => $tag->product_type_id])}}">{{$tag->tag_name}}</a>
            </li>
        @endforeach
    </ul>
</div>