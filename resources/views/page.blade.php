@extends('layouts.app')

@section('content')
    @while (have_posts())
        @php(the_post())
        {{-- @include('partials.page-header') --}}
        @if (!is_front_page())
            @include('partials.content-page_title')
        @endif
        @includeFirst(['partials.content-page', 'partials.content'])
    @endwhile
@endsection
