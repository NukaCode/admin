@if (isset($details->subSections) && count($details->subSections) > 0)
    <a>
        <i class="fa fa-circle-o"></i>
        <span class="nav-label">{{ $details->name }}</span>
        <span class="fa fa-caret-down pull-right"></span>
    </a>
@else
    <a href="{{ URL::route($details->route, [], false) }}" id="{{ Str::slug($details->name) }}">
        <i class="fa fa-circle-o"></i>
        <span class="nav-label">{{ $details->name }}</span>
    </a>
@endif