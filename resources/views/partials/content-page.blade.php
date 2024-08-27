@if (get_field( "enable_hero_section" ) && is_front_page())
 @include('partials.content-hero')
@endif

@if ($pagination)
  <nav class="page-nav" aria-label="Page">
    {!! $pagination !!}
  </nav>
@endif
