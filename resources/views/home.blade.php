@extends('common.layout')

@section('content')
    <section class="flex flex-col items-center gap-5 mt-10">
        @include('components.items-on-mind')

        @include('components.top-restaurants')
    </section>
@endsection