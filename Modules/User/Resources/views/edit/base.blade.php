@extends("layouts.app.app")

@section("content")
    <x-breadcrumbs slug="user::edit.base"/>

    <x-menu slug="user" />
    <h1 class="cis-headline">{{ $user->firstname }} {{ $user->lastname }}</h1>

    <div class="cis-container">
        <div class="cis-box">

            @include("layouts.app.helpers.error_success")

            <form action="{{ route("user::edit.base.store") }}" method="POST">
                @csrf
                <input type="hidden" name="row_id" value="{{ $user->row_id }}">
                <div class="cis-form-group">
                    <label class="cis-form-label @error("firstname") text-red-500 @enderror">Vorname</label>
                    <input type="text" class="cis-form-input" name="firstname" value="{{ old("firstname",$user->firstname) }}">
                </div>

                <div class="cis-form-group">
                    <label class="cis-form-label">Nachname</label>
                    <input type="text" class="cis-form-input" name="lastname" value="{{ old("lastname",$user->lastname) }}">
                </div>

                <div class="cis-form-group">
                    <label class="cis-form-label">Benutzername</label>
                    <input type="text" class="cis-form-input" name="username" value="{{ old("username",$user->username) }}">
                </div>

                <div class="cis-form-group">
                    <label class="cis-form-label">E-Mail Adresse</label>
                    <input type="text" class="cis-form-input" name="email" value="{{ old("email",$user->email) }}">
                </div>

                <div class="cis-form-group">
                    <button type="submit" class="form-button">Änderungen speichern</button>
                </div>
            </form>
        </div>
    </div>
@endsection
