
<div class="block-menu-right">
    <ul class="list notStyle clearfix">
        @foreach($tagListOne as $tag)
            <li>
                <a href="{{route('collection')}}">{{$tag->tag_name}}</a>
            </li>
        @endforeach
    </ul>
</div>