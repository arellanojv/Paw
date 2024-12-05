{{-- <footer class="content-info">
  @php(dynamic_sidebar('sidebar-footer'))
</footer> --}}


{{-- Div below is closing for <div class="page-wrapper relative z-[1] bg-white"> located in the Heather --}}


<footer class="section-footer">
    <div class="bg-ColorBlack">
        <!-- Footer Area Top -->
        <div class="relative z-10">
            <!-- Footer Top Spacing -->
            <div class="pb-[60px] pt-20 lg:pb-20 lg:pt-[100px] xl:pt-[120px]">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Wrapper -->
                    <div
                        class="flex flex-wrap items-center justify-center text-center lg:text-left lg:justify-between gap-8">
                        <!-- Section Block -->
                        <div class="max-w-[400px] md:max-w-[500px] lg:max-w-[550px]">
                            <h2 class="text-white">
                                Your Partner in Finding Reliable Care for Your Furry Family!
                            </h2>
                        </div>
                        <!-- Section Block -->
                        <a href="/clinic" class="btn is-blue is-rounded btn-animation is-large group"><span>Find Vet
                                Clinic</span></a>
                    </div>
                    <!-- Section Wrapper -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Footer Top Spacing -->

            <!-- CTA Shape -->
            <div class="absolute right-[9%] top-8 -z-10 hidden xxl:block">
                <img src="assets/img/elements/cta-1-shape-1.svg" alt="cta-1-shape-1" width="115" height="130" />
            </div>
        </div>
        <!-- Footer Area Top -->

        <!-- Horizontal Line Separator -->
        <div class="horizontal-line bg-white"></div>
        <!-- Horizontal Line Separator -->

        <!-- Footer Area Center -->
        <div class="text-white">
            <!-- Footer Center Spacing -->
            <div class="py-[60px] lg:py-20">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Footer Widget List -->
                    <div
                        class="grid gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-[1fr_repeat(3,_auto)] xl:gap-x-24 xxl:gap-x-[134px]">
                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-7 md:col-span-3 lg:col-span-1">
                            <!-- Footer Logo -->
                            <a class="brand" href="{{ home_url('/') }}">
                                <b>{!! $siteName !!}</b>
                            </a>
                            <!-- Footer Content -->
                            <div>
                                <!-- Footer About Text -->
                                <div class="lg:max-w-[416px]">
                                    Having a pet means you have more joy, a new friend, a happy person who will always
                                    be with you to have fun. We have 200+ different pets that can meet your needs!
                                </div>
                                <!-- Footer Mail -->
                                <a href="mailto:yourdemo@email.com"
                                    class="my-6 block underline-offset-4 transition-all duration-300 hover:underline">yourdemo@email.com</a>
                                <!-- Footer Social Link -->
                                <div class="flex flex-wrap gap-5">
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"
                                        class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-5 text-sm text-white transition-all duration-300 hover:bg-ColorBlue"
                                        aria-label="twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"
                                        class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-5 text-sm text-white transition-all duration-300 hover:bg-ColorBlue"
                                        aria-label="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"
                                        class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-5 text-sm text-white transition-all duration-300 hover:bg-ColorBlue"
                                        aria-label="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer"
                                        class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-5 text-sm text-white transition-all duration-300 hover:bg-ColorBlue"
                                        aria-label="github">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Footer Content -->
                        </div>
                        <!-- Footer Widget Item -->

                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-7 md:col-span-1 lg:col-span-1">
                            <!-- Footer Widget Title -->
                            <div class="text-xl font-semibold capitalize">
                                Primary Pages
                            </div>
                            <!-- Footer Navbar -->
                            <ul class="flex flex-col gap-y-[10px] capitalize">
                                <li>
                                    <a href="/"
                                        class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Home</a>
                                </li>
                                <li>
                                    <a href="/about/"
                                        class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">About
                                        Us</a>
                                </li>
                                <li>
                                    <a href="/clinic/"
                                        class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Clinic</a>
                                </li>
                                <li>
                                    <a href="/contact/"
                                        class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">pricing</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Widget Item -->


                    </div>
                    <!-- Footer Widget List -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Footer Center Spacing -->
        </div>
        <!-- Footer Area Center -->

        <!-- Footer Bottom -->
        <div class="bg-white bg-opacity-5">
            <!-- Footer Bottom Spacing -->
            <div class="py-[18px]">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="text-center text-white text-opacity-80">
                        &copy; Copyright {{ date('Y') }}, All Rights Reserved by <a class="brand"
                            href="{{ home_url('/') }}">
                            <b>{!! $siteName !!}</b></a>
                    </div>

                </div>
                <!-- Section Container -->
            </div>
            <!-- Footer Bottom Spacing -->
        </div>
        <!-- Footer Bottom -->
    </div>
</footer>
</div>
