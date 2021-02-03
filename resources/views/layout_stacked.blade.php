<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @livewireStyles
    <link href="{{mix('/css/components.css', '/drystack')}}" rel="stylesheet">
    <script src="{{mix('/js/components.js', '/drystack')}}" defer></script>
</head>
<body class="bg-neutral-100">
<div>
    <nav class="bg-primary-700" x-data="{mobileOpen: false}">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        @if(config('drystack.logo') != null)
                            <img class="h-8" src="{{asset(config('drystack.logo'))}}">
                        @endif
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4 pb-2">
                            @include('drystack::menu', ['stacked' => true])
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <div class="ml-t">
                                    <button class="w-10 h-10 text-primary-50 items-center justify-center uppercase max-w-xs bg-primary-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-neutral-800 focus:ring-white"
                                            id="user-menu" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        {{ Drystack\Components\Helpers\StringHelper::initials(Auth::user()->name ?? '') }}
                                    </button>
                                </div>
                            </x-slot>
                            <x-dropdown-link href="{{ route('profile') }}">{{ __('drystack::drystack.title.profile') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('logout') }}">Logout</x-dropdown-link>
                        </x-dropdown>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button @click="mobileOpen = !mobileOpen" class="bg-primary-700 inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-700">
                        <span class="sr-only">Open main menu</span>
                        <!--
                          Heroicon name: menu

                          Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg x-show="!mobileOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <!--
                          Heroicon name: x

                          Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg x-show="mobileOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!--
          Mobile menu, toggle classes based on menu state.

          Open: "block", closed: "hidden"
        -->
        <div class="md:hidden" :class="mobileOpen ? 'block' : 'hidden'">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                @include('drystack::menu', ['stacked' => true])
            </div>
            <div class="pt-4 pb-3 border-t border-primary-600">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary-800 uppercase rounded-full flex items-center justify-center text-primary-50">
                        {{ Drystack\ComponentsHelpers\StringHelper::initials(Auth::user()->name ?? '') }}
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">{{ Auth::user()->name }}</div>
                        <div class="text-sm font-medium leading-none text-neutral-400">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                <div class="mt-3 px-2 space-y-1">
                    <x-link href="{{ route('profile') }}" class="block px-3 py-2 rounded-md text-primary-100 hover:text-white hover:bg-primary-600">{{ __('drystack::drystack.title.profile') }}</x-link>
                    <x-link href="{{ route('logout') }}" class="block px-3 py-2 rounded-md text-primary-100 hover:text-white hover:bg-primary-600">Logout</x-link>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 bg-neutral-100">
            {{ $slot }}
        </div>
    </main>
</div>
@livewireScripts
</body>
</html>

