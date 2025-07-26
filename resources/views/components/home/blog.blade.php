<div class="flex flex-col py-10 ">
    <h2 class = "m-auto text-3xl font-semibold tracking-tight text-pretty text-black sm:text-3xl">Informasi &
        Aktivitas Asrama</h2>
    <p class=" text-base/7 text-gray-600 m-auto my-4">Temukan berbagai informasi dan dokumentasi kegiatan santri,
        mulai dari
        kegiatan harian hingga momen-momen spesial di asrama.</p>
    <div class="mt-4 grid gap-8 lg:grid-cols-3 md:grid-cols-2">
        @foreach ($posts as $post)
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <a href="/posts?category={{ $post->category->slug }}">
                        <span
                            class="{{ $post->category->color }} text-grey-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            {{ $post->category->name }}
                        </span>
                    </a>
                    <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                        href="/posts/{{ $post['slug'] }}">{{ $post->title }}</a></h2>
                <div class="mb-5 font-light text-gray-500 dark:text-gray-400">{!! Str::limit($post['body'], 250) !!}</div>
                <div class="flex justify-between items-center">
                    <a href="/authors/{{ $post->author->username }}" class="">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="{{ $post->author->avatar ? asset('storage/' . $post->author->avatar) : asset('img/1000_F_589932782_vQAEAZhHnq1QCGu5ikwrYaQD0Mmurm0N.jpg') }}"
                                alt="{{ $post->author->name }}" />

                            <span class="font-medium dark:text-white text-xs">
                                {{ $post->author->name }}
                            </span>
                        </div>
                    </a>
                    <a href="/posts/{{ $post['slug'] }}"
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
        @endforeach
        <div class="col-span-full flex justify-center">
            <a href="/posts"
                class="p-4 bg-blue-500 rounded-xl text-white text-center hover:bg-blue-800 cursor-pointer">
                Lainnya
            </a>
        </div>

        <hr />
    </div>
</div>
