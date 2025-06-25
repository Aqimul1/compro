<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <main class="bg-main h-screen relative font-ubuntu flex items-center justify-start">
            <div class="absolute inset-0 bg-black bg-opacity-30 backdrop-blur-sm"></div>
            <div class="relative z-10 text-slate-100 pt-20 px-6 space-y-4">
                <h2 class="text-lg font-semibold uppercase">Welcome To Agency</h2>
                <h1 class="text-5xl font-bold uppercase lg:text-7xl">Delivers More <br class="hidden md:block"> Than Expected
                </h1>
                <p class="text-md font-medium text-base md:pr-80 ">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit.
                    Tenetur <br class="hidden lg:block">
                    quaerat,
                    repellendus iure ipsa quasi
                    nesciunt.</p>
                <button
                    class="transition duration-300 bg-slate-100 text-sky-800 py-2 px-4 rounded-xl font-bold text-md uppercase hover:bg-sky-800 hover:text-slate-100">Start
                    Now</button>
            </div>
        </main>

        <section class="bg-white font-ubuntu">
            <div class="px-6 pt-20 pb-24 space-y-10 md:px-24">
                <div class="text-center text-gray-900 space-y-4">
                    <h1 class="text-4xl font-bold uppercase">We Are Creative Agency</h1>
                    <p class="text-sm opacity-60">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat alias
                        consectetur neque! Repudiandae doloremque aperiam sequi laborum impedit, incidunt obcaecati eos illo
                        sit modi labore, iure odio assumenda nesciunt voluptatem.</p>
                </div>

                <div class="flex justify-center">
                    <div class="bg-white rounded-lg text-center grid grid-cols-1 gap-y-10 md:grid-cols-3 md:gap-x-6 ">
                        <div class="space-y-4 border border-gray-900/50 p-6">
                            <div class="flex justify-center">
                                <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#075985">
                                    <path
                                        d="M480-80q-26 0-47-12.5T400-126q-33 0-56.5-23.5T320-206v-142q-59-39-94.5-103T190-590q0-121 84.5-205.5T480-880q121 0 205.5 84.5T770-590q0 77-35.5 140T640-348v142q0 33-23.5 56.5T560-126q-12 21-33 33.5T480-80Zm-80-126h160v-36H400v36Zm0-76h160v-38H400v38Zm-8-118h58v-108l-88-88 42-42 76 76 76-76 42 42-88 88v108h58q54-26 88-76.5T690-590q0-88-61-149t-149-61q-88 0-149 61t-61 149q0 63 34 113.5t88 76.5Zm88-162Zm0-38Z" />
                                </svg>
                            </div>
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">CREATIVE WORKS
                            </h5>
                            <p class="mb-3 font-normal text-gray-900 opacity-60">curabitur ullamcorper ultricies nisi. Nam
                                eget dui.
                                Etiam
                                rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero</p>
                        </div>

                        <div class="space-y-4 border border-gray-900/50 p-6">
                            <div class="flex justify-center">
                                <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#075985">
                                    <path
                                        d="M120-120v-80l80-80v160h-80Zm160 0v-240l80-80v320h-80Zm160 0v-320l80 81v239h-80Zm160 0v-239l80-80v319h-80Zm160 0v-400l80-80v480h-80ZM120-327v-113l280-280 160 160 280-280v113L560-447 400-607 120-327Z" />
                                </svg>
                            </div>
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">BUSINESS PROGRESS
                            </h5>
                            <p class="mb-3 font-normal text-gray-900 opacity-60">curabitur ullamcorper ultricies nisi. Nam
                                eget dui.
                                Etiam
                                rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero</p>
                        </div>

                        <div class="space-y-4 border border-gray-900/50 p-6">
                            <div class="flex justify-center">
                                <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#075985">
                                    <path
                                        d="M352-120H200q-33 0-56.5-23.5T120-200v-152q48 0 84-30.5t36-77.5q0-47-36-77.5T120-568v-152q0-33 23.5-56.5T200-800h160q0-42 29-71t71-29q42 0 71 29t29 71h160q33 0 56.5 23.5T800-720v160q42 0 71 29t29 71q0 42-29 71t-71 29v160q0 33-23.5 56.5T720-120H568q0-50-31.5-85T460-240q-45 0-76.5 35T352-120Zm-152-80h85q24-66 77-93t98-27q45 0 98 27t77 93h85v-240h80q8 0 14-6t6-14q0-8-6-14t-14-6h-80v-240H480v-80q0-8-6-14t-14-6q-8 0-14 6t-6 14v80H200v88q54 20 87 67t33 105q0 57-33 104t-87 68v88Zm260-260Z" />
                                </svg>
                            </div>
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">EASY CUSTOMIZE

                            </h5>
                            <p class="mb-3 font-normal text-gray-900 opacity-60">curabitur ullamcorper ultricies nisi. Nam
                                eget dui.
                                Etiam
                                rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-slate-200 font-ubuntu">
            <div class="py-20 px-4 grid grid-cols-1 gap-y-8 md:grid-cols-2 md:space-x-4 lg:px-20">
                <div class="relative overflow-hidden" style="padding-top: 56.25%;">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/rSTO0VrV38Y?si=Ix2f184YVrkpnKqI" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="space-y-6 text-gray-900">
                    <h1 class="text-5xl font-medium">WE HELP BRANDS TO CONNECT AND GROW ON LARGE</h1>
                    <p class="text-sm opacity-60">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                        Phasellus viverra
                        nulla metus varius
                        laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
                        ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus

                        Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus</p>
                    <button
                        class="transition duration-300 bg-white text-sky-800 py-2 px-4 rounded-xl font-bold text-md uppercase hover:bg-sky-800 hover:text-white">Start
                        Now</button>
                </div>
            </div>
        </section>

        <section class="bg-white font-ubuntu">
            <div class="py-20 px-6 grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-4 lg:px-20">
                <div class="space-y-6">
                    <h1 class="text-4xl font-semibold uppercase md:text-5xl">What We Offer</h1>
                    <p class="text-sm opacity-80">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus
                        viverra
                        nulla metus varius
                        laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
                        ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem
                        quam semper libero, sit adipiscing sem neque ipsum.

                        Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget
                        condimentum rhoncus, sem quam semper libero.

                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla metus
                        varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur
                        ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                        rhoncus, sem quam semper libero, sit adipiscing sem neque ipsum.</p>
                    <button
                        class="transition duration-300 bg-sky-800 text-white py-2 px-4 font-bold text-md uppercase hover:bg-white hover:text-sky-800 hover:ring hover:ring-sky-800">Explore
                        Now</button>
                </div>

                <div class="grid grid-cols-1 gap-y-6 lg:grid-cols-2 lg:gap-x-6">
                    <div class="space-y-4 border border-gray-900/50 p-6 text-center">
                        <div class="flex justify-center">
                            <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#075985">
                                <path
                                    d="M480-80q-26 0-47-12.5T400-126q-33 0-56.5-23.5T320-206v-142q-59-39-94.5-103T190-590q0-121 84.5-205.5T480-880q121 0 205.5 84.5T770-590q0 77-35.5 140T640-348v142q0 33-23.5 56.5T560-126q-12 21-33 33.5T480-80Zm-80-126h160v-36H400v36Zm0-76h160v-38H400v38Zm-8-118h58v-108l-88-88 42-42 76 76 76-76 42 42-88 88v108h58q54-26 88-76.5T690-590q0-88-61-149t-149-61q-88 0-149 61t-61 149q0 63 34 113.5t88 76.5Zm88-162Zm0-38Z" />
                            </svg>
                        </div>
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">CREATIVE DESIGN

                        </h5>
                        <p class="mb-3 font-normal text-gray-900 opacity-60">curabitur ullamcorper ultricies nisi. Nam eget
                            dui. Etiam rhoncus.</p>
                    </div>

                    <div class="space-y-4 border border-gray-900/50 p-6 text-center">
                        <div class="flex justify-center">
                            <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="075985">
                                <path
                                    d="M120-120v-200h160l160-160v-128q-36-13-58-43.5T360-720q0-50 35-85t85-35q50 0 85 35t35 85q0 38-22 68.5T520-608v128l160 160h160v200H640v-122L480-402 320-242v122H120Z" />
                            </svg>
                        </div>
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">MARKETING</h5>
                        <p class="mb-3 font-normal text-gray-900 opacity-60">curabitur ullamcorper ultricies nisi. Nam eget
                            dui. Etiam rhoncus.</p>
                    </div>

                    <div class="space-y-4 border border-gray-900/50 p-6 text-center">
                        <div class="flex justify-center">
                            <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#075985">
                                <path
                                    d="M40-120v-80h880v80H40Zm120-120q-33 0-56.5-23.5T80-320v-440q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v440q0 33-23.5 56.5T800-240H160Zm0-80h640v-440H160v440Zm0 0v-440 440Z" />
                            </svg>
                        </div>
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">PROGRAMMING

                        </h5>
                        <p class="mb-3 font-normal text-gray-900 opacity-60">curabitur ullamcorper ultricies nisi. Nam eget
                            dui. Etiam rhoncus.</p>
                    </div>

                    <div class="space-y-4 border border-gray-900/50 p-6 text-center">
                        <div class="flex justify-center">
                            <svg class="w-10 h-10 text-gray-900 mb-3" xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#075985">
                                <path
                                    d="M120-120v-200h160l160-160v-128q-36-13-58-43.5T360-720q0-50 35-85t85-35q50 0 85 35t35 85q0 38-22 68.5T520-608v128l160 160h160v200H640v-122L480-402 320-242v122H120Z" />
                            </svg>
                        </div>
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">CREATIVE DESIGN

                        </h5>
                        <p class="mb-3 font-normal text-gray-900 opacity-60">curabitur ullamcorper ultricies nisi. Nam eget
                            dui. Etiam rhoncus.</p>
                    </div>
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

        <section class="bg-white font-ubuntu">
            <div class="py-20 px-6 space-y-6 lg:px-20">
                <div class="text-center space-y-6">
                    <h1 class="text-4xl font-bold md:text-5xl text-gray-900">MEET OUR TEAM</h1>
                    <p class="text-sm text-gray-900 opacity-80"> Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                        tellus. Phasellus viverra nulla metus
                        varius
                        laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
                        ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus</p>
                </div>

                <div class="grid grid-cols-1 text-center gap-y-6 lg:grid-cols-4 lg:gap-x-4">
                    <div class="bg-white border border-gray-900/50 rounded-lg shadow">
                        <img class="rounded-t-lg" src="{{ asset('images/team1.jpg') }}" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">CRISTINA RENALDO
                            </h5>
                            <p class="mb-3 font-normal text-gray-700">Lorem Ipsum has been the industry's standard dummy
                            </p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-900/50 rounded-lg shadow">
                        <img class="rounded-t-lg" src="{{ asset('images/team3.jpg') }}" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">SMITH DENI
                            </h5>
                            <p class="mb-3 font-normal text-gray-700">Lorem Ipsum has been the industry's standard dummy
                            </p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-900/50 rounded-lg shadow">
                        <img class="rounded-t-lg" src="{{ asset('images/team2.jpg') }}" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">AMMY GRILL
                            </h5>
                            <p class="mb-3 font-normal text-gray-700">Lorem Ipsum has been the industry's standard dummy
                            </p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-900/50 rounded-lg shadow">
                        <img class="rounded-t-lg" src="{{ asset('images/team4.jpg') }}" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">KELLY JENNER
                            </h5>
                            <p class="mb-3 font-normal text-gray-700">Lorem Ipsum has been the industry's standard dummy
                            </p>
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

        <section class="bg-white font-ubuntu">
            <div class="py-20 px-6 space-y-8 md:px-20">
                <div class="text-center">
                    <h1 class="text-4xl text-gray-900 font-bold md:text-5xl">WHAT OUR CLIENT SAY
                    </h1>
                </div>

                <div class="grid grid-cols-1 gap-y-6 md:grid-cols-2 md:gap-x-6">
                    <figure
                        class="flex flex-col items-center justify-center p-8 text-center bg-white border border-gray-900 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-900 lg:mb-8">
                            <p class="my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center">
                            <img class="rounded-full w-9 h-9"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                                <div>Bonnie Green</div>
                                <div class="text-sm text-gray-500">Developer at Open AI</div>
                            </div>
                        </figcaption>
                    </figure>

                    <figure
                        class="flex flex-col items-center justify-center p-8 text-center bg-white border border-gray-900 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-900 lg:mb-8">
                            <p class="my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center">
                            <img class="rounded-full w-9 h-9"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                                <div>Bonnie Green</div>
                                <div class="text-sm text-gray-500">Developer at Open AI</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
    @endsection
</x-layout>
