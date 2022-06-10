@extends("layouts.app.app")

@section("content")
    @component('breadcrumbs',['slug' => 'module.show'])

    @endcomponent
    <x-breadcrumbs slug="module.show" parameters=""/>
@endsection
