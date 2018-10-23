@if (count($breadcrumbs))

    <div class="insBreadcrumb ">
        <div class="container">
            <div class="breadcrumb-wrap">
                <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
                    @foreach ($breadcrumbs as $breadcrumb)

                        @if ($breadcrumb->url && !$loop->last)
                            <li>
                                <a href="{{ $breadcrumb->url }}" target="_self">{{ $breadcrumb->title }}</a>
                            </li>
                        @else
                            <li class="active"><span>{{ $breadcrumb->title }}</span></li>
                        @endif

                    @endforeach
                </ol>
            </div>
        </div>
    </div>

@endif
