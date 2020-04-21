@if($breadcrumbs)
    <ul class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)
                <li><a href="{{ $breadcrumb->url }}" class="grey-link">{{ $breadcrumb->title }}</a> <span style="margin: 0px 3px;"><img src="{{ asset('images/icons/breadcrumb-marker.png') }}" alt=""></span></li>
            @else
                <li> <a href="{{ $breadcrumb->url }}" class="grey-link">{{ $breadcrumb->title }}</a></li>
            @endif
        @endforeach
    </ul>
@endif
