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



{{-- Post list --}}

<div class="section-space">
    <!-- Section Container -->
    <div class="container-default">
        <div class="mx-auto max-w-[1076px]">
            <div class="grid gap-[60px]">
                <div>
                    <!-- Section Wrapper -->
                    <div class="mb-10">
                        <!-- Section Block -->
                        <div>
                            <h2>General Question</h2>
                        </div>
                        <!-- Section Block -->
                    </div>
                    <!-- Section Wrapper -->
                    <!-- FAQ Area -->
                    <div class="jos">
                        <!-- Accordion List -->
                        <ul class="grid gap-[34px]">
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
                                                <h4 class="text-md cursor-pointer text-ColorDarkBlue">Claws And Paws
                                                    Veterinary Clinic</h4>
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
                                                                1790 Maximo V. Patalinjug Jr. Ave, Lapu-Lapu City, 6015
                                                                Cebu
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="pt-2">
                                                        <b>Offers the following services:</b> Vaccination, Deworming,
                                                        Grooming,
                                                        Confinement, Surgery, Laboratory
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="pt-2">
                                                        <b>Payments Accepted:</b> Cash, Gcash, Online Bank Transfer,
                                                        Credit
                                                        Card
                                                    </p>
                                                </div>
                                                <div class="pt-6">
                                                    <a href="#"
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
                                                <h4 class="text-md cursor-pointer text-ColorDarkBlue">Claws And Paws
                                                    Veterinary Clinic</h4>
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
                                                                1790 Maximo V. Patalinjug Jr. Ave, Lapu-Lapu City, 6015
                                                                Cebu
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="pt-2">
                                                        <b>Offers the following services:</b> Vaccination, Deworming,
                                                        Grooming,
                                                        Confinement, Surgery, Laboratory
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="pt-2">
                                                        <b>Payments Accepted:</b> Cash, Gcash, Online Bank Transfer,
                                                        Credit
                                                        Card
                                                    </p>
                                                </div>
                                                <div class="pt-6">
                                                    <a href="#"
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
                                                <h4 class="text-md cursor-pointer text-ColorDarkBlue">Claws And Paws
                                                    Veterinary Clinic</h4>
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
                                                                1790 Maximo V. Patalinjug Jr. Ave, Lapu-Lapu City, 6015
                                                                Cebu
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="pt-2">
                                                        <b>Offers the following services:</b> Vaccination, Deworming,
                                                        Grooming,
                                                        Confinement, Surgery, Laboratory
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="pt-2">
                                                        <b>Payments Accepted:</b> Cash, Gcash, Online Bank Transfer,
                                                        Credit
                                                        Card
                                                    </p>
                                                </div>
                                                <div class="pt-6">
                                                    <a href="#"
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

                        </ul>
                        <!-- Accordion List -->
                    </div>
                    <!-- FAQ Area -->
                </div>
            </div>
        </div>
    </div>
    <!-- Section Container -->
</div>





<div class="section-space">
    <div class="container-custom has-container-custom">
        <div class="grid gap-10 gap-x-12">
            @php(the_content())
        </div>


        <div
            class="grid justify-items-center md:grid-cols-4 sm:grid-cols-2 min-[320px]:grid-cols-2 gap-4 bg-ColorDarkBlue text-white p-10 rounded-xl lg:mx-20 z-10">
            <div><a href="#">Argao</a></div>
            <div>Asturias</div>
            <div>Balamban</div>
            <div>Carmen</div>
            <div>Cebu City</div>
            <div>Compostela</div>
            <div>Consolacion</div>
            <div>Cordova</div>
            <div>Danao City</div>
            <div>Lapu-Lapu City</div>
            <div>Liloan</div>
            <div>Mandaue City</div>
            <div>Minglanilla</div>
            <div>Naga</div>
            <div>Oslob</div>
            <div>Talisay City</div>
            <div>Toledo City</div>
        </div>
    </div>
</div>

@if ($pagination)
    <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
    </nav>
@endif
