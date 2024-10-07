@extends('layouts.app')

@section('content')

    @include('partials.content-page_title')

    @php
        // Get the current term (sub-location)
        $current_location = get_queried_object();

        // Fetch Listings associated with this location
        $listings_query = new WP_Query([
            'post_type' => 'listing', // Custom post type
            'tax_query' => [
                [
                    'taxonomy' => 'location', // Taxonomy name
                    'field' => 'slug', // Use the slug of the current location
                    'terms' => $current_location->slug,
                ],
            ],
        ]);
    @endphp

    {{-- Post list --}}
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <div class="mx-auto max-w-[1076px]">
                <div class="grid gap-[60px]">
                    <div>
                        <!-- Section Wrapper -->

                        @if ($listings_query->have_posts())
                            <div class="mb-10">
                                <!-- Section Block -->
                                <div>
                                    <h2>Listing</h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <!-- Listing Area -->
                            <div class="jos">
                                <!-- Accordion List -->
                                <ul class="grid gap-[34px]">
                                    @while ($listings_query->have_posts())
                                        @php($listings_query->the_post())

                                        <!-- Accordion Item -->
                                        <li class="accordion-item accordion-solid-shadow">

                                            <div
                                                class="overflow-hidden rounded-[10px] border-2 border-ColorDarkBlue bg-white p-[30px] relative">
                                                <div class="grid grid-cols-4 grid-flow-col gap-4 box-toggle listing-blur">
                                                    <div class="">
                                                        <img
                                                            src="https://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=400x600&amp;maptype=roadmap&amp;key=AIzaSyDQQPvj2WRZrF3bBXyrrGI2vVvojSDhjSs&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0x0a1d38%7Clabel:1%7C775+Fleischmann+Way+Carson+City+NV+89703">
                                                    </div>
                                                    <div class="col-span-3">


                                                        <!-- Accordion Header -->
                                                        <div
                                                            class="accordion-header flex justify-between gap-6 text-xl font-semibold">
                                                            <h4 class="text-md cursor-pointer text-ColorDarkBlue">
                                                                {{ get_the_title() }}</h4>
                                                        </div>
                                                        <!-- Accordion Header -->

                                                        <!-- Accordion Body -->
                                                        <div class="accordion-body max-w-[826px] opacity-80 pt-2">
                                                            <div class="pt-2">
                                                                <div class="">
                                                                    <div class="flex gap-x-3">
                                                                        <div class="h-auto text-ColorDarkBlue60">
                                                                            <i class="fa-solid fa-phone"></i>
                                                                        </div>
                                                                        <div class="flex-1 text-md">
                                                                            423-7609
                                                                        </div>
                                                                    </div>

                                                                    <div class="flex gap-x-3 pt-1">
                                                                        <div class="h-auto text-ColorDarkBlue60">
                                                                            <i class="fa-solid fa-location-dot"></i>
                                                                        </div>
                                                                        <div class="flex-1 text-md">
                                                                            1790 Maximo V. Patalinjug Jr. Ave, Lapu-Lapu
                                                                            City,
                                                                            6015
                                                                            Cebu
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="pt-2">
                                                                    <b>Offers the following services:</b> Vaccination,
                                                                    Deworming,
                                                                    Grooming,
                                                                    Confinement, Surgery, Laboratory
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="pt-2">
                                                                    <b>Payments Accepted:</b> Cash, Gcash, Online Bank
                                                                    Transfer,
                                                                    Credit
                                                                    Card
                                                                </p>
                                                            </div>
                                                            <div class="pt-6">
                                                                <a href="{{ get_permalink() }}"
                                                                    class="group relative z-10 hidden sm:inline-block">
                                                                    <div
                                                                        class="btn is-rounded bg-ColorDarkBlue border-black text-white text-sm">
                                                                        View
                                                                        Additional Information </div>
                                                                    <div
                                                                        class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] bg-ColorDarkBlue transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0">
                                                                    </div>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <!-- Accordion Body -->
                                                    </div>
                                                </div>
                                                <div class="read-more text-center absolute z-10 right-0 bottom-0 left-0">
                                                    <a href="#"
                                                        class="box-toggle block cursor-pointer py-3.5 text-ColorDarkBlue">Read
                                                        More</a>
                                                </div>


                                            </div>
                                        </li>
                                        <!-- Accordion Item -->
                                    @endwhile
                                </ul>

                                <!-- Accordion List -->
                            </div>
                            <!-- Listing Area -->
                        @else
                            <h2>No listings found for this location.</h2>
                        @endif

                        @php(wp_reset_postdata()) {{-- Reset the query after displaying the listings --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Section Container -->
    </div>


@endsection
