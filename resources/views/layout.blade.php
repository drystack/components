<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @livewireStyles
    <link href="{{mix('drystack/css/components.css')}}" rel="stylesheet">
    <script src="{{mix('drystack/js/components.js')}}"></script>
    <script src="https://kit.fontawesome.com/940802e517.js" crossorigin="anonymous"></script>
</head>
<body class="h-screen overflow-hidden flex items-center justify-center bg-neutral-100">

<main class="flex w-full h-screen">
    @include('drystack::menu')

    <section class="w-full px-8 py-6 font-sans overflow-y-scroll">
        <h2 class="font-sans text-gray-700 text-2xl mb-8 text-opacity-80 max-w-screen-xl mx-auto">{{ $title ?? ''}}</h2>
        {{ $slot }}
    </section>

</main>

@livewireScripts
</body>
</html>
