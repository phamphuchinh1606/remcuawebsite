
<div class="block-menu-right">
    <ul class="list notStyle clearfix">
        @foreach($tagListOne as $tag)
            <li>
                <a href="{{route('collection',[isset($tag->slug) ? $tag->slug : '1', 'id' => $tag->product_type_id])}}">{{$tag->tag_name}}</a>
            </li>
        @endforeach
    </ul>
</div>