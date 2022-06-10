@extends("layouts.app.app")

@section("content")

    <x-breadcrumbs slug="users" />
    <h1 class="cis-headline">
        {{ __("Benutzerübersicht") }}
    </h1>

    <div class="cis-container">
        <x-cis-table name="users" />
    </div>
@endsection
