@if($errors->any())
    <div class="bg-red-100 border rounded-md shadow border-red-200 p-3 text-red-500 mb-4">
        <div class="text-lg font-semibold w-full border-b border-red-200 py-2">
            <i class="fa-solid fa-triangle-exclamation"></i> Es sind fehler aufgetreten
        </div>
        <ul class="mt-2 space-y-2">
        @foreach($errors->all() as $error)
            <li><i class="fa-solid fa-angle-right mr-3 ml-3"></i> {{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


@if(session("success"))
    <div class="bg-teal-100 border rounded-md shadow border-teal-200 p-3 text-teal-500 mb-4">
        @if(session()->get("success") == 1)
            Die Änderungen wurde erfolgreich übernommen.
        @else
            {{ session()->get("success") }}
        @endif
    </div>
@endif
