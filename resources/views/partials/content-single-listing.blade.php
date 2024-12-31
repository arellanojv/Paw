@if (is_array(get_field('verified')) && in_array('Yes', get_field('verified')))
    @include('partials.content-verified-listing')
@else
    @include('partials.content-regular-listing')
@endif
