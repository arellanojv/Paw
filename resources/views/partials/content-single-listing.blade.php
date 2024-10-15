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
                        <?php if ( $map_embed = get_field( 'map_embed' ) ) : ?>
                        <?php echo $map_embed; ?>
                        <?php endif; ?>
                    </div>
                    <div class="relative mb-[10px] inline-block pb-[10px] ">
                        <h4 class="font-bold break-normal text-gray-900 pt-6 text-2xl md:text-3xl">
                            Affiliations & Licenses
                        </h4>
                    </div>


                    <div>
                        <?php if ( have_rows( 'affiliations' ) ) : ?>
                        <ul class="text-ColorBlack">
                            <?php while ( have_rows( 'affiliations' ) ) : the_row(); ?>
                            <li>
                                <p><span class="h-auto">
                                        <i class="fa-solid fa-circle-info text-ColorDarkBlue60 mr-1"></i>
                                    </span> <?php the_sub_field('name'); ?></p>
                            </li> <!-- Assuming 'name' is the sub-field in the repeater -->
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>


                    <!-- Accreditations & Licenses -->

                    <div class="relative mb-[10px] inline-block pb-[10px] ">
                        <h4 class="font-bold break-normal text-gray-900 pt-6 text-2xl md:text-3xl">
                            Find a Vet Clinic In A City Near ...
                        </h4>
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

                            <?php echo the_content(); ?>

                        </div>

                        <!--Lead Para-->
                        <div class="pt-2 pb-6">
                            <span class="font-semibold">Address:</span> <?php if ( $address = get_field( 'address' ) ) : ?>
                            <?php echo esc_html($address); ?>
                            <?php endif; ?>
                        </div>

                        <div class="pb-6">
                            <span class="font-semibold">Phone Number:</span> <?php if ( $phone_number = get_field( 'phone_number' ) ) : ?>
                            <?php echo $phone_number; ?>
                            <?php endif; ?>
                        </div>

                        <div class="pb-6">
                            <span class="font-semibold">Website:</span> <?php if ( $website = get_field( 'website' ) ) : ?>
                            <?php echo esc_html($website); ?>
                            <?php endif; ?>
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
