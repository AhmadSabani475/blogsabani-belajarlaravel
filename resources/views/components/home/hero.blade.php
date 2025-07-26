    <div id="default-carousel" class="relative w-full h-screen" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative w-full h-full overflow-hidden">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://picsum.photos/1920/1080" class="absolute block w-full h-full object-cover top-0 left-0"
                    alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://picsum.photos/1920/1080" class="absolute block w-full h-full object-cover top-0 left-0"
                    alt="...">
            </div>
            <!-- Tambahkan item lain dengan pola yang sama -->
        </div>

        <!-- Indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button class="w-3 h-3 rounded-full bg-white" data-carousel-slide-to="0"></button>
            <button class="w-3 h-3 rounded-full bg-white/50" data-carousel-slide-to="1"></button>
        </div>

        <!-- Controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group"
            data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/50">
                <svg class="w-5 h-5 text-white" viewBox="0 0 6 10" fill="none">
                    <path d="M5 1 1 5l4 4" stroke="currentColor" stroke-width="2" />
                </svg>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group"
            data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/50">
                <svg class="w-5 h-5 text-white" viewBox="0 0 6 10" fill="none">
                    <path d="m1 9 4-4-4-4" stroke="currentColor" stroke-width="2" />
                </svg>
            </span>
        </button>
    </div>
