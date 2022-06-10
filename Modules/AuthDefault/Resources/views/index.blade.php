@extends("layouts.auth.app")

@section("content")
<div class="text-slate-400 font-bold text-2xl mb-2 mx-auto text-center">
    CIS-Foundation
</div>
<div class="text-slate-50 font-bold text-4xl mb-4 mx-auto text-center">
    Bitte anmelden
</div>
<div class="bg-slate-50 rounded-sm shadow-md p-8 mb-2">

    <form action="{{ route("auth.default.submit") }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="flex flex-col">
                @if($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-900 rounded-md shadow-md mb-4 p-3">
                        <ul class="m-2 ml-4 list-disc">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <label class="form-label">Benutzername</label>
                <input type="text" class="form-input w-96 @error("username") form-input-invalid @enderror" value="{{ old("username") }}" name="username">
                <label class="form-label">Passwort</label>
                <input class="form-input w-96 @error("password") form-input-invalid @enderror" type="password" name="password">
                <button type="submit" class="form-button block">Anmelden</button>
            </div>
        </div>
    </form>

    <div class="pt-5">
        <a href="{{ route("auth.choose") }}"><i class="fa fa-key"></i> weitere Anmeldeoptionen</a>
    </div>

</div>

<div class="text-slate-200 text-sm">&copy; 2022 - CIS-Foundation</div>
@endsection
