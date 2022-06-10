@if($breadcrumbs->count())
    <div class="w-full flex font-light text-sm text-slate-500 p-2 bg-slate-300 items-center space-x-3">
        <i class="fa fa-home"></i>
        <i class="fa-solid fa-angles-right"></i>
        @foreach($breadcrumbs as $breadcrumb)
            @if($loop->last)
                <p class="bg-slate-200 p-1 rounded-md">{{ __($breadcrumb->title) }}</p>
            @else
                <p>{{ __($breadcrumb->title) }}</p>
                <i class="fa-solid fa-angles-right"></i>
            @endif
        @endforeach
    </div>
@endif
