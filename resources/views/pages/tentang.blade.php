<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <header class="bg-main font-ubuntu relative">
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="relative pt-[16rem] pb-[7rem] pl-5 space-y-5 text-slate-100">
                <h1 class="text-5xl font-bold uppercase md:text-7xl">Tentang</h1>
                <hr class="w-1/2 lg:w-1/3 border-2">
            </div>
        </header>

        <section class="bg-white lg:h-screen lg:flex lg:items-center font-ubuntu">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-10 md:max-w-7xl md:grid-cols-2 md:px-8 lg:px-20">
                <div class="relative w-full h-0" style="padding-top: 80%">
                    <img src="{{ asset('images/mainphoto.jpg') }}" alt="Orang sedang berkemah"
                        class="absolute inset-0 object-cover w-full h-full rounded-lg bg-gray-100" />
                </div>
                <div class="font-cabin md:pr-14 space-y-4">
                    <h1 class="text-4xl font-semibold tracking-tight uppercase text-gray-900 lg:text-5xl lg:leading-normal">
                        About "Xoni Agency"</h1>
                    <p class="text-md text-gray-700">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet, doloribus deleniti. Enim itaque
                        quae sapiente aspernatur ex, et aliquam doloribus aut est maxime aliquid reprehenderit minus esse!
                        Quaerat, odio dolores.
                    </p>
                    <button
                        class="transition duration-300 bg-sky-800 text-white py-2 px-4 font-bold text-md uppercase hover:bg-white hover:text-sky-800 hover:ring hover:ring-sky-800">Start
                        Now</button>
                </div>
            </div>
        </section>

        <main class="bg-slate-200">
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
        </main>

        <section class="bg-white lg:h-screen lg:flex lg:items-center font-ubuntu">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-10 md:max-w-7xl md:grid-cols-2 md:px-8 lg:px-20">
                <div class="relative w-full h-0" style="padding-top: 80%">
                    <img src="{{ asset('images/mainphoto2.jpg') }}" alt="Orang sedang berkemah"
                        class="absolute inset-0 object-cover w-full h-full rounded-lg bg-gray-100" />
                </div>
                <div class="font-cabin md:pr-14 space-y-4">
                    <h1 class="text-4xl font-semibold tracking-tight uppercase text-gray-900 lg:text-5xl lg:leading-normal">
                        OUR PROFESSIONAL SERVICES WITH LOVE!!</h1>
                    <p class="text-md text-gray-700">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet, doloribus deleniti. Enim itaque
                        quae sapiente aspernatur ex, et aliquam doloribus aut est maxime aliquid reprehenderit minus esse!
                        Quaerat, odio dolores.
                    </p>
                    <button
                        class="transition duration-300 bg-sky-800 text-white py-2 px-4 font-bold text-md uppercase hover:bg-white hover:text-sky-800 hover:ring hover:ring-sky-800">Start
                        Now</button>
                </div>
            </div>
        </section>

        <section class="relative bg-main bg-cover bg-center bg-fixed lg:h-auto font-ubuntu">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="relative z-10 flex items-center justify-center h-full lg:h-auto">
                <div class="text-center max-w-7xl px-4 lg:px-8 lg:py-16">
                    <div class="mt-8 mb-8 grid grid-cols-1 gap-14 lg:grid-cols-4 lg:grid-rows-1 lg:gap-20">
                        <div class="space-y-2">
                            <h1 class="text-6xl text-slate-100 font-semibold counter" data-target="13"></h1>
                            <p class="text-slate-100 uppercase font-semibold whitespace-nowrap">Business Years</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-slate-100 font-semibold counter" data-target="6213">0</h1>
                            <p class="text-slate-100 uppercase font-semibold whitespace-nowrap">Worldwide Clients</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-slate-100 font-semibold counter" data-target="55">0</h1>
                            <p class="text-slate-100 uppercase font-semibold whitespace-nowrap">Our Team</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-slate-100 font-semibold counter" data-target="344">0</h1>
                            <p class="text-slate-100 uppercase font-semibold whitespace-nowrap">Items Portfolio </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-slate-200 font-ubuntu">
            <div class="py-20 px-6 space-y-6 lg:px-20">
                <div class="text-center space-y-4">
                    <h1 class="text-4xl font-bold text-gray-900 md:text-5xl">WE PROVIDE THE BEST OFFERS
                    </h1>
                    <p class="text-sm text-gray-900/50">
                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla metus
                        varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur
                        ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:gap-x-10">
                    <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
                        <h5 class="mb-4 text-xl font-medium text-gray-500">Standard plan</h5>
                        <div class="flex items-baseline text-gray-900">
                            <span class="text-3xl font-semibold">$</span>
                            <span class="text-5xl font-extrabold tracking-tight">49</span>
                            <span class="ms-1 text-xl font-normal text-gray-500">/month</span>
                        </div>
                        <ul role="list" class="space-y-5 my-7">
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-sky-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">2 team members</span>
                            </li>
                            <li class="flex">
                                <svg class="flex-shrink-0 w-4 h-4 text-sky-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">20GB Cloud
                                    storage</span>
                            </li>
                            <li class="flex">
                                <svg class="flex-shrink-0 w-4 h-4 text-sky-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">Integration
                                    help</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">Sketch Files</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">API Access</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">Complete
                                    documentation</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">24×7 phone & email
                                    support</span>
                            </li>
                        </ul>
                        <button type="button"
                            class="text-white bg-sky-800 hover:bg-sky-900 focus:ring-4 focus:outline-none focus:ring-sky-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose
                            plan</button>
                    </div>

                    <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
                        <h5 class="mb-4 text-xl font-medium text-gray-500">Standard plan</h5>
                        <div class="flex items-baseline text-gray-900">
                            <span class="text-3xl font-semibold">$</span>
                            <span class="text-5xl font-extrabold tracking-tight">49</span>
                            <span class="ms-1 text-xl font-normal text-gray-500">/month</span>
                        </div>
                        <ul role="list" class="space-y-5 my-7">
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-sky-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">2 team members</span>
                            </li>
                            <li class="flex">
                                <svg class="flex-shrink-0 w-4 h-4 text-sky-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">20GB Cloud
                                    storage</span>
                            </li>
                            <li class="flex">
                                <svg class="flex-shrink-0 w-4 h-4 text-sky-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">Integration
                                    help</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">Sketch Files</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">API Access</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">Complete
                                    documentation</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">24×7 phone & email
                                    support</span>
                            </li>
                        </ul>
                        <button type="button"
                            class="text-white bg-sky-800 hover:bg-sky-900 focus:ring-4 focus:outline-none focus:ring-sky-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose
                            plan</button>
                    </div>

                    <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
                        <h5 class="mb-4 text-xl font-medium text-gray-500">Standard plan</h5>
                        <div class="flex items-baseline text-gray-900">
                            <span class="text-3xl font-semibold">$</span>
                            <span class="text-5xl font-extrabold tracking-tight">49</span>
                            <span class="ms-1 text-xl font-normal text-gray-500">/month</span>
                        </div>
                        <ul role="list" class="space-y-5 my-7">
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-sky-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">2 team members</span>
                            </li>
                            <li class="flex">
                                <svg class="flex-shrink-0 w-4 h-4 text-sky-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">20GB Cloud
                                    storage</span>
                            </li>
                            <li class="flex">
                                <svg class="flex-shrink-0 w-4 h-4 text-sky-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">Integration
                                    help</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">Sketch Files</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">API Access</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">Complete
                                    documentation</span>
                            </li>
                            <li class="flex line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-4 h-4 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">24×7 phone & email
                                    support</span>
                            </li>
                        </ul>
                        <button type="button"
                            class="text-white bg-sky-800 hover:bg-sky-900 focus:ring-4 focus:outline-none focus:ring-sky-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose
                            plan</button>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-layout>
