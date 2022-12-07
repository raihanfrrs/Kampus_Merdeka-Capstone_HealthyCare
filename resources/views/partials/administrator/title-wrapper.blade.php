<h1 class="mt-4">
    @if (count(Request::segments()) == 0)
        Dashboard
    @else 
        {{ Str::ucfirst(isset($title) ? $title : Request::segment(1)) }}
    @endif
</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    @if (count(Request::segments()) >= 1)
    @if (request()->is(Request::segment(1)."/*"))
    <li class="breadcrumb-item" aria-current="page">
        <a href="{{ url()->previous() }}">{{ Str::ucfirst(Request::segment(1)) }}</a>
    </li>
    @endif
    <li class="breadcrumb-item" aria-current="page">
        <a href="{{ url()->current() }}" 
            class="@if(request()->segment(count(request()->segments()))) text-primary @endif">
            {{ isset($subtitle) ? Str::ucfirst($subtitle) : Str::ucfirst(request()->segment(count(request()->segments()))) }}
        </a>
    </li>
    @endif
</ol>