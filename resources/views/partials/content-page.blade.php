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
                                    <div class="grid grid-cols-4 grid-flow-col gap-4 listing-grid">
                                        <div class="border-2">
                                            <img
                                                src="https://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=400x600&amp;maptype=roadmap&amp;key=AIzaSyDQQPvj2WRZrF3bBXyrrGI2vVvojSDhjSs&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0x0a1d38%7Clabel:1%7C775+Fleischmann+Way+Carson+City+NV+89703">
                                        </div>
                                        <div class="col-span-3 border-2">


                                            <!-- Accordion Header -->
                                            <div
                                                class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorDarkBlue">
                                                <h4 class="text-md cursor-pointer">Claws And Paws Veterinary Clinic</h4>
                                            </div>
                                            <!-- Accordion Header -->

                                            <!-- Accordion Body -->
                                            <div class="accordion-body max-w-[826px] opacity-80">
                                                <p class="pt-5">
                                                    A digital agency is a company that leverages
                                                    digital channels to grow their clients’ brands
                                                    online. ls and technologies such as web
                                                    design, digital marketing, creative design and
                                                    app development.
                                                </p>
                                                <p class="pt-5">
                                                    A digital agency is a company that leverages
                                                    digital channels to grow their clients’ brands
                                                    online. ls and technologies such as web
                                                    design, digital marketing, creative design and
                                                    app development.
                                                </p>
                                            </div>
                                            <!-- Accordion Body -->
                                        </div>
                                    </div>
                                    <div class="text-center uk-text-center"
                                        style="position: absolute; z-index: 111111; bottom: 0; left: 0; right: 0;">
                                        <a href="#" style="padding: 15px 0px; display: block; cursor: pointer;"
                                            class="box-toggle large" contenteditable="false">Read More</a>
                                    </div>


                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div
                                    class="overflow-hidden rounded-[10px] border-2 border-ColorDarkBlue bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div
                                        class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorDarkBlue">

                                        Q. What services does a digital agency


                                        <div
                                            class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                            <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                            <span
                                                class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                        </div>
                                    </div>
                                    <!-- Accordion Header -->
                                    <!-- Accordion Body -->
                                    <div class="accordion-body max-w-[826px] opacity-80">
                                        <p class="pt-5">
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web
                                            design, digital marketing, creative design and
                                            app development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div
                                    class="overflow-hidden rounded-[10px] border-2 border-ColorDarkBlue bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div
                                        class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorDarkBlue">
                                        <button class="flex-1 text-left">
                                            Q. Hiring a digital agency vs hiring in-house:
                                            What is the difference?
                                        </button>
                                        <div
                                            class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                            <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                            <span
                                                class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                        </div>
                                    </div>
                                    <!-- Accordion Header -->
                                    <!-- Accordion Body -->
                                    <div class="accordion-body max-w-[826px] opacity-80">
                                        <p class="pt-5">
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web
                                            design, digital marketing, creative design and
                                            app development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
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
