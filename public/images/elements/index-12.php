<!doctype html>
<html lang="en">

<!--..:: Importing Head Section ::.. -->
<?php include "./partials/head.php" ?>

<body>
    <div class="page-wrapper relative z-[1] bg-[#FEF7E6]">
        <!--..:: Header Start ::.. -->
        <header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
            <div class="container-default">
                <div class="flex items-center justify-between gap-x-8">
                    <!-- Header Logo -->
                    <a href="index.php" class="">
                        <img src="assets/img/logo-purple-dark.png" alt="Masco" width="109" height="24" />
                    </a>
                    <!-- Header Logo -->

                    <!-- Header Navigation -->
                    <div class="menu-block-wrapper">
                        <div class="menu-overlay"></div>
                        <nav class="menu-block" id="append-menu-header">
                            <div class="mobile-menu-head">
                                <div class="go-back">
                                    <i class="fa-solid fa-angle-left"></i>
                                </div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="site-menu-main">
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Demo <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-1">
                                        <li class="sub-menu--item">
                                            <a href="index.php">Digital agency</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-2.php">Chat software</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-3.php">Fitness App</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-4.php">Online Courses</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-5.php">SEO Agency</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-6.php">Cold Email</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-7.php">Web Hosting</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-8.php">Startup</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-9.php">Tracking Software</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-10.php">AI Writing Tool</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-11.php">Website Builder</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-12.php">AI Photo Editor</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-13.php">initial coin offering (ICO)</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-14.php">AI Content Generator</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="index-15.php">IT Service</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link-item">About</a>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Services
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-2">
                                        <li class="sub-menu--item">
                                            <a href="services.php">Services</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="service-details.php">Service Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Pages <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-3">
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">blogs <i class="fa-solid fa-angle-right"></i></a>
                                            <ul class="sub-menu shape-none" id="submenu-4">
                                                <li class="sub-menu--item">
                                                    <a href="blog.php">blogs</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="blog-details.php">blog details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Team
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-5">
                                                <li class="sub-menu--item">
                                                    <a href="teams.php">Teams</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">FAQ
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-6">
                                                <li class="sub-menu--item">
                                                    <a href="faq.php">FAQ-1</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="faq-2.php">FAQ-2</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="faq-3.php">FAQ-3</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="faq-4.php">FAQ-4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-7">
                                                <li class="sub-menu--item">
                                                    <a href="portfolio.php">Portfolio Classic</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="portfolio-2.php">Portfolio Masonry</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="portfolio-3.php">Portfolio Modern</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="portfolio-4.php">Portfolio Minimal</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="portfolio-details.php">Portfolio Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Pricing
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-8">
                                                <li class="sub-menu--item">
                                                    <a href="pricing.php">Pricing-1</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="pricing-2.php">Pricing-2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Careers
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-9">
                                                <li class="sub-menu--item">
                                                    <a href="careers.php">Career</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="career-details.php">Career Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Utilities
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-10">
                                                <li class="sub-menu--item">
                                                    <a href="login.php">Login</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="signup.php">Signup</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="reset-password.php">Reset Password</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="coming-soon.php">Coming Soon</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="error-404.php">Error 404</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Contact
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-11">
                                        <li class="sub-menu--item">
                                            <a href="contact.php">Contact-1</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="contact-2.php">Contact-2</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="contact-3.php">Contact-3</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Navigation -->

                    <!-- Header User Event -->
                    <div class="flex items-center gap-6">
                        <a href="login.php" class="btn-text hidden hover:text-ColorBluePurple sm:inline-block">Login</a>
                        <a href="signup.php" class="group relative z-10 hidden sm:inline-block">
                            <div class="btn rounded-[3px] border-2 border-[#0E0E0E] bg-ColorBluePurple text-white">
                                Sign up free
                            </div>
                            <div class="absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] rounded-[3px] bg-[#0E0E0E] transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                        </a>
                        <!-- Responsive Offcanvas Menu Button -->
                        <div class="block lg:hidden">
                            <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <!-- Header User Event -->
                </div>
            </div>
        </header>
        <!--..:: Header End ::.. -->

        <main class="main-wrapper relative overflow-hidden">
            <!--..:: Hero Section Start ::.. -->
            <section class="section-hero">
                <!-- Section Background -->
                <div class="bg-[#FFD372]">
                    <!-- Hero Section Space -->
                    <div class="pb-[60px] pt-28 md:pb-20 md:pt-36 lg:pb-[100px] lg:pt-[150px] xxl:pb-[120px] xxl:pt-[185px]">
                        <!-- Section Container -->
                        <div class="container-default">
                            <!-- Hero Area -->
                            <div class="grid items-center justify-center gap-[60px] md:grid-cols-[1fr_minmax(0,_0.6fr)]">
                                <!-- Hero Content Block -->
                                <div class="jos">
                                    <div class="mx-auto mb-6 max-w-xl lg:max-w-2xl xl:max-w-3xl xxl:max-w-[1076px]">
                                        <h1 class="mb-6 font-Sora text-[40px] font-semibold leading-none -tracking-[1px] text-[#0E0E0E] sm:text-5xl lg:text-6xl xl:text-[76px] xxl:text-[90px]">
                                            Unleash your creativity with AI image editing
                                        </h1>
                                    </div>
                                    <p class="mb-9 max-w-[746px] lg:mb-14">
                                        Masco is a free photo editing & design tool with AI power.
                                        It covers various free online photo editing tools, so you
                                        can crop photos, resize photos, add text to images, create
                                        photo collages, and easily create graphic designs.
                                    </p>
                                    <a href="#" class="group relative z-10 inline-block">
                                        <div class="btn is-large rounded-[3px] border-2 border-[#0E0E0E] bg-ColorBluePurple text-white">
                                            Edit A Photo
                                        </div>
                                        <div class="absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] rounded-[3px] bg-[#0E0E0E] transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                                    </a>
                                </div>
                                <!-- Hero Content Block -->

                                <!-- Hero Image Block -->
                                <div class="relative">
                                    <img src="assets/img/th-12/hero-img.png" alt="hero-img" width="455" height="548" data-jos_animation="zoom-in-down" class="mx-auto md:rotate-[5deg]" />

                                    <!-- Hero Image Shape - 1 -->
                                    <img src="assets/img/elements/hero-12-shape-1.svg" alt="hero-12-shape-1" width="56" height="81" class="absolute -left-20 bottom-0 hidden md:inline-block lg:-left-28" />
                                    <!-- Hero Image Shape - 2 -->
                                    <img src="assets/img/elements/hero-12-shape-2.svg" alt="hero-12-shape-2" width="55" height="68" class="absolute -right-16 -top-8 hidden md:inline-block" />
                                </div>
                                <!-- Hero Image Block -->
                            </div>
                            <!-- Hero Area -->
                        </div>
                        <!-- Section Container -->
                    </div>
                    <!-- Hero Section Space -->
                </div>
                <!-- Section Background -->
            </section>
            <!--..:: Hero Section End ::.. -->

            <!--..:: Features Section Start ::.. -->
            <section class="section-feature">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- Section Content Wrapper -->
                        <div class="jos mb-[60px] xl:mb-20">
                            <!-- Section Content Block -->
                            <div class="mx-auto max-w-[746px]">
                                <div class="mb-5">
                                    <h2 class="text-center font-Sora text-4xl font-bold leading-[1.16] -tracking-[0.5px] text-[#0E0E0E] lg:text-5xl xl:text-[52px] xxl:text-[60px]">
                                        All features that make editing easy like magic
                                    </h2>
                                </div>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->

                        <!-- Feature List -->
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <!-- Feature Item -->
                            <div class="jos" data-jos_delay="0">
                                <div class="hover-solid-shadow h-full">
                                    <div class="flex h-full flex-col gap-[30px] rounded-[10px] border-2 border-[#0E0E0E] bg-[#FEF7E6] p-10 pr-[30px] lg:flex-row">
                                        <div class="h-auto w-[74px]">
                                            <img src="assets/img/icons/icon-black-home-12-feature-1.svg" alt="icon-black-home-12-feature-1" width="75" height="81" class="h-auto w-full" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                                Enhanced Efficiency
                                            </div>
                                            <p class="text-[#2C2C2C]">
                                                AI image editing tools significantly speed up the work
                                                & editing process. They can automate repetitive tasks
                                            </p>
                                            <a href="#">
                                                <img src="assets/img/icons/icon-black-arrow-right.svg" alt="icon-black-arrow-right" width="31" height="20" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Feature Item -->
                            <!-- Feature Item -->
                            <div class="jos" data-jos_delay="0.3">
                                <div class="hover-solid-shadow h-full">
                                    <div class="flex h-full flex-col gap-[30px] rounded-[10px] border-2 border-[#0E0E0E] bg-[#FEF7E6] p-10 pr-[30px] lg:flex-row">
                                        <div class="h-auto w-[74px]">
                                            <img src="assets/img/icons/icon-black-home-12-feature-2.svg" alt="icon-black-home-12-feature-2.svg" width="75" height="66" class="h-auto w-full" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                                Professional-Level Results
                                            </div>
                                            <p class="text-[#2C2C2C]">
                                                AI algorithms are designed to analyze and understand
                                                images, allowing them to make intelligent adjustments
                                            </p>
                                            <a href="#">
                                                <img src="assets/img/icons/icon-black-arrow-right.svg" alt="icon-black-arrow-right" width="31" height="20" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Feature Item -->
                            <!-- Feature Item -->
                            <div class="jos" data-jos_delay="0.6">
                                <div class="hover-solid-shadow h-full">
                                    <div class="flex h-full flex-col gap-[30px] rounded-[10px] border-2 border-[#0E0E0E] bg-[#FEF7E6] p-10 pr-[30px] lg:flex-row">
                                        <div class="h-auto w-[74px]">
                                            <img src="assets/img/icons/icon-black-home-12-feature-3.svg" alt="icon-black-home-12-feature-3.svg" width="75" height="58" class="h-auto w-full" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                                Advanced Editing Capabilities
                                            </div>
                                            <p class="text-[#2C2C2C]">
                                                AI image editing tools offer a wide range of advanced
                                                editing capabilities & stunning visual image creations
                                            </p>
                                            <a href="#">
                                                <img src="assets/img/icons/icon-black-arrow-right.svg" alt="icon-black-arrow-right" width="31" height="20" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Feature Item -->
                            <!-- Feature Item -->
                            <div class="jos" data-jos_delay="0.3">
                                <div class="hover-solid-shadow h-full">
                                    <div class="flex h-full flex-col gap-[30px] rounded-[10px] border-2 border-[#0E0E0E] bg-[#FEF7E6] p-10 pr-[30px] lg:flex-row">
                                        <div class="h-auto w-[74px]">
                                            <img src="assets/img/icons/icon-black-home-12-feature-4.svg" alt="icon-black-home-12-feature-4.svg" width="75" height="79" class="h-auto w-full" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                                Creative Possibilities
                                            </div>
                                            <p class="text-[#2C2C2C]">
                                                This tools open up new creative possibilities and push
                                                the boundaries of their creativity by offering
                                                features
                                            </p>
                                            <a href="#">
                                                <img src="assets/img/icons/icon-black-arrow-right.svg" alt="icon-black-arrow-right" width="31" height="20" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Feature Item -->
                        </div>
                        <!-- Feature List -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!--..:: Features Section End ::.. -->

            <!--..:: Content Section Start ::.. -->
            <section class="section-content">
                <!-- Section Space -->
                <div class="section-space-bottom">
                    <!-- Section Container -->
                    <div class="container-default">
                        <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                            <!-- Content Area Single -->
                            <div class="grid items-center gap-10 md:grid-cols-[0.7fr_minmax(0,_1fr)] lg:gap-24 xl:gap-[135px] xxl:gap-[182px]">
                                <!-- Content Block Left -->
                                <div class="jos order-1 md:order-2" data-jos_animation="fade-right">
                                    <!-- Section Wrapper -->
                                    <div>
                                        <!-- Section Block -->
                                        <div class="mb-5">
                                            <h2 class="font-Sora text-4xl font-bold leading-[1.16] -tracking-[0.5px] text-[#0E0E0E] lg:text-5xl xl:text-[52px] xxl:text-[60px]">
                                                Give your designs a creative twist with it
                                            </h2>
                                        </div>
                                        <!-- Section Block -->
                                    </div>
                                    <!-- Section Wrapper -->
                                    <!-- Content Text -->
                                    <p class="text-[#2C2C2C]">
                                        AI-powered algorithms can analyze images & make
                                        intelligent adjustments to improve the quality of your
                                        design and you can automatically enhance colors, adjust
                                        brightness and contrast, reduce noise, and sharpen
                                        details.
                                    </p>
                                    <!-- Content Text -->
                                    <!-- Content List -->
                                    <ul class="mt-8 flex flex-col gap-y-9 lg:mt-[50px]">
                                        <!-- Content Item -->
                                        <li class="flex gap-x-5 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                            <div class="h-auto w-9">
                                                <img src="assets/img/icons/icon-purple-home-12-content-1.svg" alt="icon-purple-home-12-content-1" width="35" height="35" class="h-auto w-full" />
                                            </div>
                                            <div class="flex-1">
                                                Turn text into imaginative images with AI
                                            </div>
                                        </li>
                                        <!-- Content Item -->
                                        <!-- Content Item -->
                                        <li class="flex gap-x-5 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                            <div class="h-auto w-9">
                                                <img src="assets/img/icons/icon-purple-home-12-content-2.svg" alt="icon-purple-home-12-content-2" width="35" height="35" class="h-auto w-full" />
                                            </div>
                                            <div class="flex-1">
                                                Efficiently remove background from images
                                            </div>
                                        </li>
                                        <!-- Content Item -->
                                        <!-- Content Item -->
                                        <li class="flex gap-x-5 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                            <div class="h-auto w-9">
                                                <img src="assets/img/icons/icon-purple-home-12-content-3.svg" alt="icon-purple-home-12-content-3.svg" width="35" height="35" class="h-auto w-full" />
                                            </div>
                                            <div class="flex-1">
                                                You can apply an artistic style to the image
                                            </div>
                                        </li>
                                        <!-- Content Item -->
                                    </ul>
                                    <!-- Content List -->
                                </div>
                                <!-- Content Block Left -->
                                <!-- Content Block Right -->
                                <div class="jos order-2 md:order-1" data-jos_animation="fade-left">
                                    <div class="mx-auto w-[70%] md:w-full">
                                        <img src="assets/img/th-12/content-img-1.png" alt="content-img-1" width="456" height="548" class="h-auto w-full -rotate-[5deg]" />
                                    </div>
                                </div>
                                <!-- Content Block Right -->
                            </div>
                            <!-- Content Area Single -->
                        </div>
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!--..:: Content Section End ::.. -->

            <!--..:: Video Section Start ::.. -->
            <section class="section-video">
                <!-- Section Space -->
                <div class="section-space-bottom">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- Section Content Wrapper -->
                        <div class="jos mb-[60px] xl:mb-20">
                            <!-- Section Content Block -->
                            <div class="mx-auto max-w-[800px]">
                                <div class="mb-5">
                                    <h2 class="text-center font-Sora text-4xl font-bold leading-[1.16] -tracking-[0.5px] text-[#0E0E0E] lg:text-5xl xl:text-[52px] xxl:text-[60px]">
                                        Our handy guide to your all-in-one photo editor
                                    </h2>
                                </div>
                                <p class="mx-auto max-w-[718px] text-center text-[#2c2c2c]">
                                    Unless you've watched countless tutorials online or studied
                                    photography, you might not know how to edit a photo to make
                                    it look its best efficiency.
                                </p>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->

                        <!-- Video Block -->
                        <div class="jos">
                            <div class="relative flex items-center justify-center">
                                <img src="assets/img/th-12/video-img.png" alt="video-img" width="1296" height="600" class="h-auto w-full" />
                                <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute flex items-center justify-center" aria-label="video-play">
                                    <img src="assets/img/icons/icon-purple-video-btn.svg" alt="icon-purple-video-btn" width="126" height="120" class="h-auto w-16 md:h-auto md:w-24 lg:h-auto lg:w-[126px]" />
                                </a>
                            </div>
                        </div>
                        <!-- Video Block -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!--..:: Video Section End ::.. -->

            <!--..:: Content Section Start ::.. -->
            <section class="section-content">
                <!-- Section Space -->
                <div class="section-space-bottom">
                    <!-- Section Container -->
                    <div class="container-default">
                        <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                            <!-- Content Area Single -->
                            <div class="grid items-center gap-10 md:grid-cols-[1fr_minmax(0,_0.7fr)] lg:gap-24 xl:gap-[135px] xxl:gap-[182px]">
                                <!-- Content Block Left -->
                                <div class="jos" data-jos_animation="fade-right">
                                    <!-- Section Wrapper -->
                                    <div>
                                        <!-- Section Block -->
                                        <div class="mb-5">
                                            <h2 class="font-Sora text-4xl font-bold leading-[1.16] -tracking-[0.5px] text-[#0E0E0E] lg:text-5xl xl:text-[52px] xxl:text-[60px]">
                                                Create stunning photos from simple
                                            </h2>
                                        </div>
                                        <!-- Section Block -->
                                    </div>
                                    <!-- Section Wrapper -->
                                    <!-- Content Text -->
                                    <p class="text-[#2C2C2C]">
                                        Our AI image editing tools provide a wide range of
                                        creative filters, effects, & combinations to add unique
                                        styles and visual enhancements to images. AI algorithms
                                        suggest creative enhancements based on photo content.
                                    </p>
                                    <!-- Content Text -->
                                    <!-- Content List -->
                                    <ul class="mt-8 flex flex-col gap-y-9 lg:mt-[50px]">
                                        <!-- Content Item -->
                                        <li class="flex gap-x-5 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                            <div class="h-auto w-9">
                                                <img src="assets/img/icons/icon-purple-home-12-content-4.svg" alt="icon-purple-home-12-content-4" width="35" height="35" class="h-auto w-full" />
                                            </div>
                                            <div class="flex-1">
                                                Enhance photo textures with AI photo editor
                                            </div>
                                        </li>
                                        <!-- Content Item -->
                                        <!-- Content Item -->
                                        <li class="flex gap-x-5 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                            <div class="h-auto w-9">
                                                <img src="assets/img/icons/icon-purple-home-12-content-5.svg" alt="icon-purple-home-12-content-5" width="35" height="35" class="h-auto w-full" />
                                            </div>
                                            <div class="flex-1">
                                                Many photo collage templates for inspiration
                                            </div>
                                        </li>
                                        <!-- Content Item -->
                                        <!-- Content Item -->
                                        <li class="flex gap-x-5 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                            <div class="h-auto w-9">
                                                <img src="assets/img/icons/icon-purple-home-12-content-6.svg" alt="icon-purple-home-12-content-6.svg" width="35" height="35" class="h-auto w-full" />
                                            </div>
                                            <div class="flex-1">
                                                Add a unique mood to your photos effortlessly
                                            </div>
                                        </li>
                                        <!-- Content Item -->
                                    </ul>
                                    <!-- Content List -->
                                </div>
                                <!-- Content Block Left -->
                                <!-- Content Block Right -->
                                <div class="jos" data-jos_animation="fade-left">
                                    <div class="mx-auto w-[70%] md:w-full">
                                        <img src="assets/img/th-12/content-img-2.png" alt="content-img-2" width="456" height="548" class="h-auto w-full rotate-[5deg]" />
                                    </div>
                                </div>
                                <!-- Content Block Right -->
                            </div>
                            <!-- Content Area Single -->
                        </div>
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!--..:: Content Section End ::.. -->

            <!-- Horizontal Text Slider -->
            <div class="overflow-hidden bg-[#0E0E0E] py-5 font-Sora text-3xl font-semibold uppercase leading-[1.4] tracking-[1px] text-[#FEF7E6]">
                <!-- Horizontal Slider Block-->
                <div class="horizontal-slide-from-right-to-left flex gap-x-[30px]">
                    <span class="flex whitespace-nowrap">The best AI tool to get your perfect photo
                    </span>
                    <img src="assets/img/icons/icon-rum-swizzle-dial-star.svg" alt="dial-star" width="37" height="35" />
                    <span class="flex whitespace-nowrap">The best AI tool to get your perfect photo
                    </span>
                    <img src="assets/img/icons/icon-rum-swizzle-dial-star.svg" alt="dial-star" width="37" height="35" />
                    <span class="flex whitespace-nowrap">The best AI tool to get your perfect photo
                    </span>
                    <img src="assets/img/icons/icon-rum-swizzle-dial-star.svg" alt="dial-star" width="37" height="35" />
                    <span class="flex whitespace-nowrap">The best AI tool to get your perfect photo
                    </span>
                    <img src="assets/img/icons/icon-rum-swizzle-dial-star.svg" alt="dial-star" width="37" height="35" />
                </div>
                <!-- Horizontal Slider Block-->
            </div>
            <!-- Horizontal Text Slider -->

            <!--..:: Testimonial Section Start ::.. -->
            <section class="section-testimonial">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- Section Content Wrapper -->
                        <div class="jos mb-[60px] xl:mb-20">
                            <!-- Section Content Block -->
                            <div class="mx-auto max-w-[750px]">
                                <div class="mb-5">
                                    <h2 class="text-center font-Sora text-4xl font-bold leading-[1.16] -tracking-[0.5px] text-[#0E0E0E] lg:text-5xl xl:text-[52px] xxl:text-[60px]">
                                        People enjoy using our AI photo editing tool
                                    </h2>
                                </div>
                                <p class="text-center text-[#2c2c2c]">
                                    Our AI photo editor is a game changer for customers. UI
                                    designers, amateur photographers and Instagrammers can feel
                                    free to edit a photo with it.
                                </p>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->

                        <!-- Testimonial List -->
                        <div class="gris-cols-1 grid gap-[30px] md:grid-cols-2 xl:grid-cols-3">
                            <!-- Testimonial Item -->
                            <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                                <div class="hover-solid-shadow h-full">
                                    <div class="flex h-full flex-col gap-y-10 rounded-[10px] border-2 border-[#0E0E0E] bg-[#FEF7E6] p-10">
                                        <div class="h-auto w-16">
                                            <img src="assets/img/icons/icon-purple-quote.svg" alt="icon-purple-quote" width="64" height="60" class="h-auto w-full" />
                                        </div>
                                        <blockquote class="text-xl font-semibold -tracking-[0.5px] text-[#0E0E0E] lg:text-2xl">
                                            Masco image edit is a great tool for those people who
                                            are passionate about AI photo editing. Saved me a lot of
                                            time on remove objects in Photo. I love this tool 💗
                                        </blockquote>
                                        <div class="flex items-center gap-x-[17px]">
                                            <div class="h-[60px] w-[60px] overflow-hidden rounded-[50%] border-2 border-[#0E0E0E]">
                                                <img src="assets/img/th-12/testimonial-user-img-1.png" alt="testimonial-user-img-1" width="60" height="60" class="h-full w-full" />
                                            </div>
                                            <div class="text-xl font-semibold capitalize text-[#0E0E0E]">
                                                Dominika Smith
                                                <span class="block text-lg font-normal">Photographer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item -->
                            <!-- Testimonial Item -->
                            <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.3">
                                <div class="hover-solid-shadow h-full">
                                    <div class="flex h-full flex-col gap-y-10 rounded-[10px] border-2 border-[#0E0E0E] bg-[#FEF7E6] p-10">
                                        <div class="h-auto w-16">
                                            <img src="assets/img/icons/icon-purple-quote.svg" alt="icon-purple-quote" width="64" height="60" class="h-auto w-full" />
                                        </div>
                                        <blockquote class="text-xl font-semibold -tracking-[0.5px] text-[#0E0E0E] lg:text-2xl">
                                            I am very impressed! The user interface is very simple
                                            to quickly edit my photos. The editing quality is
                                            exceptional - my photos look better than ever. Highly
                                            recommend 👍
                                        </blockquote>
                                        <div class="flex items-center gap-x-[17px]">
                                            <div class="h-[60px] w-[60px] overflow-hidden rounded-[50%] border-2 border-[#0E0E0E]">
                                                <img src="assets/img/th-12/testimonial-user-img-2.png" alt="testimonial-user-img-2" width="60" height="60" class="h-full w-full" />
                                            </div>
                                            <div class="text-xl font-semibold capitalize text-[#0E0E0E]">
                                                Adam Jonney
                                                <span class="block text-lg font-normal">UI Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item -->
                            <!-- Testimonial Item -->
                            <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.6">
                                <div class="hover-solid-shadow h-full">
                                    <div class="flex h-full flex-col gap-y-10 rounded-[10px] border-2 border-[#0E0E0E] bg-[#FEF7E6] p-10">
                                        <div class="h-auto w-16">
                                            <img src="assets/img/icons/icon-purple-quote.svg" alt="icon-purple-quote" width="64" height="60" class="h-auto w-full" />
                                        </div>
                                        <blockquote class="text-xl font-semibold -tracking-[0.5px] text-[#0E0E0E] lg:text-2xl">
                                            The background remover is awesome!! It is easy to use
                                            and made my photos 100% better. This is the best picture
                                            editing software ever!! Easy to use & very Comfortable.
                                            😍
                                        </blockquote>
                                        <div class="flex items-center gap-x-[17px]">
                                            <div class="h-[60px] w-[60px] overflow-hidden rounded-[50%] border-2 border-[#0E0E0E]">
                                                <img src="assets/img/th-12/testimonial-user-img-3.png" alt="testimonial-user-img-3" width="60" height="60" class="h-full w-full" />
                                            </div>
                                            <div class="text-xl font-semibold capitalize text-[#0E0E0E]">
                                                Robert Mack
                                                <span class="block text-lg font-normal">Instagrammer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item -->
                        </div>
                        <!-- Testimonial List -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!--..:: Testimonial Section End ::.. -->

            <!--..:: FAQ Section Start ::.. -->
            <section class="section-faq">
                <!-- Section Space -->
                <div class="section-space-bottom">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- FAQ Area -->
                        <div class="grid items-center gap-x-6 gap-y-10 lg:grid-cols-[1fr_minmax(0,_0.8fr)] xxl:gap-x-[134px]">
                            <!-- Content Block -->
                            <div class="jos" data-jos_animation="fade-right">
                                <!-- Section Wrapper -->
                                <div>
                                    <!-- Section Block -->
                                    <div class="mb-5">
                                        <h2 class="font-Sora text-4xl font-bold leading-[1.16] -tracking-[0.5px] text-[#0E0E0E] lg:text-5xl xl:text-[52px] xxl:text-[60px]">
                                            Have any questions? Feel free to ask us
                                        </h2>
                                    </div>
                                    <!-- Section Block -->
                                </div>
                                <!-- Section Wrapper -->
                                <p class="mb-9 text-[#2C2C2C] lg:mb-14">
                                    One of the best & easiest AI photo editing tool you can get,
                                    if you have any question you can ask us directly. We’re
                                    ready to answer all your questions.
                                </p>
                                <a href="contact.php" class="group relative z-10 inline-block">
                                    <div class="btn is-large rounded-[3px] border-2 border-[#0E0E0E] bg-ColorBluePurple text-white">
                                        Ask You Questions
                                    </div>
                                    <div class="absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] rounded-[3px] bg-[#0E0E0E] transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                                </a>
                            </div>
                            <!-- Content Block -->

                            <!-- FAQ Block -->
                            <div class="jos flex justify-center" data-jos_animation="fade-left">
                                <!-- Accordion List -->
                                <ul class="mx-auto">
                                    <!-- Accordion Item -->
                                    <li class="accordion-item active border-b border-[#0E0E0E] pb-6 last:border-b-0 has-[.accordion-header]:pt-6 first:has-[.accordion-header]:pt-0">
                                        <!-- Accordion Header -->
                                        <div class="accordion-header relative pr-8 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                            <button class="flex-1 text-left">
                                                What is AI in photo editing tool?
                                            </button>
                                            <div class="accordion-icon-3 absolute right-0 top-0">
                                                <i class="fa-regular fa-plus"></i>
                                            </div>
                                        </div>
                                        <!-- Accordion Header -->
                                        <!-- Accordion Body -->
                                        <div class="accordion-body opacity-80">
                                            <p class="pt-5 text-base text-[#2C2C2C]">
                                                Using Artificial Intelligence, these impressive tools
                                                are able to detect the subject in your image to
                                                enhance it, and remove the background around it, apply
                                                photo effects where you want them, and more.
                                            </p>
                                        </div>
                                        <!-- Accordion Body -->
                                    </li>
                                    <!-- Accordion Item -->
                                    <!-- Accordion Item -->
                                    <li class="accordion-item border-b border-[#0E0E0E] pb-6 last:border-b-0 has-[.accordion-header]:pt-6 first:has-[.accordion-header]:pt-0">
                                        <!-- Accordion Header -->
                                        <div class="accordion-header relative pr-8 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                            <button class="flex-1 text-left">
                                                Can I use this software on my PC?
                                            </button>
                                            <div class="accordion-icon-3 absolute right-0 top-0">
                                                <i class="fa-regular fa-plus"></i>
                                            </div>
                                        </div>
                                        <!-- Accordion Header -->
                                        <!-- Accordion Body -->
                                        <div class="accordion-body opacity-80">
                                            <p class="pt-5 text-base text-[#2C2C2C]">
                                                Using Artificial Intelligence, these impressive tools
                                                are able to detect the subject in your image to
                                                enhance it, and remove the background around it, apply
                                                photo effects where you want them, and more.
                                            </p>
                                        </div>
                                        <!-- Accordion Body -->
                                    </li>
                                    <!-- Accordion Item -->
                                    <!-- Accordion Item -->
                                    <li class="accordion-item border-b border-[#0E0E0E] pb-6 last:border-b-0 has-[.accordion-header]:pt-6 first:has-[.accordion-header]:pt-0">
                                        <!-- Accordion Header -->
                                        <div class="accordion-header relative pr-8 font-Sora text-xl font-semibold text-[#0E0E0E] lg:text-2xl">
                                            <button class="flex-1 text-left">
                                                How can I download it?
                                            </button>
                                            <div class="accordion-icon-3 absolute right-0 top-0">
                                                <i class="fa-regular fa-plus"></i>
                                            </div>
                                        </div>
                                        <!-- Accordion Header -->
                                        <!-- Accordion Body -->
                                        <div class="accordion-body opacity-80">
                                            <p class="pt-5 text-base text-[#2C2C2C]">
                                                Using Artificial Intelligence, these impressive tools
                                                are able to detect the subject in your image to
                                                enhance it, and remove the background around it, apply
                                                photo effects where you want them, and more.
                                            </p>
                                        </div>
                                        <!-- Accordion Body -->
                                    </li>
                                    <!-- Accordion Item -->
                                </ul>
                                <!-- Accordion List -->
                            </div>
                            <!-- FAQ Block -->
                        </div>
                        <!-- FAQ Area -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!--..:: FAQ Section End ::.. -->

            <!--..:: CTA Section Start ::.. -->
            <section class="section-cta">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="relative z-10 rounded-[10px] bg-[#FFD372]">
                        <!-- Section Space -->
                        <div class="section-space">
                            <div class="px-5 sm:px-10">
                                <!-- Section Content Wrapper -->
                                <div class="jos mb-8 lg:mb-[50px]">
                                    <!-- Section Content Block -->
                                    <div class="mx-auto max-w-[700px]">
                                        <div class="mb-5">
                                            <h2 class="text-center font-Sora text-4xl font-bold leading-[1.16] -tracking-[0.5px] text-[#0E0E0E] lg:text-5xl xl:text-[52px] xxl:text-[60px]">
                                                Create perfect photos with AI photo editing
                                            </h2>
                                        </div>
                                        <p class="text-center text-[#2c2c2c]">
                                            Build perfect compositions and apply great effects to
                                            get unique designs in no time with our AI image editor.
                                            Create impactful art effortlessly.
                                        </p>
                                    </div>
                                    <!-- Section Content Block -->
                                </div>
                                <!-- Section Content Wrapper -->
                                <div class="jos flex justify-center">
                                    <a href="#" class="group relative z-10 inline-block">
                                        <div class="btn is-large rounded-[3px] border-2 border-[#0E0E0E] bg-ColorBluePurple text-white">
                                            Get Started Now
                                        </div>
                                        <div class="absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] rounded-[3px] bg-[#0E0E0E] transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Section Space -->

                        <!-- Background Shape -->
                        <img src="assets/img/elements/home-12-cta-shape.svg" alt="home-12-cta-shape.svg" width="72" height="106" class="absolute right-32 top-8 -z-10 hidden xl:inline-block" />
                    </div>
                </div>
                <!-- Section Container -->
                <!-- Section Background -->
            </section>
            <!--..:: CTA Section End ::.. -->
        </main>

        <!--..:: Footer Section Start ::.. -->
        <footer class="section-footer">
            <!-- Footer Area Center -->
            <div class="text-[#2C2C2C]">
                <!-- Footer Center Spacing -->
                <div class="py-[60px] lg:py-20">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- Footer Widget List -->
                        <div class="grid gap-x-4 lg:gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-[1fr_repeat(3,_auto)] xl:lg:grid-cols-[1fr_repeat(4,_auto)]  xl:gap-x-20">
                            <!-- Footer Widget Item -->
                            <div class="flex flex-col gap-y-7 md:col-span-4 lg:col-span-1">
                                <!-- Footer Logo -->
                                <a href="index.php">
                                    <img src="assets/img/logo-purple-dark.png" alt="Masco" width="109" height="24" />
                                </a>
                                <!-- Footer Content -->
                                <div>
                                    <!-- Footer About Text -->
                                    <div class="lg:max-w-[320px]">
                                        Email, SMS, Facebook, Chat, CRM, & more, all-in-one
                                        platform to help you grow your business through building
                                        stronger customer relationships.
                                    </div>
                                    <!-- Footer Social Link -->
                                    <div class="mt-10 flex flex-wrap gap-5">
                                        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#0E0E0E]/10 text-sm text-[#0E0E0E] transition-all duration-300 hover:bg-[#0E0E0E] hover:text-white" aria-label="twitter">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#0E0E0E]/10 text-sm text-[#0E0E0E] transition-all duration-300 hover:bg-[#0E0E0E] hover:text-white" aria-label="facebook">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#0E0E0E]/10 text-sm text-[#0E0E0E] transition-all duration-300 hover:bg-[#0E0E0E] hover:text-white" aria-label="instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#0E0E0E]/10 text-sm text-[#0E0E0E] transition-all duration-300 hover:bg-[#0E0E0E] hover:text-white" aria-label="github">
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
                                <div class="text-xl font-semibold capitalize text-[#0E0E0E]">
                                    Primary Pages
                                </div>
                                <!-- Footer Navbar -->
                                <ul class="flex flex-col gap-y-[10px] capitalize">
                                    <li>
                                        <a href="index.php" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.php" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">About Us</a>
                                    </li>
                                    <li>
                                        <a href="services.php" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Services</a>
                                    </li>
                                    <li>
                                        <a href="pricing.php" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">pricing</a>
                                    </li>
                                    <li>
                                        <a href="contact.php" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer Widget Item -->

                            <!-- Footer Widget Item -->
                            <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                <!-- Footer Title -->
                                <div class="text-xl font-semibold capitalize text-[#0E0E0E]">
                                    Utility pages
                                </div>
                                <!-- Footer Title -->

                                <!-- Footer Navbar -->
                                <ul class="flex flex-col gap-y-[10px] capitalize">
                                    <li>
                                        <a href="signup.php" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Signup</a>
                                    </li>
                                    <li>
                                        <a href="login.php" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Login</a>
                                    </li>
                                    <li>
                                        <a href="error-404.php" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">404 Not found</a>
                                    </li>
                                    <li>
                                        <a href="reset-password.php" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Password Reset</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer Widget Item-->

                            <!-- Footer Widget Item -->
                            <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                <!-- Footer Title -->
                                <div class="text-xl font-semibold capitalize text-[#0E0E0E]">
                                    Resources
                                </div>
                                <!-- Footer Title -->

                                <!-- Footer Navbar -->
                                <ul class="flex flex-col gap-y-[10px] capitalize">
                                    <li>
                                        <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Support</a>
                                    </li>
                                    <li>
                                        <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Privacy policy</a>
                                    </li>
                                    <li>
                                        <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Terms & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Strategic finance</a>
                                    </li>
                                    <li>
                                        <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Video guide</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer Widget Item -->
                            <!-- Footer Widget Item -->
                            <div class="flex flex-col gap-y-6">
                                <!-- Footer Title -->
                                <div class="text-xl font-semibold capitalize text-[#0E0E0E]">
                                    Download now
                                </div>
                                <!-- Footer Title -->

                                <div class="flex flex-col gap-3">
                                    <a href="#">
                                        <img src="assets/img/icons/icon-apple-app-store.svg" alt="icon-apple-app-store" width="166" height="54" />
                                    </a>
                                    <a href="#">
                                        <img src="assets/img/icons/icon-google-play-store.svg" alt="icon-apple-app-store" width="166" height="51" />
                                    </a>
                                </div>
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
            <div class="horizontal-line bg-ColorBlack"></div>
            <!-- Footer Bottom -->
            <div>
                <!-- Footer Bottom Spacing -->
                <div class="py-10">
                    <!-- Section Container -->
                    <div class="container-default">
                        <div class="text-center">
                            &copy; Copyright 2024, All Rights Reserved by Pixcels Themes
                        </div>
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Footer Bottom Spacing -->
            </div>
            <!-- Footer Bottom -->
        </footer>
        <!--..:: Footer Section End ::.. -->
    </div>

   <!--..:: Importing Scripts Section ::.. -->
   <?php include "./partials/scripts.php" ?>
    
</body>

</html>