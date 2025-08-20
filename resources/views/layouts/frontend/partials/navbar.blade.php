<div class="w-full bg-custom-purple px-10 py-4 fixed z-10 2xl:px-36">
    <div class="grid grid-cols-3 items-center">
        <div class="flex items-center">
            <a href="/" class="flex items-center text-3xl font-bold">
                <span class="text-white">Kompe</span>
                <span class="text-orange-500">teen</span>
            </a>
        </div>

        <ul class="hidden lg:flex items-center gap-6 justify-center">
            <li>
                <a href="{{ route('home') }}" class="text-sm text-white hover:text-orange-300">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('course.index') }}" class="text-sm text-white hover:text-orange-300">
                    Course
                </a>
            </li>
            <li class="relative" x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                    class="flex items-center gap-2 text-sm text-white hover:text-orange-300">
                    Category
                </button>
                <ul x-cloak x-show="isOpen" @click.away="isOpen = false"
                    class="overflow-auto h-96 absolute font-normal bg-white shadow w-56 border mt-2 py-1 left-0 z-20 
                           scrollbar-thumb-gray-300 scrollbar-track-gray-100 scrollbar-thin">
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('category', $category->slug) }}"
                                class="flex items-center p-3 hover:bg-gray-100 rounded-lg text-sm text-black">
                                <img src="{{ $category->image }}" class="w-5 h-5 object-cover" />
                                <span class="ml-2">{{ $category->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('review') }}" class="text-sm text-white hover:text-orange-300">
                    Review
                </a>
            </li>
            <li>
                <a href="{{ route('showcase') }}" class="text-sm text-white hover:text-orange-300">
                    Showcase
                </a>
            </li>
            <li>
                <a href="{{ route('mentor') }}" class="text-sm text-white hover:text-orange-300">
                    Mentor
                </a>
            </li>
            <li>
                <a href="{{ route('infrastructure') }}" class="text-sm text-white hover:text-orange-300">
                    Infrastructure
                </a>
            </li>
        </ul>

        <div class="hidden md:flex items-center justify-end gap-3 text-white">
            @guest
                <a href="{{ route('login') }}" 
                   class="px-4 py-2 rounded-lg text-sm bg-custom-orange hover:bg-orange-700 transition">
                    Sign In
                </a>
                <a href="{{ route('register') }}" 
                   class="px-4 py-2 rounded-lg text-sm border border-orange-500 hover:bg-white hover:text-black transition">
                    Sign Up
                </a>
            @endguest

            @auth
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center gap-2">
                        <img src="{{ Auth::user()->avatar ?? 'https://ui-avatars.com/api/?name='.Auth::user()->name }}" 
                             alt="Avatar" class="w-8 h-8 rounded-full">
                        <span>{{ Auth::user()->name }}</span>
                    </button>
                    <div x-show="open" @click.away="open = false"
                         class="absolute right-0 mt-2 w-48 bg-white text-black rounded-lg shadow-lg py-2">
                        @role('admin')
                            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                        @endrole
                        @role('member')
                            <a href="{{ route('member.dashboard') }}" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                        @endrole
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>

    </div>
