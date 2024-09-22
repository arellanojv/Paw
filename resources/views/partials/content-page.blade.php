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
