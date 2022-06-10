@foreach($menu->getParentEntries() as $parent)
    <a href="{{ $parent->getUrl() }}">
        <div class="text-white p-2 px-6 font-bold flex hover:bg-gray-700 @if($parent->isCurrent()) bg-cyan-700 @endif">
            <div class="w-10">
                @if($parent->icon)
                    <i class="fa-solid fa-{{ $parent->icon }}"></i>
                @endif
            </div>
            {{ $parent->text }}

        </div>
    </a>
    @foreach ($menu->getChildEntries($parent->slug) as $child)
    <a href="{{ $child->getUrl() }}">
        <div class="text-gray-200 p-2 px-6 flex hover:bg-gray-700 @if($child->isCurrent()) bg-cyan-700 @endif">
            <div class="w-10"></div>
            {{ $child->text }}
        </div>
    </a>
    @endforeach
@endforeach