</div>
    
    <!-- Mobile Nav -->
    <div class="flex gap-1 items-center md:hidden">
        <div class="rounded-lg border px-4 py-2 bg-slate-900 border-slate-700 text-white">
            <a href="{{ route('cart.index') }}">
                <i class="fa fa-shopping-cart"></i>
            </a>
        </div>
        <div class="text-white relative" x-data="{ isOpen: false }">
            @guest
                <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                    class="flex items-center gap-2 border rounded-lg px-4 py-2 bg-slate-900 border-slate-700">
                    <svg xmlns="http://www.w3.org/2000/svg" x-show="!isOpen"
                        class="icon icon-tabler icon-tabler-align-right w-5 h-5" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="4" y1="6" x2="20" y2="6"></line>
                        <line x1="10" y1="12" x2="20" y2="12"></line>
                        <line x1="6" y1="18" x2="20" y2="18"></line>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x-cloak x-show="isOpen"
                        class="icon icon-tabler icon-tabler-x w-5 h-5" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            @endguest
            @auth
                <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                    class="flex items-center gap-2 border px-4 py-2 rounded-lg text-sm bg-slate-900 border-slate-700">
                    <img src="{{ Auth::user()->avatar }}" alt="avatar"
                        class="w-5 h-5 rounded-full border border-slate-700">
                    {{ str()->limit(Auth::user()->name, 3) }}
                    <svg xmlns="http://www.w3.org/2000/svg" x-show="!isOpen"
                        class="icon icon-tabler icon-tabler-chevron-down w-4 h-4" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x-show="isOpen"
                        class="icon icon-tabler icon-tabler-chevron-up w-4 h-4" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="6 15 12 9 18 15"></polyline>
                    </svg>
                </button>
            @endauth
            <ul x-cloak x-show="isOpen" @click.away="isOpen = false"
                class="absolute font-normal bg-slate-800 shadow overflow-hidden rounded-lg w-48 border border-slate-700 mt-2 py-1 right-0 z-20">
                <li>
                    <a href="{{ route('home') }}"
                        class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500 {{ activeNav('home') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-home w-5 h-5" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('course.index') }}"
                        class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500 {{ activeNav('course*') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-device-laptop w-5 h-5" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="3" y1="19" x2="21" y2="19"></line>
                            <rect x="5" y="6" width="14" height="10"
                                rx="1"></rect>
                        </svg>
                        Course
                    </a>
                </li>
                <li>
                    <div class="relative" x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                            class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500 {{ activeNav('category*') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-category-2 w-5 h-5" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 4h6v6h-6z"></path>
                                <path d="M4 14h6v6h-6z"></path>
                                <circle cx="17" cy="17" r="3"></circle>
                                <circle cx="7" cy="7" r="3"></circle>
                            </svg>
                            Category
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="!isOpen"
                                class="icon icon-tabler icon-tabler-chevron-down w-4 h-4" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="isOpen"
                                class="icon icon-tabler icon-tabler-chevron-up w-4 h-4" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="6 15 12 9 18 15"></polyline>
                            </svg>
                        </button>
                        <ul x-cloak x-show="isOpen" @click.away="isOpen = false" class="mt-2 py-1 overflow-auto h-32">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('category', $category->slug) }}"
                                        class="flex items-center p-3 hover:text-blue-500 text-sm text-white ml-3">
                                        <img src="{{ $category->image }}" class="w-5 h-5 object-cover" />
                                        <span class="ml-2">{{ $category->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('review') }}"
                        class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500 {{ activeNav('review') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-message-2 w-5 h-5" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                            </path>
                            <line x1="8" y1="9" x2="16" y2="9"></line>
                            <line x1="8" y1="13" x2="14" y2="13"></line>
                        </svg>
                        Review
                    </a>
                </li>
                <li>
                    <a href="{{ route('showcase') }}"
                        class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500 {{ activeNav('showcase') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-source-code w-5 h-5" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14.5 4h2.5a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-5">
                            </path>
                            <path d="M6 5l-2 2l2 2"></path>
                            <path d="M10 9l2 -2l-2 -2"></path>
                        </svg>
                        Showcase
                    </a>
                </li>
                <li class="hidden lg:flex">
                    <a href="{{ route('mentor') }}"
                        class="text-sm font-semibold text-black flex items-center gap-2 {{ activeNav('mentor') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-source-code w-5 h-5" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14.5 4h2.5a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-5"></path>
                            <path d="M6 5l-2 2l2 2"></path>
                            <path d="M10 9l2 -2l-2 -2"></path>
                        </svg>
                        Mentor
                    </a>
                </li>
                <li class="hidden lg:flex">
                    <a href="{{ route('infrastructure') }}"
                        class="text-sm font-semibold text-black flex items-center gap-2 {{ activeNav('infrastructure') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-source-code w-5 h-5" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14.5 4h2.5a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-5"></path>
                            <path d="M6 5l-2 2l2 2"></path>
                            <path d="M10 9l2 -2l-2 -2"></path>
                        </svg>
                        Infrastructure
                    </a>
                </li>
                @guest
                    <li class="border-t border-dashed border-gray-700">
                        <a href="{{ route('login') }}"
                            class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-user-check w-5 h-5" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 11l2 2l4 -4"></path>
                            </svg>
                            <span class="ml-2">Login</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}"
                            class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-user-plus w-5 h-5" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 11h6m-3 -3v6"></path>
                            </svg>
                            <span class="ml-2">Register</span>
                        </a>
                    </li>
                @endguest
                @auth
                    @role('admin')
                        <li class="border-t border-dashed border-slate-700">
                            <a href="{{ route('admin.dashboard') }}"
                                class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-apps w-5 h-5" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="4" width="6" height="6"
                                        rx="1"></rect>
                                    <rect x="4" y="14" width="6" height="6"
                                        rx="1"></rect>
                                    <rect x="14" y="14" width="6" height="6"
                                        rx="1"></rect>
                                    <line x1="14" y1="7" x2="20" y2="7"></line>
                                    <line x1="17" y1="4" x2="17" y2="10"></line>
                                </svg>
                                <span class="ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="border-b border-dashed border-slate-700">
                            <a href="{{ route('admin.user.profile') }}"
                                class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-user-circle w-5 h-5" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <circle cx="12" cy="10" r="3"></circle>
                                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                </svg>
                                <span class="ml-2">Profile</span>
                            </a>
                        </li>
                    @endrole
                    @role('member')
                        <li class="border-slate-700">
                            <a href="{{ route('member.transactions.index') }}"
                                class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt nav-icon"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                    d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2">
                                    </path>
                                </svg>
                                <span class="ml-2">Transaction</span>
                            </a>
                        </li>
                        <li class="border-t border-dashed border-slate-700">
                            <a href="{{ route('member.dashboard') }}"
                                class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-apps w-5 h-5" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="4" width="6" height="6"
                                        rx="1"></rect>
                                    <rect x="4" y="14" width="6" height="6"
                                        rx="1"></rect>
                                    <rect x="14" y="14" width="6" height="6"
                                        rx="1"></rect>
                                    <line x1="14" y1="7" x2="20" y2="7"></line>
                                    <line x1="17" y1="4" x2="17" y2="10"></line>
                                </svg>
                                <span class="ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="border-b border-dashed border-slate-700">
                            <a href="{{ route('member.profile.index') }}"
                                class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-user-circle w-5 h-5" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <circle cx="12" cy="10" r="3"></circle>
                                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                </svg>
                                <span class="ml-2">Profile</span>
                            </a>
                        </li>
                    @endrole
                    <li>
                        <a href="{{ route('logout') }}"
                            class="p-3 rounded-lg text-sm font-semibold text-white flex items-center gap-2 hover:text-blue-500"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-logout w-5 h-5" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                </path>
                                <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                            </svg>
                            <span class="ml-2">Logout</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</div>
</div>
</div>
