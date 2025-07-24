<x-layout :title=$title>

    <!-- Your content -->

    {{-- hero --}}
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://picsum.photos/800/800"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://picsum.photos/800/800"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://picsum.photos/800/800"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://picsum.photos/800/800"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    {{-- end hero --}}

    {{-- about --}}
    <div class="overflow-hidden bg-white text-black py-20 sm:py-28 my-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pt-4 lg:pr-8">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base/7 font-semibold text-indigo-400">Tentang </h2>
                        <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-black sm:text-5xl">
                            Asrama Al - Badar Cipulus
                        </p>
                        <p class="mt-6 text-lg/8 text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptatem eius
                            consequuntur, ea non autem et debitis ex accusamus nisi aliquid laboriosam officia
                            aspernatur quos? Quod quisquam error vitae repudiandae voluptas sunt harum, dolore delectus
                        </p>
                        <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-black">
                                    <svg viewBox="0 0 20 20" fill="currentColor"
                                        class="absolute top-1 left-1 size-5 text-indigo-400">
                                        <path
                                            d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                    Lorem ipsum dolor sit amet.
                                </dt>
                                <dd class="inline">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ab quidem magnam
                                    magni temporibus sapiente.
                                </dd>
                            </div>

                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-black">
                                    <svg viewBox="0 0 20 20" fill="currentColor"
                                        class="absolute top-1 left-1 size-5 text-indigo-400">
                                        <path
                                            d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                    Lorem ipsum dolor sit amet.
                                </dt>
                                <dd class="inline">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut accusamus laboriosam qui
                                    minima distinctio voluptas?
                                </dd>
                            </div>

                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-black">
                                    <svg viewBox="0 0 20 20" fill="currentColor"
                                        class="absolute top-1 left-1 size-5 text-indigo-400">
                                        <path
                                            d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                                        <path
                                            d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                    Lorem ipsum dolor sit amet.
                                </dt>
                                <dd class="inline">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus autem sequi est
                                    non, tempora ipsam.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <img width="2432" height="1442"
                    src="https://tailwindcss.com/plus-assets/img/component-images/dark-project-app-screenshot.png"
                    alt="Tampilan Aplikasi Asrama"
                    class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-228 md:-ml-4 lg:-ml-0" />
            </div>
        </div>
    </div>
    {{-- end about --}}

    {{-- blog --}}
    <div class="flex flex-col py-10 ">
        <h2 class = "m-auto text-3xl font-semibold tracking-tight text-pretty text-black sm:text-3xl">Informasi &
            Aktivitas Asrama</h2>
        <p class=" text-base/7 text-gray-600 m-auto my-4">Temukan berbagai informasi dan dokumentasi kegiatan santri,
            mulai dari
            kegiatan harian hingga momen-momen spesial di asrama.</p>
        <div class="mt-4 grid gap-8 lg:grid-cols-3 md:grid-cols-2">
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <a href="/posts?category=">
                        <span
                            class=" text-grey-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            dadasdaf
                        </span>
                    </a>
                    <span class="text-sm">fsdfsdfdsf</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="/posts/">
                    </a> </h2>
                <div class="mb-5 font-light text-gray-500
                        dark:text-gray-400">Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Repudiandae
                    placeat tempore, minima nemo sequi atque corporis error sunt quis aut officiis, suscipit modi et
                    ipsam, rem praesentium? Id, earum consectetur!
                </div>
                <div class="flex justify-between items-center">
                    <a href="/authors/" class="">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="{{ asset('img/1000_F_589932782_vQAEAZhHnq1QCGu5ikwrYaQD0Mmurm0N.jpg') }}"
                                alt="" />

                            <span class="font-medium dark:text-white text-xs">
                                dahdsbadj
                            </span>
                        </div>
                    </a>
                    <a href="/posts/"
                        class="text-xs inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <a href="/posts?category=">
                        <span
                            class=" text-grey-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            dadasdaf
                        </span>
                    </a>
                    <span class="text-sm">fsdfsdfdsf</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="/posts/">
                    </a> </h2>
                <div class="mb-5 font-light text-gray-500
                        dark:text-gray-400">Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Repudiandae
                    placeat tempore, minima nemo sequi atque corporis error sunt quis aut officiis, suscipit modi et
                    ipsam, rem praesentium? Id, earum consectetur!
                </div>
                <div class="flex justify-between items-center">
                    <a href="/authors/" class="">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="{{ asset('img/1000_F_589932782_vQAEAZhHnq1QCGu5ikwrYaQD0Mmurm0N.jpg') }}"
                                alt="" />

                            <span class="font-medium dark:text-white text-xs">
                                dahdsbadj
                            </span>
                        </div>
                    </a>
                    <a href="/posts/"
                        class="text-xs inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <a href="/posts?category=">
                        <span
                            class=" text-grey-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            dadasdaf
                        </span>
                    </a>
                    <span class="text-sm">fsdfsdfdsf</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="/posts/">
                    </a> </h2>
                <div class="mb-5 font-light text-gray-500
                        dark:text-gray-400">Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Repudiandae
                    placeat tempore, minima nemo sequi atque corporis error sunt quis aut officiis, suscipit modi et
                    ipsam, rem praesentium? Id, earum consectetur!
                </div>
                <div class="flex justify-between items-center">
                    <a href="/authors/" class="">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="{{ asset('img/1000_F_589932782_vQAEAZhHnq1QCGu5ikwrYaQD0Mmurm0N.jpg') }}"
                                alt="" />

                            <span class="font-medium dark:text-white text-xs">
                                dahdsbadj
                            </span>
                        </div>
                    </a>
                    <a href="/posts/"
                        class="text-xs inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <hr />
        </div>
    </div>
    {{-- end blog --}}




</x-layout>
