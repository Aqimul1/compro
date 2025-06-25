<nav class="bg-transparent border-gray-200 absolute top-0 left-0 w-full z-50 font-ubuntu">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/alanxcode.png') }}" class="h-10 rounded-full" alt="ALANxCODE Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-slate-100">Adam Agency</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-row text-xl font-medium space-x-4 rtl:space-x-reverse text-slate-100">
                <li>
                    <a href="/dashboard"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'dashboard' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'dashboard' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="/users"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'users' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'users' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        Users
                    </a>
                </li>

                <li><a href="/products"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'products' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'products' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        Products
                    </a>
                </li>

                <li>
                    <a href="/testimonials"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'testimonials' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'testimonials' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        Testimonials
                    </a>
                </li>

                <li>
                    <a href="/contacts"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'contacts' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'contacts' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        Contacts
                    </a>
                </li>

                <li>
                    <a href="/settings"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'settings' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'settings' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        Settings
                    </a>
                </li>

                <li>
                    <a href="/galleries"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'galleries' ? 'bg-sky-800 text-slate-100' : 'hover:text-slate-100 hover:bg-sky-800' }} md:hover:bg-transparent md:hover:text-sky-800 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'galleries' ? 'md:text-sky-800' : 'md:text-slate-100' }}">
                        Galleries
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
