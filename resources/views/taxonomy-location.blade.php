@extends('layouts.app')

@section('content')

    @include('partials.content-page_title')

    @php
        $current_location = get_queried_object();

        $listings_query = new WP_Query([
            'post_type' => 'listing',
            'tax_query' => [
                [
                    'taxonomy' => 'location',
                    'field' => 'slug',
                    'terms' => $current_location->slug,
                ],
            ],
        ]);
    @endphp

    <div class="section-space">
        <div class="container-default">
            <div class="mx-auto max-w-[1076px]">
                <div class="grid gap-[60px]">
                    <div>
                        @if ($listings_query->have_posts())
                            <div class="mb-10">
                                <div>
                                    <h2>Listing</h2>
                                </div>
                            </div>
                            <div class="jos">
                                <ul class="grid gap-[34px]">
                                    @while ($listings_query->have_posts())
                                        @php($listings_query->the_post())
                                        @php($staticMapUrl = app('App\\View\\Composers\\Listing')->generateGoogleStaticMapUrl())



                                        <li class="accordion-item accordion-solid-shadow">
                                            <div
                                                class="overflow-hidden rounded-[10px] border-2 border-ColorDarkBlue bg-white p-[30px] relative">

                                                <div
                                                    class="grid grid-cols-12 md:grid-cols-4 grid-flow-col gap-4 box-toggle listing-blur">
                                                    <div class="hidden md:block">
                                                        <img src="{{ $staticMapUrl }}"
                                                            alt="Static Map of {{ get_the_title() }}">
                                                    </div>
                                                    <div class="col-span-12 md:col-span-3">
                                                        <div
                                                            class="accordion-header flex justify-between gap-6 text-xl font-semibold">
                                                            <h4 class="text-md cursor-pointer text-ColorDarkBlue">
                                                                {{ get_the_title() }}</h4>
                                                        </div>


                                                        @if (is_array(get_field('verified')) && in_array('Yes', get_field('verified')))
                                                            <div class="mt-5">
                                                                <i
                                                                    class="fa-solid fa-circle-check text-ColorAtomicTangerine text-m pr-2 align-middle"></i>
                                                                <span
                                                                    class="text-m font-semibold align-middle">Verified</span>


                                                            </div>
                                                        @endif

                                                        <div class="accordion-body max-w-[826px] opacity-80 pt-2">
                                                            <div class="pt-2">
                                                                <div class="flex gap-x-3">
                                                                    <div class="h-auto text-ColorDarkBlue60">
                                                                        <i class="fa-solid fa-phone"></i>
                                                                    </div>
                                                                    <div class="flex-1 text-md">
                                                                        {{ get_field('phone_number') }}
                                                                    </div>
                                                                </div>

                                                                <div class="flex gap-x-3 pt-1">
                                                                    <div class="h-auto text-ColorDarkBlue60">
                                                                        <i class="fa-solid fa-location-dot"></i>
                                                                    </div>
                                                                    <div class="flex-1 text-md">
                                                                        {{ get_field('address') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <p class="pt-2">
                                                                    <b>Offers the following services:</b>
                                                                    {{ get_field('services') ?: 'Vaccination, Deworming, Grooming, Confinement, Surgery, Laboratory' }}
                                                                </p>

                                                                <p class="pt-2">
                                                                    <b>Payments Accepted:</b>
                                                                    {{ get_field('payments_accepted') ?: 'Cash, Gcash, Online Bank Transfer, Credit Card' }}
                                                                </p>
                                                            </div>
                                                            <div class="pt-6 mb-5">
                                                                <a href="{{ get_permalink() }}"
                                                                    class="group relative z-10 inline-block">
                                                                    <div
                                                                        class="btn is-rounded bg-ColorDarkBlue border-black text-white text-sm">

                                                                        @if (is_array(get_field('verified')) && in_array('Yes', get_field('verified')))
                                                                            View Featured Listing
                                                                        @else
                                                                            View Additional Information
                                                                        @endif

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="read-more text-center absolute z-10 right-0 bottom-0 left-0">
                                                    <a href="#"
                                                        class="box-toggle block cursor-pointer py-3.5 text-ColorDarkBlue">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endwhile
                                </ul>
                            </div>
                        @else
                            <h2>No listings found for this location.</h2>
                        @endif

                        @php(wp_reset_postdata())
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
