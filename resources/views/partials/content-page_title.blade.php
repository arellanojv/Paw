@php
    // Generate dynamic breadcrumbs
    $items = get_breadcrumb_items();
@endphp

<!--..:: Breadcrumb Section Start ::.. -->
<section class="section-breadcrumb">
    <!-- Breadcrumb Section Spacer -->
    <div class="breadcrumb-wrapper">
        <!-- Section Container -->
        <div class="container-default">
            <div class="breadcrumb-block">
                {{-- Check if single_term_title() has a value, else fallback to $title --}}
                <h1>
                    @if (single_term_title('', false))
                        {{ single_term_title() }}
                    @else
                        {!! $title !!}
                    @endif
                </h1>
                <ul class="breadcrumb-nav">
                    @include('components.breadcrumb', ['items' => $items])
                </ul>
            </div>
        </div>
        <!-- Section Container -->

        <!-- Breadcrumb Shape - 1 -->
        <div class="absolute left-0 top-0 -z-10">
            <img src="@asset('images/elements/breadcrumb-shape-1.svg')" alt="hero-shape-1" width="291" height="380" />
        </div>

        <!-- Breadcrumb Shape - 2 -->
        <div class="absolute bottom-0 right-0 -z-[1]">
            <img src="@asset('images/elements/breadcrumb-shape-2.svg')" alt="hero-shape-2" width="291" height="380" />
        </div>
    </div>
    <!-- Breadcrumb Section Spacer -->
</section>
