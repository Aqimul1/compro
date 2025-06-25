<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <header class="bg-main font-ubuntu relative">
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="relative pt-[16rem] pb-[7rem] pl-5 space-y-5 text-slate-100">
                <h1 class="text-5xl font-bold uppercase md:text-7xl">Layanan</h1>
                <hr class="w-1/2 lg:w-1/3 border-2">
            </div>
        </header>

        <main class="bg-white font-ubuntu">
            <div class="py-20 px-8 lg:px-20 space-y-8">
                <div class="text-center">
                    <h1 class="text-4xl font-bold uppercase text-gray-900 lg:text-5xl">What We Offer</h1>
                </div>

                <div class="text-center grid grid-cols-1 gap-y-4 lg:grid-cols-3 lg:gap-x-4">
                    {{-- Start Card 1 --}}
                    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow space-y-4">
                        <div class="flex items-center justify-center">
                            <svg class="w-7 h-7 text-gray-500 mb-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                            </svg>
                        </div>

                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">BUSINESS PROGRESS
                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="mb-3 font-normal text-gray-900/50 text-sm">curabitur ullamcorper ultricies
                                nisi. Nam
                                eget dui.
                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
                        </div>
                    </div>
                    {{-- End Card 1 --}}

                    {{-- Start Card 2 --}}
                    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow space-y-4">
                        <div class="flex items-center justify-center">
                            <svg class="w-7 h-7 text-gray-500 mb-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                            </svg>
                        </div>

                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">BUSINESS PROGRESS
                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="mb-3 font-normal text-gray-900/50 text-sm">curabitur ullamcorper ultricies nisi. Nam
                                eget dui.
                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
                        </div>
                    </div>
                    {{-- End Card 3 --}}

                    {{-- Start Card 4 --}}
                    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow space-y-4">
                        <div class="flex items-center justify-center">
                            <svg class="w-7 h-7 text-gray-500 mb-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                            </svg>
                        </div>

                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">BUSINESS PROGRESS
                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="mb-3 font-normal text-gray-900/50 text-sm">curabitur ullamcorper ultricies nisi. Nam
                                eget dui.
                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
                        </div>
                    </div>
                    {{-- End Card 4 --}}
                </div>
            </div>
        </main>

        <section class="bg-slate-200 font-ubuntu">
            <div class="py-20 px-8 space-y-6 lg:px-20">
                <div class="text-center text-gray-900 space-y-4">
                    <h1 class="uppercase font-bold text-4xl lg:text-5xl">
                        HOW WE PLAN OUR WORK
                    </h1>
                    <p class="text-sm text-gray-900/50">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                        Phasellus viverra nulla metus varius
                        laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
                        ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus</p>
                </div>

                <div class="text-center grid grid-cols-1 gap-y-6 lg:grid-cols-3 lg:gap-x-6">
                    <div class="p-10 bg-white border border-gray-200 rounded-lg shadow space-y-4">
                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">01. RESEARCH & PLANNING
                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="font-normal text-gray-900/50 text-sm">curabitur ullamcorper ultricies
                                nisi. Nam
                                eget dui.
                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
                        </div>
                    </div>

                    <div class="p-10 bg-white border border-gray-200 rounded-lg shadow space-y-4">
                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">02. IMPLEMENTATION

                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="font-normal text-gray-900/50 text-sm">curabitur ullamcorper ultricies
                                nisi. Nam
                                eget dui.
                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
                        </div>
                    </div>

                    <div class="p-10 bg-white border border-gray-200 rounded-lg shadow space-y-4">
                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">03. REVIEW & LAUNCH

                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="font-normal text-gray-900/50 text-sm">curabitur ullamcorper ultricies
                                nisi. Nam
                                eget dui.
                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="grid grid-cols-1 py-20 px-6 space-y-6 md:grid-cols-2 md:gap-x-8 lg:px-20 items-center">
                <div class="space-y-4">
                    <h1 class="text-4xl font-bold md:text-5xl">SKILLS & EXPERTISE</h1>
                    <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla metus varius
                        laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
                        ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus</p>
                    <button
                        class="transition duration-300 bg-sky-800 text-white py-2 px-4 font-bold text-md uppercase hover:bg-white hover:text-sky-800 hover:ring hover:ring-sky-800">Start
                        Now</button>
                </div>

                <div class="space-y-6">
                    <div>
                        <dl class="space-y-2">
                            <dt class="text-sm font-bold uppercase text-gray-900">Web Designer</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-slate-100 h-1 me-2">
                                    <div class="bg-sky-800 h-1" style="width: 88%"></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl class="space-y-2">
                            <dt class="text-sm font-bold uppercase text-gray-900">Motion Graphic</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-slate-100 h-1 me-2">
                                    <div class="bg-sky-800 h-1" style="width: 88%"></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl class="space-y-2">
                            <dt class="text-sm font-bold uppercase text-gray-900">Expertise</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-slate-100 h-1 me-2">
                                    <div class="bg-sky-800 h-1" style="width: 88%"></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl class="space-y-2">
                            <dt class="text-sm font-bold uppercase text-gray-900">Marketing</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-slate-100 h-1 me-2">
                                    <div class="bg-sky-800 h-1" style="width: 100%"></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl class="space-y-2">
                            <dt class="text-sm font-bold uppercase text-gray-900">Progress</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-slate-100 h-1 me-2">
                                    <div class="bg-sky-800 h-1" style="width: 88%"></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-layout>
