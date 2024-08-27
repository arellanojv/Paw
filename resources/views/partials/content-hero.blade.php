<section class="section-hero">
  <!-- Section Background -->
  <div class="bg-[#F7EDD1]">
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
                              {{get_field( "heading" )}}
                          </h1>
                      </div>
                      <p class="mb-9 max-w-[746px] lg:mb-14">
                        {{-- @php(the_content()) --}}
                        {{get_field( "description" )}}
                      </p>
                      <a href="{{$ctaBtnInfo['url']}}" class="group relative z-10 hidden sm:inline-block">
                        <div class="btn is-rounded is-darkblue text-white">{{$ctaBtnInfo['title']}}</div>
                        <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] bg-ColorDarkBlue transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                    </a>
                  </div>
                  <!-- Hero Content Block -->

                  <!-- Hero Image Block -->
                  <div class="relative">
                      <img src="{{get_field( "hero_image" )}}" alt="hero-img" width="455" height="548" data-jos_animation="zoom-in-down" class="mx-auto md:rotate-[5deg] hero-img-main" />

                      <!-- Hero Image Shape - 1 -->
                      <img src="@asset('images/elements/hero-12-shape-1.svg')" alt="hero-12-shape-1" width="56" height="81" class="absolute -left-20 bottom-0 hidden md:inline-block lg:-left-28" />
                      <!-- Hero Image Shape - 2 -->
                      <img src="@asset('images/elements/hero-12-shape-2.svg')" alt="hero-12-shape-2" width="55" height="68" class="absolute -right-16 -top-8 hidden md:inline-block" />
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