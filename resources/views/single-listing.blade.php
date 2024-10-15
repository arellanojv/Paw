@extends('layouts.app')

@section('content')
    @include('partials.content-page_title')
    @while (have_posts())
        @php(the_post())
        @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    @endwhile
@endsection
