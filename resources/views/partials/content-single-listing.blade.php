@php

    $current_post_id = get_the_ID();

    // Get the terms associated with the 'location' taxonomy for the current listing
    $location_term = get_the_terms($current_post_id, 'location');

    $location_id = $location_term[0]->term_id;

    // Fetch other listings in the current location
    $other_listings_query = new WP_Query([
        'post_type' => 'listing',
        'posts_per_page' => 5, // Adjust the number of listings to show
        'tax_query' => [
            [
                'taxonomy' => 'location',
                'field' => 'term_id',
                'terms' => $location_term[0]->term_id,
            ],
        ],
        'post__not_in' => [get_the_ID()], // Exclude the current post
    ]);

@endphp

<!-- Section Spacer -->
<div class="mt-[50px] mb-[50px]">
    <!-- Section Container -->
    <div class="container-default">
        <div class="grid grid-cols-1 gap-x-6 gap-y-10 lg:grid-cols-[minmax(416px,_0.45fr),1fr]">
            <!-- Blog Aside -->
            <aside class="jos flex flex-col gap-y-[30px]">
                <!-- Single Sidebar -->
                <div class="rounded-[10px] p-2">

                    <div>
                        {!! $googleMapEmbed !!}
                    </div>
                    <?php if ( have_rows( 'affiliations' ) ) : ?>
                    <div>
                        <div class="relative mb-[10px] inline-block pb-[10px] ">
                            <h4 class="font-bold break-normal text-gray-900 pt-6 text-2xl md:text-2xl">
                                Affiliations & Licenses
                            </h4>
                        </div>

                        <ul class="text-ColorBlack">
                            @foreach ($listingFields['affiliations'] as $affiliation)
                                <li>
                                    <p>
                                        <span class="h-auto">
                                            <i class="fa-solid fa-circle-info text-ColorDarkBlue60 mr-1"></i>
                                        </span>
                                        {{ $affiliation }}
                                    </p>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                    <?php endif; ?>

                    <!-- Accreditations & Licenses -->

                    <div class="relative mb-[10px] inline-block pb-[10px] ">
                        @if ($other_listings_query->have_posts())
                            <h4 class="font-bold break-normal text-gray-900 pt-6 text-2xl md:text-2xl">
                                Find other Vet Clinics found Near @php echo $location_term[0]->name; @endphp
                            </h4>

                            <ul class="grid gap-y-4 pt-5">
                                @while ($other_listings_query->have_posts())
                                    @php($other_listings_query->the_post())
                                    <li class="border p-2">
                                        <a href="{{ get_permalink() }}"
                                            class="text-ColorDarkBlue hover:underline text-sm">
                                            {{ get_the_title() }}
                                        </a>
                                    </li>
                                @endwhile
                            </ul>
                            @php(wp_reset_postdata())

                        @endif
                    </div>
                </div>
                <!-- Single Sidebar -->
            </aside>
            <!-- Blog Aside -->

            <div class="flex flex-col gap-y-10 lg:gap-y-14 xl:gap-y-20">
                <!-- Blog Post Area -->
                <div class="flex flex-col gap-6">
                    <!-- Blog Post Article -->



                    {{-- <!-- Horizontal Separator -->
                    <div class="jos my-[30px] h-[1px] w-full bg-[#EAEDF0]"></div>
                    <!-- Horizontal Separator --> --}}
                    <div>
                        <!--Title-->
                        <div class="font-sans">
                            <h4 class="font-bold font-sans break-normal text-gray-900 py-2 text-3xl md:text-4xl">
                                About {!! $title !!}:</h4>
                        </div>
                        <div class="py-6">

                            @php(the_content())

                        </div>

                        <!--Lead Para-->
                        <div class="pt-2 pb-6">
                            <span class="font-semibold">Address:</span> {{ $listingFields['address'] }}
                        </div>

                        <div class="pb-6">
                            <span class="font-semibold">Phone Number:</span> {{ $listingFields['phone_number'] }}
                        </div>

                        <div class="pb-6">
                            <span class="font-semibold">Website:</span> {{ $listingFields['website'] }}
                        </div>

                        <div class="pb-6">
                            <b>Offers the following services:</b>
                            {{ get_field('services') ?: 'Vaccination, Deworming, Grooming, Confinement, Surgery, Laboratory' }}
                        </div>

                        <div class="pb-6">
                            <b>Payments Accepted:</b>
                            {{ get_field('payments_accepted') ?: 'Cash, Gcash, Online Bank Transfer, Credit Card' }}
                        </div>

                    </div>
                </div>
                <!-- Blog Post Detail Area -->
            </div>
        </div>
    </div>
    <!-- Section Container -->
</div>
<!-- Section Spacer -->
