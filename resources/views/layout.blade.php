<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @livewireStyles
    <link href="{{mix('drystack/css/components.css')}}" rel="stylesheet">
    <script src="{{mix('drystack/js/components.js')}}" defer></script>
</head>
<body class="h-screen overflow-hidden flex items-center justify-center bg-neutral-100">

<main class="flex w-full h-screen">
    <drystack::template.menu />

    <section class="w-full p-4">
        {{ $slot }}
    </section>

</main>

@livewireScripts
</body>
</html>
