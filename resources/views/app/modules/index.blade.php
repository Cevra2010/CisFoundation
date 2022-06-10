@extends("layouts.app.app")

@section("content")

    <x-breadcrumbs slug="modules" />

    <h1 class="cis-headline">
        Module verwalten
    </h1>

    <div class="m-10">

        <x-cis-table name="active-modules" />

    </div>

@endsection
