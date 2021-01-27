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
    <script src="https://kit.fontawesome.com/940802e517.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="min-h-screen flex items-center justify-center bg-neutral-50 py-12 px-4 sm:px-6 lg:px-8">
    {{ $slot }}
</div>
@livewireScripts
</body>
</html>
