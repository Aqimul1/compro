<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <header class="bg-main font-ubuntu relative">
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="relative pt-[16rem] pb-[7rem] pl-5 space-y-5 text-slate-100">
                <h1 class="text-5xl font-bold uppercase md:text-7xl">Kontak</h1>
                <hr class="w-1/2 lg:w-1/3 border-2">
            </div>
        </header>

        <main class="bg-white font-ubuntu">
            <div class="py-20 px-8 space-y-6 lg:px-20">
                <div class="text-center grid grid-cols-1 gap-y-6 lg:grid-cols-2 lg:gap-x-8">
                    <div class="p-10 bg-white space-y-4 lg:border-r-2 lg:border-b-2 lg:border-gray-900">
                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 uppercase ">
                                    Whatsapp
                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="font-normal text-gray-900/50 text-md">0815-2155-0913</p>
                        </div>
                    </div>

                    <div class="p-10 bg-white space-y-4 lg:border-l-2 lg:border-b-2 lg:border-gray-900">
                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 uppercase">Email
                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="font-normal text-gray-900/50 text-md">alanzagi@hotmail.com</p>
                        </div>
                    </div>

                    <div class="p-10 bg-white space-y-4 lg:border-t-2 lg:border-r-2 lg:border-gray-900">
                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 uppercase">ALAMAT
                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="font-normal text-gray-900/50 text-md">Jl. Kridasana No. 132 Kelurahan Pasiran</p>
                        </div>
                    </div>

                    <div class="p-10 bg-white space-y-4 lg:border-t-2 lg:border-l-2 lg:border-gray-900">
                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 uppercase">Jam Kerja
                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="font-normal text-gray-900/50 text-md">08:00 - 20:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <section class="bg-white font-ubuntu">
            <div class="py-20 px-8 space-y-6">
                <div class="text-center">
                    <h1 class="text-4xl font-bold uppercase lg:text-5xl">Kirim Pesan</h1>
                </div>

                <div>
                    <form class="max-w-xl mx-auto" name="submit-to-google-sheet">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="nama" id="nama"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-sky-600 peer"
                                placeholder=" " required />
                            <label for="nama"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="email" name="email" id="email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-sky-600 peer"
                                placeholder=" " required />
                            <label for="email"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="judul" id="judul"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-sky-600 peer"
                                placeholder=" " required />
                            <label for="judul"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Judul</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="pesan" id="pesan"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-sky-600 peer"
                                placeholder=" " required />
                            <label for="pesan"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pesan</label>
                        </div>
                        <button type="submit"
                            class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center uppercase">Kirim
                            Pesan</button>
                    </form>
                </div>
            </div>
        </section>

        <section>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.337485966178!2d108.98420807496505!3d0.8895352991018577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e3739a25f1bc61%3A0xf17e632b61b7a097!2sSMK%20Negeri%203%20Singkawang!5e0!3m2!1sid!2sid!4v1728198513272!5m2!1sid!2sid"
                class="h-[50rem] w-full lg:h-[30rem]" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    @endsection
</x-layout>
