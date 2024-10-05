@if (get_field('enable_hero_section') && is_front_page())
    @include('partials.content-hero')
@endif

@if (!is_front_page())
    <!--..:: Breadcrumb Section Start ::.. -->
    <section class="section-breadcrumb">
        <!-- Breadcrumb Section Spacer -->
        <div class="breadcrumb-wrapper">
            <!-- Section Container -->
            <div class="container-default">
                <div class="breadcrumb-block">
                    <h1 class="breadcrumb-title">About Us</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.php">Home</a></li>
                        <li>About</li>
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
@endif




<div class="section-space">
    <div class="container-custom has-container-custom">
        <div class="grid gap-10 gap-x-12">




            {{-- Display the regular post/page content --}}
            <?php the_content(); ?>

            @php
                // Define the parent term slug (e.g., 'cebu' as the parent location)
                $parent_location = get_term_by('slug', 'cebu', 'location');

                // Fetch child locations for the specified parent location
                $child_locations = get_terms([
                    'taxonomy' => 'location', // The taxonomy name
                    'parent' => $parent_location->term_id, // Parent location ID
                    'hide_empty' => false, // Show even if there are no listings
                ]);
            @endphp
            <div
                class="grid justify-items-center md:grid-cols-4 sm:grid-cols-2 min-[320px]:grid-cols-2 gap-4 bg-ColorDarkBlue text-white p-10 rounded-xl lg:mx-20 z-10">
                {{-- Loop through and display child locations --}}
                @if (!empty($child_locations) && !is_wp_error($child_locations))

                    @foreach ($child_locations as $child_location)
                        <div>
                            <a href="{{ get_term_link($child_location) }}">
                                {{ $child_location->name }}
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>No sub locations found.</p>
                @endif


            </div>


        </div>







    </div>
</div>

@if ($pagination)
    <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
    </nav>
@endif
