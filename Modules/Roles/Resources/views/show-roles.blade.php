@extends("layouts.app.app")

@section("content")

    <x-breadcrumbs slug="cis::roles::show-roles" />
    <h1 class="cis-headline">Benutzerrollen</h1>

    <div class="cis-container">
        <x-cis-table name="roles" />
    </div>
@endsection
