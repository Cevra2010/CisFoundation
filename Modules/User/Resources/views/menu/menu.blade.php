<div class="flex space-x-3 cis-container">
@foreach($menu->getParentEntries() as $parent)
    <a href="{{ $parent->getUrl() }}">
        <div class="p-2  @if($parent->isCurrent()) bg-slate-600 text-slate-100 @else bg-slate-400 text-slate-200 @endif font-light rounded-md shadow-md">
            {{ $parent->getIcon() }} {{ $parent->getText() }}
        </div>
    </a>
@endforeach
</div>
