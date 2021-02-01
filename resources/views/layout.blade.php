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
<body class="h-screen overflow-hidden flex items-center justify-center bg-neutral-100 font-sans">

<main class="flex w-full h-screen">
    <aside class="w-80 h-screen shadow-md hidden sm:block">
        <div class="flex flex-col justify-between h-screen p-4 bg-primary-700">
            <div>
                <x-row class="justify-start gap-4 items-center">
                    @if(config('drystack.logo') != null)
                        <img class="h-12" src="{{asset(config('drystack.logo'))}}">
                    @endif
                    @if(config('drystack.company_name') != null)
                        <span class="text-2xl text-white">{{config('drystack.company_name')}}</span>
                    @endif
                </x-row>
                <div class="text-sm mt-10">
                    @include('drystack::menu', ['stacked' => false])
                </div>
            </div>
            <div class="flex p-3 text-white text-center text-sm">
                <div class="flex flex-row gap-4 text-white items-center">
                    <div class="flex justify-center shadow-inner uppercase items-center rounded-full h-16 w-16 text-3xl bg-primary-800 p-1">
                        {{ Drystack\Components\Helpers\StringHelper::initials(Auth::user()->name ?? '') }}
                    </div>
                    <div>
                        <x-column class="items-start">
                            <x-link href="{{route('profile')}}" class="text-white cursor-pointer">
                                <span class="hover:underline tracking-widest uppercase text-xs">{{ Auth::user()->name ?? '-' }}</span>
                            </x-link>
                            <x-link href="{{route('logout')}}" class="text-secondary-200 cursor-pointer">
                                <span class="hover:underline">Logout</span>
                            </x-link>
                        </x-column>
                    </div>
                </div>

            </div>
        </div>
    </aside>


    <section class="w-full px-8 py-6 overflow-y-scroll">
        {{ $slot }}
    </section>

</main>

@livewireScripts
</body>
</html>
