<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="size-14">
                        <x-application-logo-other class="block fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    {{-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link> --}}

                    <div class="hidden sm:flex">
                        <x-dropdown-multilevel align="left" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 pt-3 pb-2 border-b-2 border-transparent text-sm font-medium leading-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out h-full">
                                    <div>Buscadores</div>
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                {{-- <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Pipeline') }}
                                </x-dropdown-link> --}}

                                <!-- First level items -->
                                {{-- Enlace simple --}}
                                <a href="{{ route('searchers.index') }}" title="Inicio de buscadores" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Inicio</a>

                                <!-- First level items -->
                                <div class="relative group" @mouseenter="subOpen_1d2 = true" @mouseleave="subOpen_1d2 = false">
                                    <button class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-sky-50 focus:outline-none flex items-center justify-between">
                                        <span>Pipeline 1d2</span>

                                        <svg class="size-3 transition-transform transform duration-300 ease-in-out rotate-90 group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>

                                    <!-- Second level items -->
                                    <div x-show="subOpen_1d2" class="absolute left-full top-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 ml-[-1px]"
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        <a href="{{ route('searchers.pipeline-1d2.basic.articles') }}" title="Buscador básico" class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-50">
                                            Básico
                                        </a>

                                        <a href="{{ route('searchers.pipeline-1d2.improved.articles') }}" title="Buscador mejorado" class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-50">
                                            Mejorado
                                        </a>

                                        <a href="{{ route('searchers.pipeline-1d2.pipeline.articles') }}" title="Buscador con Pipeline" class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-50">
                                            Patrón Pipeline
                                        </a>
                                    </div>
                                </div>

                                <!-- First level items -->
                                <div class="relative group" @mouseenter="subOpen_2d2 = true" @mouseleave="subOpen_2d2 = false">
                                    <button class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-sky-50 focus:outline-none flex items-center justify-between">
                                        <span>Pipeline 2d2</span>

                                        <svg class="size-3 transition-transform transform duration-300 ease-in-out rotate-90 group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>

                                    <!-- Second level items -->
                                    <div x-show="subOpen_2d2" class="absolute left-full top-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 ml-[-1px]"
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        <a href="{{ route('searchers.pipeline-2d2.shop.index') }}" title="Buscador de Productos" class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-50">
                                            Buscador de Productos
                                        </a>
                                    </div>
                                </div>
                            </x-slot>
                        </x-dropdown-multilevel>
                    </div>
                    {{-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link> --}}

                </div>
            </div>

            <!-- Settings Dropdown -->

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
